<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Http\Requests;

class BibliotecaController extends Controller {

    public function biblioteca() {
        return view('viewBiblioteca/biblioteca');
    }

    public function tomos() {
        $tomos = DB::table('Biblioteca')->select('url_tomo','url_descripcion','clasifica_id','pais')->get();
//        dd($tomos);
        return view('viewBiblioteca/tomos')->with('tomos',$tomos);
        
    }

}
