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
$url = 'http://www.youtube.com/get_video_info?video_id='.$idVideo;
$localfile = '/tmp/mytempfilename.ext';

// Let's go cURLing...
$ch = curl_init($url);
echo $ch;
$fp = fopen($localfile,'w');

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);
parse_str(file_get_contents($localfile), $video_data);
// Get the data into memory and delete the temp file
//parse_str(file_get_contents($localfile), $video_data);
//unlink($localfile);
        /*if(file_get_contents('http://www.youtube.com/get_video_info?video_id='.$idVideo, false, $contexto)){
            parse_str(file_get_contents('http://www.youtube.com/get_video_info?video_id='.$idVideo, false, $contexto), $video_data);

        }
        else{
            return $value=null;
        }*/

        // start server and go to http://url/?id=video-id
        //echo $video_data;
            /*$streams = $video_data['url_encoded_fmt_stream_map'];
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
               
            }*/
    }
}
