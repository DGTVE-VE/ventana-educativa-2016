<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mediateca\Telesecundaria;
use App\Mediateca\Telebachillerato;
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
//        $video = Youtube::getVideoInfo('DuoWIRDptWM');
//        var_dump ($video);
        /* obtener url de thumbnail */
//        echo $thumbnail = $video->snippet->thumbnails->default->url;
        /* obtener url */
//        $url = $request->path();
//        print 'url de seccion:  '.$url;
//        $consultaVideo = DB::select('select * from telesecundaria where grado = "primero" and materia=');
//             $bloquePaginacion = Telesecundaria::distinct()->select('bloque')->get();
//        dd($bloquePaginacion);
    }

    public function getVideos(Request $request, $nivel, $grado, $materia, $bloque) {
        /* Obtener el path */
        $url_actual = $request->path();
        /* Obtener el último fragmento de l path y agregarselo a la cadena de path actual */
        $url = substr($url_actual, 0, strrpos($url_actual, '/'));
        if ($nivel == 'telesecundaria') {
            return $this->getVideosTelesecundaria($grado, $materia, $bloque, $url);
        } else if ($nivel == 'telebachillerato') {
            return $this->getVideosTelebachillerato($grado, $materia, $bloque, $url);
        } else {
            //VISTA ERROR
            return 'error';
        }
    }

    public function getVideosTelesecundaria($grado, $materia, $bloque, $url) {
        /* Query para filtrar videos por grado, bloque, materia */
        $videos = Telesecundaria::whereNested(function($sQL) use ($grado, $materia, $bloque) {
                    $sQL->where('grado', '=', $grado);
                    $sQL->where('materia_id', '=', $materia);
                    $sQL->where('bloque', '=', $bloque);
                })->get();
        /* Query para extraer los distintos bloques que existen en la tabla */
        $paginacion = Telesecundaria::distinct()->select('bloque')->orWhereNotNull('bloque')->get();        
        /* Envío de querys y variables a la vista */
        return view('viewMediateca/videos')
                        ->with('videos', $videos)
                        ->with('paginacion', $paginacion)
                        ->with('url', $url);
    }

    public function getVideosTelebachillerato($grado, $materia, $bloque, $url) {
        $videos = Telebachillerato::whereNested(function($sQL) use ($grado, $materia, $bloque) {
                    $sQL->where('grado', '=', $grado);
                    $sQL->where('materia_id', '=', $materia);
                    $sQL->where('bloque', '=', $bloque);
                })->get();
        $paginacion = Telebachillerato::distinct()->select('bloque')->get();
//        var_dump ($videos);
        return view('viewMediateca/videos')
                        ->with('videos', $videos)
                        ->with('paginacion', $paginacion)
                        ->with('url', $url);
    }

}
