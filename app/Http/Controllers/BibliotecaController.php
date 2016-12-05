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

    public function tomos($pais, $categoria) {
        if($categoria==0){
            $tomos = DB::table('biblioteca')->select('url_tomo','url_descripcion','clasifica_id','pais','link_consulta')
                ->where('pais','=',$pais)
                ->orderby('clasifica_id')
                ->get();
            $tomosNacionales = [];
            foreach($tomos as $libro){
                if($libro->clasifica_id==1){
                    array_push($tomosNacionales, $libro);                    
                }
            }
            $numNacionales = count($tomosNacionales);
        }
        else{
            $tomos = DB::table('biblioteca')->select('url_tomo','url_descripcion','clasifica_id','pais','link_consulta')
                ->where('pais','=',$pais)
                ->where('clasifica_id','=',$categoria)
                ->get();
        }
        $bibliotecaMenu = $this->menuBiblioteca();
        
        $clasificacionActual = BibliotecaController::obtieneClasificacion();
        if($clasificacionActual =='Nacionales'){
           $imagenCat ='imagenes/biblioteca/tomos/nacionales.png';
        }else{
            if($clasificacionActual=="Universitarias"){
                $imagenCat = 'imagenes/biblioteca/tomos/universitarias.png';
            }else{
                if($clasificacionActual=="Escolares"){
                    $imagenCat = 'imagenes/biblioteca/tomos/escolares.png';
                }else{
                    if($clasificacionActual=="Públicas"){
                        $imagenCat = 'imagenes/biblioteca/tomos/publicas.png';
                    }else{
                        if($clasificacionActual=="Especializadas"){
                            $imagenCat = 'imagenes/biblioteca/tomos/especializadas.png';
                        }else{
                            if($clasificacionActual=="Investigación"){
                                $imagenCat = 'imagenes/biblioteca/tomos/investigacion.png';
                            }else{
                                if($clasificacionActual=="Todos"){
                                    if($pais=='MX'){
                                        $imagenCat = 'imagenes/biblioteca/placas/mexico.png';
                                        }
                                    else 
                                        if($pais=='CR'){
                                            $imagenCat = 'imagenes/biblioteca/placas/costa_rica.png';
                                        }
                                    else{
                                        $imagenCat = 'imagenes/biblioteca/placas/mexico.png';
                                        }
                                }
                            }
                        }
                    }
                }
            }
        }
        return view('viewBiblioteca/tomos')->with('tomos',$tomos)->with('bibliotecaMenu',$bibliotecaMenu)->with('pais',$pais)->with('imagenCat',$imagenCat);
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