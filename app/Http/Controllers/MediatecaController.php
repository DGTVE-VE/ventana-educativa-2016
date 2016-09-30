<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Mediateca\Telesecundaria;
use App\Model\Mediateca\Telebachillerato;
use App\Model\Mediateca\RatingTelesecundaria;
use App\Model\Mediateca\RatingTelebachillerato;
use \Alaouy\Youtube\Facades\Youtube;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use DB;

class MediatecaController extends Controller {

     public function __construct() {

        $this->middleware('auth',
            ['only' => [
                        // 'getVideosTelesecundaria',
                        'guardaRating',
                        // 'getVideosTelebachillerato',
                        'storeTelesecundariaComment',
                        'telesecundariaComments',
                        'storeTelebachilleratoComment',
                        'telebachilleratoComments']]);
    }

    public function mediateca() {
		$breadcrumbs = 'educamedia';
        return view('viewMediateca/mediateca')->with('breadcrumbs', $breadcrumbs);
    }

    public function telesecundaria() {
		$breadcrumbs = 'telesecundaria';
        return view('viewMediateca/telesecundaria')->with('breadcrumbs', $breadcrumbs);
    }

    public function telebachillerato() {
		$breadcrumbs = 'telebachillerato';
        return view('viewMediateca/telebachillerato')->with('breadcrumbs', $breadcrumbs);
    }
	
	public function sea() {
		$breadcrumbs = 'sea';
        return view('viewMediateca/sea')->with('breadcrumbs', $breadcrumbs);
    }

    public function primergrado() {
		$breadcrumbs = 'primergrado';
        return view('viewMediateca/primerGrado')->with('breadcrumbs', $breadcrumbs);
    }

    public function segundogrado() {
		$breadcrumbs = 'segundogrado';
        return view('viewMediateca/segundoGrado')->with('breadcrumbs', $breadcrumbs);
    }

    public function tercergrado() {
		$breadcrumbs = 'tercergrado';
        return view('viewMediateca/tercerGrado')->with('breadcrumbs', $breadcrumbs);
    }

    public function semestreI() {
		$breadcrumbs = 'semestreI';
        return view('viewMediateca/semestreI')->with('breadcrumbs', $breadcrumbs);
    }

    public function semestreII() {
		$breadcrumbs = 'semestreII';
        return view('viewMediateca/semestreII')->with('breadcrumbs', $breadcrumbs);
    }

    public function semestreIII() {
		$breadcrumbs = 'semestreIII';
        return view('viewMediateca/semestreIII')->with('breadcrumbs', $breadcrumbs);
    }

    public function semestreIV() {
		$breadcrumbs = 'semestreIV';
        return view('viewMediateca/semestreIV')->with('breadcrumbs', $breadcrumbs);
    }

    public function semestreV() {
		$breadcrumbs = 'semestreV';
        return view('viewMediateca/semestreV')->with('breadcrumbs', $breadcrumbs);
    }

    public function semestreVI() {
		$breadcrumbs = 'semestreVI';
        return view('viewMediateca/semestreVI')->with('breadcrumbs', $breadcrumbs);
    }

    public function componente() {
		$breadcrumbs = 'Proped&#201;utico';
        return view('viewMediateca/componente')->with('breadcrumbs', $breadcrumbs);
    }

    public function videos() {
//        $thumbnail = "https://i.ytimg.com/vi/".$video1."/default.jpg";

        return view('viewMediateca/videos');
    }

    public function getVideosTelesecundaria(Request $request,$grado, $materia, $bloque) {
    $url_actual = $request->path();
            /* Obtener el último fragmento de l path y agregarselo a la cadena de path actual */
            $url = substr($url_actual, 0, strrpos($url_actual, '/'));
        if ($bloque > 0){
            /* Query para filtrar videos por grado, bloque, materia */
            $videos = Telesecundaria::whereNested(function($sQL) use ($grado, $materia, $bloque) {
                        $sQL->where('grado', '=', $grado);
                        $sQL->where('materia_id', '=', $materia);
                        $sQL->where('bloque', '=', $bloque);
                        $sQL->where('url', '!=', '');
                    })->get();
                    /* Query para extraer los distintos bloques que existen en la tabla */
            $paginacion = DB::select('select distinct bloque from med_telesecundaria where bloque != 0 and grado = :grado and materia_id = :materia_id order by bloque', ['grado' => $grado, 'materia_id' => $materia]);
        } else {
                    /* Query para filtrar videos por grado, bloque, materia */
            $videos = Telesecundaria::whereNested(function($sQL) use ($grado, $materia, $bloque) {
                    $sQL->where('grado', '=', $grado);
                    $sQL->where('materia_id', '=', $materia);
            })->get();
            $paginacion [] = new Telesecundaria;
            $paginacion[0]->bloque = 0;
        }

                    /* Query para determinar si el uruario actual tiene rol de docente en ventana educativa */
                    if (isset(Auth::user()->id)) {
                      $user_id = Auth::user ()->id;
                  		$consultaDocente = \App\Model\Mediateca\docente::where('user_id',$user_id)->get();
                  		if($consultaDocente!= '[]'){
                  			$esDocente = true;
                  		}
                  		else{
                  			$esDocente = false;
                  		}
                    }else {
                      $esDocente = false;
                    }


        /* Envío de querys y variables a la vista */
        return view('viewMediateca/videosTelesecundaria')
                        ->with('videos', $videos)
                        ->with('paginacion', $paginacion)
                        ->with('url', $url)
                        ->with('nivel', 'telesecundaria')
						->with('esDocente',$esDocente);
    }

    public function guardaRating (){
        $nivel = filter_input(INPUT_POST, 'nivel');
        $id = filter_input(INPUT_POST, 'id');
        $rating = filter_input(INPUT_POST, 'rating');
        if ($nivel == 'telesecundaria') {
            $user_id = Auth::user ()->id;
            $ratingSaved = RatingTelesecundaria::
                    firstOrCreate(['user_id' => $user_id,
                                   'telesecundaria_id' => $id]);
            $ratingSaved->rating = $rating;
            $ratingSaved->save ();
        }
        if ($nivel == 'telebachillerato') {
            $user_id = Auth::user ()->id;
            $ratingSaved = \App\Model\Mediateca\RatingTelebachillerato::
                    firstOrCreate(['user_id' => $user_id,
                                   'telebachillerato_id' => $id]);
            $ratingSaved->rating = $rating;
            $ratingSaved->save ();
        }
        return 'rating guardado';
    }
    
    public function getRatingTelesecundaria ($id){
        $rating = RatingTelesecundaria::where ('telesecundaria_id', $id)
            -> where ('user_id',Auth::user()->id)->first();
        if ($rating == NULL)
            print 0;
        else
            print $rating->rating;
    }
    
    public function getRatingTelebachillerato ($id){
        $rating = RatingTelebachillerato::where ('telebachillerato_id', $id)
            -> where ('user_id',Auth::user()->id)->first();
        if ($rating == NULL)
            print 0;
        else
            print $rating->rating;
    }

    public function getVideosTelebachillerato($grado, $materia) {
                    /* Query para filtrar videos por grado, materia */
            $videos = Telebachillerato::whereNested(function($sQL) use ($grado, $materia) {
                    $sQL->where('semestre', '=', $grado);
                    $sQL->where('materia_id', '=', $materia);
            })->get();

                    /* Query para determinar si el uruario actual tiene rol de docente en ventana educativa */
                    if(isset(Auth::user ()->id)){
		$user_id = Auth::user ()->id;
		$consultaDocente = \App\Model\Mediateca\docente::where('user_id',$user_id)->get();
		if($consultaDocente!= '[]'){
			$esDocente = true;
		}
		else{
			$esDocente = false;
		}
  }else {
    $esDocente = false;

  }

        /* Envío de querys y variables a la vista */
        return view('viewMediateca/videosTelebachillerato')->with('videos', $videos)->with('nivel', 'telebachillerato')->with('esDocente',$esDocente);
    }

    public function storeTelesecundariaComment (){

        $comment = new \App\Model\Mediateca\TelesecundariaComments;
        $comment->comment_id = filter_input (INPUT_POST, 'comment_id');
        $comment->usuario_id = Auth::user ()->id;
        $comment->telesecundaria_id = filter_input (INPUT_POST, 'video_id');
        $comment->comment = filter_input (INPUT_POST, 'comment');
        $comment->save ();
        return view('viewMediateca/comment')->with('comment', $comment);
    }

    public function telesecundariaComments ($id){
        $comments = \App\Model\Mediateca\TelesecundariaComments::
                where('telesecundaria_id', $id)
                ->where ('comment_id', 0)
                ->orderBy('created_at','DESC')->get();
        return view('viewMediateca/comments')->with('comments', $comments);
    }

     public function storeTelebachilleratoComment (){

        $comment = new \App\Model\Mediateca\TelebachilleratoComments;
        $comment->comment_id = filter_input (INPUT_POST, 'comment_id');
        $comment->usuario_id = Auth::user ()->id;
        $comment->telebachillerato_id = filter_input (INPUT_POST, 'video_id');
        $comment->comment = filter_input (INPUT_POST, 'comment');
        $comment->save ();
        return view('viewMediateca/comment')->with('comment', $comment);
    }

    public function telebachilleratoComments ($id){

        $comments = \App\Model\Mediateca\TelebachilleratoComments::
                where('telebachillerato_id', $id)
                ->where ('comment_id', 0)
                ->orderBy('created_at','DESC')->get();
        return view('viewMediateca/comments')->with('comments', $comments);
    }
	
	/* 	------------	Función que extrae e imprime breadcrumbs	-----------	 */

	function seleccionaGrado($grado) {
		switch ($grado) {
			case '1': $grado = 'primergrado';
				break;
			case '2': $grado = 'segundogrado';
				break;
			case '3': $grado = 'tercergrado';
				break;
			case 'I': $grado = 'semestreI';
				break;
			case 'II': $grado = 'semestreII';
				break;
			case 'III': $grado = 'semestreIII';
				break;
			case 'IV': $grado = 'semestreIV';
				break;
			case 'V': $grado = 'semestreV';
				break;
			case 'VI': $grado = 'semestreVI';
				break;
		}
		return $grado;
	}

	public function generaBreadCrumbs() {
		$breadcrumb = "";
		$uri = filter_input(INPUT_GET, 'url');
		$uriActual = explode('/', $uri);
		$elemsURI = count($uriActual);
		$j = $elemsURI - 1;
		$termina = false;
		while ($uriActual[$j] != 'educamedia') {
			$j--;
		}
		$breadcrumb = $breadcrumb . '<a href=' . url($uriActual[$j]);
		$breadcrumb = $breadcrumb . '>' . strtoupper($uriActual[$j]) . '</a>';
		$hrefCompleta = $uriActual[$j];
		$j++;
		for ($i = $j; $i < $elemsURI; $i++) {
			if (strlen($uriActual[$i]) < 4) {
				$gradoURI = MediatecaController::seleccionaGrado($uriActual[$i]);
				$termina = true;
			} else {
				$gradoURI = $uriActual[$i];
			}
			$hrefCompleta = url($hrefCompleta . "/" . $gradoURI);
			$breadcrumb = $breadcrumb . ' / <a href="' . $hrefCompleta;
			if (strpos($uriActual[$i], '%C3%A9') !== false) {
				$gradoURI = 'Proped&#201;utico';
				$termina = true;
			}
			$breadcrumb = $breadcrumb . '">' . strtoupper($gradoURI) . '</a>';
			if ($termina == true) {
				break;
			}
		}
		return $breadcrumb;
	}
}
