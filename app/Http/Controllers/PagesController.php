<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller {

    public function home() {
        return view('home');
    }

    public function indexRed() {
        return view('indexRed');
    }

    public function indexVod() { 
        return view('indexVod');
    }

    public function indexDocentes() {
        return view('indexDocentes');
    }
    
    public function viewTable(){
        $proyectos = \App\Red\Proyectos::all ();      
        return view('viewTable')->with("proyectos", $proyectos);
    }
    
//    public function integrantesSlider() {
//        return view('integrantesSlider');
//    }
}
