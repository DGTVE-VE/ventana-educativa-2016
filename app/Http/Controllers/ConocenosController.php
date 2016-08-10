<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ConocenosController extends Controller
{
    public function conocenos() {
        return view('viewConocenos/conocenos');
    }
    public function bannerInicial() {
        return view('viewConocenos/bannerInicial');
    }
    
    public function slider() {
        return view('viewConocenos/secciones');
    }
    public function noticias() {
        return view('viewConocenos/noticias');
    }
    public function mapa() {
        return view('viewConocenos/mapa');
    }
}
