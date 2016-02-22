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

    public function publicaciones() {
        return view('red/paginapublicaciones');
    }

////
    public function quienesSomos() {
        return view('red/paginaquienessomos');
    }

    public function prueba() {
        return view('red/paginaprueba');
    }

    public function proyectos() {
        return view('red/paginaproyectos');
    }

    public function areastematicas() {
        return view('red/paginaareastematicas');
    }

    public function viewTable() {
        $proyectos = \App\Red\Proyectos::all();
    }
    public function contacto() {
        return view('red/paginacontacto');
    }
        public function formBanner() {
        return view('red/formbanner');
    }
//    public function integrantesSlider() {
//        return view('integrantesSlider');
//    }
}
