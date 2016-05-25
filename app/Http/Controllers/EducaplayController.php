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
        $carretes = DB::table('Edu_serie')
				->join('Edu_imagen', 'Edu_serie.id', '=', 'Edu_imagen.serie_id')
                ->select('edu_imagen.url', 'edu_serie.titulo_serie', 'edu_serie.descripcion', 'edu_serie.categoria_id')
                ->where('Edu_imagen.ubicacion_id','=','2')
				->orderBy('categoria_id','DESC')
		        ->get();

        $menuEducaplay = $this->educaplayMenu();
         return view('viewEducaplay/educaplay')->with('banner', $banner)->with('carretes', $carretes)->with('menuEducaplay',$menuEducaplay);
    }

    function series() {
        $menuEducaplay = $this->educaplayMenu();
        return view('viewEducaplay/listaVideosEducaplay')->with('menuEducaplay', $menuEducaplay);
    }
}
