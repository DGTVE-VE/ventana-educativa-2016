<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Telesecundaria;
use App\Telebachillerato;
use \Alaouy\Youtube\Facades\Youtube;

class MediatecaController extends Controller {

    public function mediateca() {
        return view('viewMediateca/mediateca');
    }

    public function telesecundaria() {
        return view('viewMediateca/telesecundaria');
    }

    public function telebachillerato() {
        return view('viewMediateca/telebachillerato');
    }

    public function primergrado() {
        return view('viewMediateca/primerGrado');
    }

    public function segundogrado() {
        return view('viewMediateca/segundoGrado');
    }

    public function tercergrado() {
        return view('viewMediateca/tercerGrado');
    }

    public function semestreI() {
        return view('viewMediateca/semestreI');
    }

    public function semestreII() {
        return view('viewMediateca/semestreII');
    }

    public function semestreIII() {
        return view('viewMediateca/semestreIII');
    }

    public function semestreIV() {
        return view('viewMediateca/semestreIV');
    }

    public function semestreV() {
        return view('viewMediateca/semestreV');
    }

    public function semestreVI() {
        return view('viewMediateca/semestreVI');
    }

    public function videos() {
//        $thumbnail = "https://i.ytimg.com/vi/".$video1."/default.jpg";

        return view('viewMediateca/videos');
    }

    public function test(Request $request) {
        /* Obtener información de video */
        $video = Youtube::getVideoInfo('DuoWIRDptWM');
//        var_dump ($video);
        /* obtener url de thumbnail */
        echo $thumbnail = $video->snippet->thumbnails->default->url;
        /* obtener url */
        $url = $request->path();
//        print 'url de seccion:  '.$url;
//        $consultaVideo = DB::select('select * from telesecundaria where grado = "primero" and materia=');
    }

    public function getVideos(Request $request, $nivel, $grado, $materia) {

        if ($nivel == 'telesecundaria') {
            return $this->getVideosTelesecundaria($grado, $materia);
        } else if ($nivel == 'telebachillerato') {
            return $this->getVideosTelebachillerato($grado, $materia);
        } else {
            //VISTA ERROR
            return 'error';
        }
    }

    public function getVideosTelesecundaria($grado, $materia) {
        $videos = Telesecundaria::whereNested(function($sQL) use ($grado, $materia) {
                    $sQL->where('grado', '=', $grado);
                    $sQL->where('materia_id', '=', $materia);
                })->get();
//        var_dump ($videos);
        return view('viewMediateca/videos')->with('videos', $videos);
    }

    public function getVideosTelebachillerato($grado, $materia) {
        $videos = Telebachillerato::whereNested(function($sQL) use ($grado, $materia) {
                    $sQL->where('grado', '=', $grado);
                    $sQL->where('materia_id', '=', $materia);
                })->get();
//        var_dump ($videos);
        return view('viewMediateca/videos')->with('videos', $videos);
    }

}
