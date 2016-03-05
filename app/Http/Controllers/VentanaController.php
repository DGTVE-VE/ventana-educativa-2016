<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VentanaController extends Controller {

    public function ventana_educativa() {
        return view('viewVentana/ventana-educativa');
    }

    public function registraUsuario() {
        $contacto = new \App\Red\Contacto();
        $contacto->nombre_contacto = filter_input(INPUT_POST, 'nombre_contacto');
        $contacto->correo = filter_input(INPUT_POST, 'correo');
        $contacto->asunto = filter_input(INPUT_POST, 'asunto');
        $contacto->mensaje = filter_input(INPUT_POST, 'mensaje');
        $contacto->save();
        return redirect('contacto');
    }


    public function interes_opcion() {
        return array('' => 'Selecciona Interes') + \App\Intereses_educativos::lists('id', 'interes_educativo');
    }

}
