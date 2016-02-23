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

    public function frmbanner() {
        return view('red/frmbanner');
    }

    public function frmcolaboradores() {
        return view('red/frmcolaboradores');
    }

    public function frmproyectos() {
        return view('red/frmproyectos');
    }

    public function frmpublicaciones() {
        return view('red/frmpublicaciones');
    }

    public function usuarios() {
        return view('red/frmusuarios');
    }

    public function modalintegrantes() {
        return view('red/modalintegrantes');
    }
//    public function integrantesSlider() {
//        return view('integrantesSlider');
//    }
}
