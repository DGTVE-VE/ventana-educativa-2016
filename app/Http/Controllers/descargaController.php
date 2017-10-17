<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class descargaController extends Controller {
    public static function ligaDescarga($idVideo) {
        // Download Videos from Youtube in PHP
        // By: Sheharyar Naseer
        /*$id = '7jDvENZZgg8'; // just in case
        if (isset($_GET["id"]))
               $id = $_GET["id"];*/

        $opciones = array(
            'http'=>array(
            'method'=>"GET",
            'header'=>"Accept-language: en\r\n" .
                      "Cookie: foo=bar\r\n"
            )
        );
        $contexto = stream_context_create($opciones);
        // Remote file we want, and the local file name to use as a temp file

        /*function curl_get_contents($url)
        {
            $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
            curl_close($ch);

            return $data;
        }*/

        $url = 'http://www.youtube.com/get_video_info?video_id='.$idVideo;
        //parse_str(curl_get_contents($url), $video_data);
        if(file_get_contents('http://www.youtube.com/get_video_info?video_id='.$idVideo, false, $contexto)){
            parse_str(file_get_contents('http://www.youtube.com/get_video_info?video_id='.$idVideo, false, $contexto), $video_data);

        }
        else{
            return $value=null;
        }

        // start server and go to http://url/?id=video-id
            $streams = $video_data['url_encoded_fmt_stream_map'];
            $streams = explode(',',$streams);
            $counter = 1;
            foreach ($streams as $streamdata) {
               //printf("Stream %d:<br/>----------------<br/><br/>", $counter);

               parse_str($streamdata,$streamdata);
               foreach ($streamdata as $key => $value) {
                       if ($key == "url") {
                               $value = urldecode($value);
                               //printf("%s", $value);
                               return $value;
                       } else {
                               //printf("%s", $value);
                               //return $value;
                       }
               }
               break;
               //$counter = $counter+1;
               //printf("<br/><br/>");
               
            }
    }

    static function url_exists($url){
        if(file_get_contents($url, FALSE, NULL, 0, 0) === false) return false;
        return true;
    }
        
    public static function ligaDescargaSeg($id){
        //if(empty($_GET['id'])){
        if(empty($id)){
            echo "No id found!";
        }
        else{
            //$id = $_GET['id'];
            $page = @file_get_contents('http://www.youtube.com/get_video_info?&video_id='.$id);
            preg_match('/token=(.*?)&thumbnail_url=/', $page, $token);
            //$token = urldecode($token[1]);
            $token ="";
            //$get = $title->video_details;
            $url_array = array ("http://youtube.com/get_video?video_id=".$id."&t=".$token,
            "http://youtube.com/get_video?video_id=".$id."&t=".$token."&fmt=18");

            if(descargaController::url_exists($url_array[1]) === true){
                $file = get_headers($url_array[1]);
            }
            elseif(descargaController::url_exists($url_array[0]) === true){
                $file = get_headers($url_array[0]);
            }

            $url = trim($file[19],"Location: ");

            //echo '<a href="'.$url.'">Download video</a>';
            return $url;
        }
    }
}