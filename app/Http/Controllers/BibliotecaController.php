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

    public function tomos() {
        $tomos = DB::table('Biblioteca')->select('url_tomo','url_descripcion','clasifica_id','pais')->get();
//        dd($tomos);
        $bibliotecaMenu = $this->menuBiblioteca();
      
        return view('viewBiblioteca/tomos')->with('tomos',$tomos)->with('bibliotecaMenu',$bibliotecaMenu);
        
    }
    
    public function menuBiblioteca(){
        $bibliotecaMenu= DB::table('bib_clasifica')
           ->select('id','nombre')
           ->get();     
        
        return $bibliotecaMenu;
    }
}
