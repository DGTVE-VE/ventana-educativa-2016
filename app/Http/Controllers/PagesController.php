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
    
    public function colaboradores(){
        $colaboradores = \App\Red\Colaboradores::all ();      
        return view('viewTable')->with("colaboradores", $colaboradores);
    }
    
    public function proyectos(){
        $proyectos = \App\Red\Proyectos::all();
        return view('viewTable')->with('proyectos',$proyectos);
    }
            
    public function banner(){
        $banners = \App\Red\Banners::all();
        return view('viewTable')->with('banners',$banners);
    }
    
    
}
