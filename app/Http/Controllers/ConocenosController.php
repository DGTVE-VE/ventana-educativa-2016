<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Model\Conocenos\Con_contacto;

class ConocenosController extends Controller {

    public function conocenos() {
        return view('viewConocenos/conocenos');
    }

    public function bannerInicial() {
        return view('viewConocenos/bannerInicial');
    }

    public function slider() {
        return view('viewConocenos/cubos');
    }

    public function noticias() {
        return view('viewConocenos/noticias');
    }

    public function mapa() {
        return view('viewConocenos/mapa');
    }

    public function pie() {
        return view('viewConocenos/pie');
    }

    public function cubos() {
        return view('viewConocenos/cubos');
    }

    public function guardaContactoConocenos() {
        $contacto = new Con_contacto();
        $contacto->nombre_contacto = filter_input(INPUT_POST, 'nombre_contacto');
        $contacto->correo = filter_input(INPUT_POST, 'correo');
        $contacto->asunto = filter_input(INPUT_POST, 'asunto');
        $contacto->mensaje = filter_input(INPUT_POST, 'mensaje');
        $contacto->save();
        return redirect('conocenos');
    }

}
