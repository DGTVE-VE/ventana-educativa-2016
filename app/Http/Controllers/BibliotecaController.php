<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Http\Requests;

class BibliotecaController extends Controller {

    public function biblioteca() {
        return view('viewBiblioteca/biblioteca');
    }

    public function tomos($categoria) {
		if($categoria==0){
			$tomos = DB::table('Biblioteca')->select('url_tomo','url_descripcion','clasifica_id','pais')->get();
		}
		else{
			$tomos = DB::table('Biblioteca')->select('url_tomo','url_descripcion','clasifica_id','pais')->where('clasifica_id','=',$categoria)->get();
		}
        
//        dd($tomos);
        return view('viewBiblioteca/tomos')->with('tomos',$tomos);
        
    }
	public static function obtieneClasificacion(){
		$uri = $_SERVER['REQUEST_URI'];
		$uriActual = explode('/', $uri);
		$elemsURI = count($uriActual);
		$j = $elemsURI - 1;
		if($uriActual[$j]==0){
			$nombreClasifica = "Todos";
		}else{
			$clasificaActual = DB::table('bib_clasifica')->select('nombre')->where('id','=',$uriActual[$j])->get();
			
			$cuenta=0;
			foreach($clasificaActual as $actual){
				$nombreClasifica = $actual->nombre;
				$cuenta++;
			}
			if($cuenta==0){
				$nombreClasifica = "Ninguno";
			}
		}
		return $nombreClasifica;
	}
}