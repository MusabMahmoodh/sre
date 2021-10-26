<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) Canopus Pvt Ltd. <zugunan@gmail.com>
 *
 * For any updates or clarify contact canopus dev team
 */

/**
 * CodeIgniter Canopus Helpers
 */

if (! function_exists('is_logged'))
{
	/**
	 * Check if the user logged in or not
	 *
	 * @param string null
	 *
	 * @return boolion
	 */
	function is_logged()
	{
        $user = json_decode(json_encode(wp_get_current_user()),TRUE);
        
        return isset($user['data']['ID']);
	}
}

if (! function_exists('auth_rd'))
{
	/**
	 * Check if the user autherized if not redirect for login
	 *
	 * @param string null
	 *
	 * @return boolion
	 */
	function auth_rd($cap="")
	{
        $user = json_decode(json_encode(wp_get_current_user()),TRUE);

        $login_url = wp_login_url(base_url());

        if(!isset($user['data']['ID']) || ($cap!="" && !isset($user['allcaps'][$cap])))
        {
            $_SESSION['redirect'] = base_url();
            header("Location:" . $login_url); 
            die;
        }
	}
}

if (! function_exists('is_auth'))
{
	/**
	 * Check if the user autherized if not redirect for login
	 *
	 * @param string null
	 *
	 * @return boolion
	 */
	function is_auth($cap)
	{
        $user = json_decode(json_encode(wp_get_current_user()),TRUE);

        return isset($user['allcaps'][$cap]);
	}
}

if (! function_exists('get_config'))
{
	/**
	 * Check if the user autherized if not redirect for login
	 *
	 * @param string null
	 *
	 * @return boolion
	 */
	function get_config($id=1)
	{
        $db = \Config\Database::connect();
        
        $query = $db->query('SELECT value FROM ven_config WHERE id = ' . $id);
        $row   = $query->getRowArray();

        return $row['value'];
	}
}

if (! function_exists('pre'))
{
	/**
	 * Flatten a multidimensional array using dots as separators.
	 *
	 * @param iterable $array The multi-dimensional array
	 * @param string   $id    Something to initially prepend to the flattened keys
	 *
	 * @return array The flattened array
	 */
	function pre($array)
	{
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}
}

if (! function_exists('elapsed'))
{
	/**
	 * Seconds to human readable form
	 *
	 * @param seconds as integer
	 *
	 * @return string human readable form
	 */
	function elapsed($seconds)
	{
		$dtF = new \DateTime('@0');
		$dtT = new \DateTime("@$seconds");

		$time_human_readable = "";

		if($seconds<60)
		{
			$time_human_readable = $dtF->diff($dtT)->format('%s seconds');
		}
		elseif($seconds<3600)
		{
			$time_human_readable = $dtF->diff($dtT)->format('%i minutes and %s seconds');
		}
		elseif($seconds<86400)
		{
			$time_human_readable = $dtF->diff($dtT)->format('%h hours, %i minutes and %s seconds');
		}
		else
		{
			$time_human_readable = $dtF->diff($dtT)->format('%a days, %h hours, %i minutes and %s seconds');
		}

		return $time_human_readable;
	}
}

if (! function_exists('cano_set_alert'))
{
	/**
	 * Set the alert message and it's type
	 *
	 * @param type as string
	 * @param message as string
	 *
	 * @return null
	 */
	function cano_set_alert($type,$message)
	{
		$_SESSION['alert_type'] = $type;
		$_SESSION['alert_message'] = $message;
	}
}

if (! function_exists('cano_get_alert'))
{
	/**
	 * Set the alert message and it's type
	 *
	 * @param void
	 *
	 * @return string
	 */
	function cano_get_alert()
	{
		if(isset($_SESSION['alert_type']))
		{
			echo '<div class="alert alert-'.$_SESSION['alert_type'].' alert-dismissible fade show" role="alert">
					'.$_SESSION['alert_message'].'
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>';
			unset($_SESSION['alert_type']);
			unset($_SESSION['alert_message']);
		}
	}
}

if (! function_exists('lock_entity'))
{
	/**
	 * Set the alert message and it's type
	 *
	 * @param id as integer
	 * @param table as string
	 *
	 * @return entity as array
	 */
	function lock_entity($id,$table)
	{
		$user = json_decode(json_encode(wp_get_current_user()),TRUE);
		$db = \Config\Database::connect();

		$del_query = $db->table('ven_entity_lock')
						->where('locked_at <' . (time()-get_config(3)));
		$del_query->delete();

		$query = $db->table('ven_entity_lock')
					->select('ven_entity_lock.id,ven_entity_lock.table_name,ven_entity_lock.primary_key,ven_entity_lock.csrf_id,wp_users.ID,wp_users.display_name')
					->join('wp_users', 'wp_users.ID = ven_entity_lock.locked_by', 'left')
					->where('ven_entity_lock.table_name', $table)
					->where('ven_entity_lock.primary_key', $id)
					->where('ven_entity_lock.locked_at >' . (time()-get_config(3)))
					->get();
		$result = $query->getRowArray();

		if(isset($result['ID']))
		{
			if($result['ID']!=$user['ID'])
			{
				$result['is_locked'] = TRUE;
				cano_set_alert("danger",'<strong>Locked for editing!</strong> Currently this record being edit by "' . $result['display_name'] . '". Please wait till the edit completed or contact "' . $result['display_name'] . '" and ask to finish the editing. If the user inactive then it will be auto reset in 10 minute.');
			}
			else
			{
				$result['is_locked'] = FALSE;

				$update_query = $db->table('ven_entity_lock');
				$update_query->set('locked_at', time());
				$update_query->where('id', $result['id']);
				$update_query->update();
			}
		}
		else
		{
			$result = [
				'table_name' => $table,
				'primary_key'  => $id,
				'csrf_id'  => md5($table . $id . time() . rand(1,999999)),
				'locked_at' => time(),
				'locked_by' => $user['ID'],
			];

			if($id > 0)
			{
				$insert_query = $db->table('ven_entity_lock');
				$insert_query->insert($result);
			}

			$result['ID'] = $user['ID'];
			$result['is_locked'] = FALSE;
		}

		if($id==0)
		{
			$result['is_locked'] = FALSE;
		}

		return $result;
	}
}

if (! function_exists('relese_entity'))
{
	/**
	 * Set the alert message and it's type
	 *
	 * @param id as integer
	 *
	 * @return entity as array
	 */
	function relese_entity($id)
	{
		$user = json_decode(json_encode(wp_get_current_user()),TRUE);
		$db = \Config\Database::connect();

		$del_query = $db->table('ven_entity_lock')
						->where('id',$id)
						->where('locked_by',$user['ID']);
		$del_query->delete();
	}
}

if (! function_exists('get_current_url'))
{
	/**
	 * This is to return current url
	 *
	 * @param void
	 *
	 * @return url as string
	 */
	function get_current_url()
	{
		return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	}
}


/**
 * All aws SDK function are being placed here
 * Consider the package import are bellow
 */
use Aws\S3\S3Client;
use Aws\Credentials\Credentials;
use Aws\Exception\MultipartUploadException;
use Aws\S3\MultipartUploader;

if ( ! function_exists('s3_upload'))
{
	function s3_upload($bucket,$local_path,$server_path,$key="",$secret="")
	{
		if(strlen($key)>3)
		{
			$data['AWS_ACCESS_KEY_ID'] = $key;
			$data['AWS_SECRET_ACCESS_KEY'] = $secret;
		}
		else
		{
			$data['AWS_ACCESS_KEY_ID'] = config("App")->awsAccessKey;
			$data['AWS_SECRET_ACCESS_KEY'] = config("App")->awsSecretKey;
		}
        
        $status = FALSE;

        $credentials = new Credentials($data['AWS_ACCESS_KEY_ID'], $data['AWS_SECRET_ACCESS_KEY']);
        
        // Instantiate the S3 client with your AWS credentials
        $client = S3Client::factory(array(
			'version'     => 'latest',
			'region'      => 'us-east-1',
            'credentials' => $credentials
        ));

		$uploader = new MultipartUploader($client, $local_path, [
			'bucket' => $bucket,
			'key' => $server_path,
		]);

        // Perform the upload. Abort the upload if something goes wrong
        try {
            $uploader->upload();
            $status = TRUE;
        } catch (MultipartUploadException $e) {
            $uploader->abort();
            echo "Upload failed.";
        }

        return $status;
	}
}

if ( ! function_exists('s3_tmp_url'))
{
	function s3_tmp_url($bucket,$server_path)
	{
        $data['AWS_ACCESS_KEY_ID'] = config("App")->awsAccessKey;
        $data['AWS_SECRET_ACCESS_KEY'] = config("App")->awsSecretKey;
        
        $credentials = new Credentials($data['AWS_ACCESS_KEY_ID'], $data['AWS_SECRET_ACCESS_KEY']);
        
        // Instantiate the S3 client with your AWS credentials
        $client = S3Client::factory(array(
			'version'     => 'latest',
			'region'      => 'us-east-1',
            'credentials' => $credentials
        ));

		$cmd = $client->getCommand('GetObject', [
			'Bucket' => $bucket,
			'Key' => $server_path
		]);

        $request = $client->createPresignedRequest($cmd, '+10 minutes');

		return (string)$request->getUri();
	}
}

if ( ! function_exists('s3_delete'))
{
	function s3_delete($bucket,$server_path)
	{
        $data['AWS_ACCESS_KEY_ID'] = config("App")->awsAccessKey;
        $data['AWS_SECRET_ACCESS_KEY'] = config("App")->awsSecretKey;
        
        $credentials = new Credentials($data['AWS_ACCESS_KEY_ID'], $data['AWS_SECRET_ACCESS_KEY']);
        
        // Instantiate the S3 client with your AWS credentials
        $client = S3Client::factory(array(
			'version'     => 'latest',
			'region'      => 'us-east-1',
            'credentials' => $credentials
        ));

		return $client->deleteObject([
			'Bucket' => $bucket,
			'Key'    => $server_path
		]);
	}
}

if ( ! function_exists('cano_poc'))
{
	function cano_poc()
	{
        echo config("App")->awsAccessKey;
	}
}

if (! function_exists('track'))
{
	/**
	 * Tracking user activity
	 *
	 * @param string null
	 *
	 * @return boolion
	 */
	function track()
	{
		$track_file = "/var/www/html/venera/cms/access.log";
		$contents = file_get_contents($track_file);
		$track = json_decode($contents,TRUE);
        $track[] = array(
			'user' => json_decode(json_encode(wp_get_current_user()),TRUE),
			'server' => $_SERVER,
			'post' => $_POST
		);
		file_put_contents($track_file,json_encode($track));
	}
}