<?php

namespace App\Controllers;
use App\Models\LibModel;

class Lib extends BaseController
{
	private $data;

    public function __construct()
    {
        $this->data = array();
	}

	public function index()
	{
		return view('welcome_message');
	}

	public function ssh_cmd()
	{
		$host = '184.73.125.236';
		$port = 22;
		$user = 'sinon';
		$pass = 'Hchk2021';

		$connection = ssh2_connect($host, $port, array('hostkey'=>'ssh-rsa'));
		ssh2_auth_password($connection, $user, $pass);

		$cmd = '
		MEM_TOTAL=`cat /proc/meminfo | grep "MemTotal:" | awk \'{ print $2 }\'` 
		MEM_FREE=`cat /proc/meminfo | grep "MemAvailable:" | awk \'{ print $2 }\'`
		MEM_USED=$((MEM_TOTAL-MEM_FREE))
		MEM_RATIO=`echo "$MEM_USED / $MEM_TOTAL" | bc -l`
		MEM_PERCENT=`echo "$MEM_RATIO * 100" | bc`
		MEM_PERC_ROUND=`printf "%.0f" "$MEM_PERCENT"`
		echo \'' . $pass . '\' | sudo -S whoami
		whoami
		echo $MEM_PERC_ROUND
		';

		$stream = ssh2_exec($connection, $cmd);

		stream_set_blocking($stream, true);
		$stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
		$err = ssh2_fetch_stream($stream,SSH2_STREAM_STDERR);
		echo "<pre>";
		echo stream_get_contents($stream_out);
		echo stream_get_contents($err);
	}

	public function xml_parser()
	{
		$xml_object=simplexml_load_file("/mnt/www/general/www.canopuz.com/cms/resources/poc/sample.kml") or die("Error: Cannot create object");
		$xml_array=json_decode(json_encode($xml_object),TRUE);
		$arr_points = explode(" ",trim($xml_array["Document"]["Placemark"]["Polygon"]["outerBoundaryIs"]["LinearRing"]["coordinates"]));
		$polygon = array();
		echo "<pre>";

		foreach($arr_points as $val)
		{
			$coordinates = explode(",",$val);
			$polygon[] = array("lat"=>floatval($coordinates[1]),"lng"=>floatval($coordinates[0]));
		}
		print_r(json_encode($polygon));
	}

	public function db_chk()
	{
		$libModel = new LibModel();
		$users = $libModel->orderBy('ID', 'DESC')->findAll();
		print_r($users);
	}

	public function wp_user()
	{
		echo '<pre>';
		$arr = wp_get_current_user();
		$user = json_decode(json_encode($arr),TRUE);
		echo get_avatar_url( $user['data']['ID']);
		print_r($user);
		if ( current_user_can( 'add_work_group' ) ) {
			echo "I can add";
		}
		echo wp_logout_url( "https://www.canopuz.com/cms/public/" ) . "<br>";
		echo wp_login_url( "https://www.canopuz.com/cms/public/");
	}

	public function wp_login()
	{
		echo '<pre>';
		$arr = json_encode(wp_authenticate( "wp_user", "Wp_Apass2020" ));
		$user = json_decode($arr,TRUE);
		if(isset($user['data']['user_email']))
		{
			echo $user['data']['user_email'];
		}
		print_r($user);
	}

	public function wp_user_by()
	{
		echo '<pre>';
		$arr = json_encode(get_user_by('email', 'wpuser@gmail.com'));
		$user = json_decode($arr,TRUE);
		if(isset($user['data']['user_email']))
		{
			echo $user['data']['user_email'];
		}
		print_r($user);
	}

	public function wp_get_url()
	{
		echo site_url();
		echo "<br>" . site_url('forums/thread');
	}

	public function elapsed()
	{
		echo elapsed(362100);
	}

	public function date()
	{
		echo date("Y-m-d H:i:s", 1618712220) . "<br/>";
		echo strtotime("2021-04-17 21:17:00"). "<br/>";
		echo date("d-m-Y", strtotime("2021-04-17 21:17:00"));
	}

	public function get_users()
	{
		$blogusers = get_users();
		pre($blogusers);
	}

	public function ping_log($key="general")
	{
		$file = '/mnt/www/general/www.canopuz.com/cms/resources/poc/ping.txt';
		// Open the file to get existing content
		$current = file_get_contents($file);
		// Append a new person to the file
		$current .= $key . ": " . date('Y-m-d H:i:s') . " \n";
		// Write the contents back to the file
		file_put_contents($file, $current);
		pre($current);
	}

	public function img($path)
	{
        if(isset($_SESSION['user_id']))
        {
            $path = s3_tmp_url("rwss-resource",str_replace("Images/","rzImages/",implode('/', func_get_args())));             
        }else{
            $path = "resources/sitecontent/notauthorized.png";
        }
        
        $ext = pathinfo($path, PATHINFO_EXTENSION);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $path); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // good edit, thanks!
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1); // also, this seems wise considering output is image.
        $data = curl_exec($ch);
        curl_close($ch);

        $im = imagecreatefromstring($data);

        if(strtolower($ext)=="jpg" || strtolower($ext)=="jpeg")
        {
            $im = imagecreatefromjpeg($data);
        }
        elseif(strtolower($ext)=="png")
        {
            $im = imagecreatefrompng($data);
            imagealphablending($im, false);
            imagesavealpha($im, true);
        }
        
        
        $source_imagex = imagesx($im);
        $source_imagey = imagesy($im);
        $dest_imagex = 600;
        $dest_imagey = round(($dest_imagex/$source_imagex)*$source_imagey);
        $dest_image = imagecreatetruecolor($dest_imagex, $dest_imagey);
        imagecopyresampled($dest_image, $im, 0, 0, 0, 0, $dest_imagex, 
        $dest_imagey, $source_imagex, $source_imagey);
        

        header('Pragma: public');
        header('Cache-Control: max-age=86400');
        header('Expires: '. gmdate('D, d M Y H:i:s \G\M\T', time() + 86400));
        header('Content-Type: image/jpg');

        imagejpeg($dest_image,NULL,90);
        imagedestroy($dest_image);
        imagedestroy($im);
    }

	public function s3handling()
	{
		$bucket = "cano-mis";
		$bucket = config("App")->s3BucketName;
		$local_path = "/mnt/www/disk2/git/venera/resources/poc/sugu.png";
		$server_path = "venera/poc/sugu.png";
		//s3_upload($bucket,$local_path,$server_path);
		//echo s3_tmp_url($bucket,$server_path);
		//s3_delete($bucket,$server_path);
	}

	public function list_file()
	{
		if ($handle = opendir("/mnt/www/disk2/www.pli-sanasacampus.com/survey/resources/survey/")) {
            while (false !== ($entry = readdir($handle))) {        
                if (is_file("/mnt/www/disk2/www.pli-sanasacampus.com/survey/resources/survey/" . $entry)) {
                    echo $entry . "<br>";
                }
            }
            closedir($handle);
        }

		rename("/mnt/www/disk2/www.pli-sanasacampus.com/survey/resources/survey/65847a98af77a71425a3624df91f69e3.jpg", "/mnt/www/disk2/www.pli-sanasacampus.com/survey/resources/survey/del/65847a98af77a71425a3624df91f69e3.jpg");

	}

	public function lex()
	{
		return view('/lib/lex',$this->data);
	}

	public function bot()
	{
		return view('/lib/bot',$this->data);
	}

	public function bot_poc()
	{
		return view('/lib/bot_poc',$this->data);
	}

	public function pulse()
	{
		track();
	}
}
