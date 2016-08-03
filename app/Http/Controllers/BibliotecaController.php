<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Biblioteca\bib_clasifica;


class BibliotecaController extends Controller {

    public function biblioteca() {
        return view('viewBiblioteca/biblioteca');
    }

    public function tomos($categoria) {
		if($categoria==0){
			$tomos = DB::table('biblioteca')->select('url_tomo','url_descripcion','clasifica_id','pais','link_consulta')->get();
		}
		else{
			$tomos = DB::table('biblioteca')->select('url_tomo','url_descripcion','clasifica_id','pais','link_consulta')->where('clasifica_id','=',$categoria)->get();
		}
        
//        dd($tomos);
        $bibliotecaMenu = $this->menuBiblioteca();
      
        return view('viewBiblioteca/tomos')->with('tomos',$tomos)->with('bibliotecaMenu',$bibliotecaMenu);
        
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
    
    public function menuBiblioteca(){
        $bibliotecaMenu= DB::table('bib_clasifica')
           ->select('id','nombre')
           ->get();     
        
        return $bibliotecaMenu;
    }
}