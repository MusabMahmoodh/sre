<?php

namespace App\Controllers;

class Api extends BaseController
{

	public function index()
	{
		return view('welcome_message');
	}

	public function img($pa)
	{
        /**
         * The way of using the api
         * https://www.someexample.com/api/img/{backet name}/{repeat the folder structure with slashes}/{file name}
         * https://www.canopuz.com/cms/public/api/img/cano-mis/pli-sanasacampus/00477da37e2493ec4b3011fc3fe32c86.jpg
         */
        $path_arr = func_get_args();

        $path = s3_tmp_url($path_arr[0],str_replace($path_arr[0]."/","",implode('/', func_get_args())));

        $ext = pathinfo($path, PATHINFO_EXTENSION);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $path); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
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
        
        $this->response->setHeader('Pragma', 'public')
            ->appendHeader('Cache-Control', 'max-age=86400')
            ->appendHeader('Expires', gmdate('D, d M Y H:i:s \G\M\T', time() + 86400))
            ->appendHeader('Content-Type', 'image/jpg');

        imagejpeg($dest_image,NULL,90);
        imagedestroy($dest_image);
        imagedestroy($im);
    }

}