<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Intereses_educativos;
//use App\User;

class VentanaController extends Controller {

    public function ventana_educativa() {
        $interes_educativo = Intereses_educativos::lists('interes_educativo', 'id');
        return view('viewVentana/ventana-educativa', compact('interes_educativo'));
    }

    public function registraUsuario() {
        
        $users = new \App\User();
        $users->name = filter_input(INPUT_POST, 'name');
        $users->email = filter_input(INPUT_POST, 'email');
        $users->password = filter_input(INPUT_POST, 'password');
        $users->genero = filter_input(INPUT_POST, 'genero');
        $users->nacimiento = filter_input(INPUT_POST, 'nacimiento');
        $users->ciudad = filter_input(INPUT_POST, 'ciudad');
        $users->pais = filter_input(INPUT_POST, 'pais');
        $users->intereses_edu = filter_input(INPUT_POST, 'intereses_edu');
        $users->save();
//        return redirect('ventana_educativa');
    }
    
    public function presentacion() {
        return view('viewVentana/presentacionVentana');
    }
}
