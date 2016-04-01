<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests;
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

    public function getVideosTelesec(Request $request) {
        $url = $request->path();
        var_dump(explode('/', $url));

        /* whereNested: varias condiciones */
        $videosTelesecundaria =  \App\Telesecundaria::whereNested(function($query) {
                            $query->where('materia', '=', 'Artes I. Artes Visuales');
                            $query->where('grado', '=', '1');
                        })
                        ->get(array('id', 'materia','grado','bloque','sinopsis','url'));
         return $videosTelesecundaria->toJson();            
    }

}
