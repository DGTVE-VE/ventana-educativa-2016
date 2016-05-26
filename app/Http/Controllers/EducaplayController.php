<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Educaplay\Edu_serie;
use App\Model\Educaplay\Edu_imagen;
use App\Http\Requests;
use DB;

class EducaplayController extends Controller {

    public function educaplay1() {
        return view('viewEducaplay/educaplay');
    }
    
	public function descripciones($serieId) {
        $primerDetalleSerie = DB::table('edu_serie')
				->join('edu_imagen', 'edu_serie.id', '=', 'edu_imagen.serie_id')
				->join('edu_video', 'edu_serie.id', '=', 'edu_video.serie_id')
                ->select('edu_serie.titulo_serie', 'edu_serie.temporadas_total', 'edu_serie.clasificacion_id', 'edu_serie.descripcion', 'edu_imagen.url', 'edu_imagen.ubicacion_id', 'edu_video.sinopsis', 'edu_video.temporada', 'edu_video.capitulo', 'edu_video.url_video')
                //->where('edu_serie.id','=',$serieId)
				->where('edu_serie.id','=',2)
				->where('edu_imagen.ubicacion_id','=',1)
		        ->first();
		$detallesSerie = DB::table('edu_serie')
				->join('edu_imagen', 'edu_serie.id', '=', 'edu_imagen.serie_id')
				->join('edu_video', 'edu_serie.id', '=', 'edu_video.serie_id')
                ->select('edu_serie.titulo_serie', 'edu_serie.temporadas_total', 'edu_serie.clasificacion_id', 'edu_serie.descripcion', 'edu_imagen.url', 'edu_imagen.ubicacion_id', 'edu_video.sinopsis', 'edu_video.temporada', 'edu_video.capitulo', 'edu_video.url_video')
                //->where('edu_serie.id','=',$serieId)
				->where('edu_serie.id','=',2)
				->where('edu_imagen.ubicacion_id','=',5)
		        ->get();
        return view('viewEducaplay/descripcionSerie')->with('detallesSerie', $detallesSerie)->with('primerDetalleSerie', $primerDetalleSerie);
				/*SELECT A.titulo_serie, A.temporadas_total, A.clasificacion_id, A.descripcion, B.url, B.ubicacion_id, C.sinopsis, C.temporada, C.capitulo, C.url_video
				FROM ventana_educativa.edu_serie AS A
				INNER JOIN ventana_educativa.edu_imagen AS B ON A.id = B.serie_id 
				INNER JOIN ventana_educativa.edu_video AS C ON A.id = C.serie_id 
				WHERE A.id = '2' AND B.ubicacion_id = "2";*/
    }
	
    public function educaplayMenu() {   //* Funcion para alimentar el menu de Educaplay    
        $menuEducaplay = DB::table('edu_categorias')
                ->select('categoria')
                ->get();

        return $menuEducaplay;
    }

    public function educaplay() {

        $banner = DB::table('Edu_serie')
                ->join('Edu_imagen', 'Edu_serie.id', '=', 'Edu_imagen.serie_id')
                ->select('Edu_serie.descripcion', 'Edu_imagen.url')
                ->where('Edu_imagen.activo', '=', '1')
                ->where('Edu_imagen.ubicacion_id', '=', '1')
                ->get();
        $carretes = DB::table('edu_serie')
				->join('edu_imagen', 'edu_serie.id', '=', 'edu_imagen.serie_id')
                ->select('edu_imagen.url', 'edu_serie.titulo_serie', 'edu_serie.descripcion', 'edu_serie.categoria_id', 'edu_serie.id')
                ->where('edu_imagen.ubicacion_id','=','2')
				->orderBy('categoria_id','DESC')
		        ->get();
        $menuEducaplay = $this->educaplayMenu();
         return view('viewEducaplay/educaplay')->with('banner', $banner)->with('carretes', $carretes)->with('menuEducaplay',$menuEducaplay);
    }

    function series() {
        $menuEducaplay = $this->educaplayMenu();
        return view('viewEducaplay/listaVideosEducaplay')->with('menuEducaplay', $menuEducaplay);
    }
    
    		//    function getImagesVerticales ($tipo, $id){
//         COnuslta
//       dd($imagenVertical);   
////          $imagenVertical->toJson();
////        return '{{urlimagen 1}, {url imagen2}}';
//    }
}
