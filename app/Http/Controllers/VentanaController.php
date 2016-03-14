<?php

namespace App\Http\Controllers;

use Mail;
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
        $users->password = bcrypt (filter_input(INPUT_POST, 'password'));
        $users->genero = filter_input(INPUT_POST, 'genero');
        $users->nacimiento = filter_input(INPUT_POST, 'nacimiento');
        $users->ciudad = filter_input(INPUT_POST, 'ciudad');
        $users->pais = filter_input(INPUT_POST, 'pais');
        $users->intereses_edu = filter_input(INPUT_POST, 'intereses_edu');
        $users->save();
        return $this->enviaCorreoActivacion($users->email, md5($users->password));
//        return redirect('ventana_educativa');
    }
    
    public function presentacion() {
        return view('viewVentana/presentacionVentana');
    }
    
    public function registro() {
        return view('viewVentana/registroVentana');
    }
    
    public function enviaCorreoActivacion($correo, $hash) {
        Mail::send('viewVentana.emails.activacion', 
                    ['correo' => $correo, 'hash' => $hash], 
                    function ($m) use ($correo) {
                        $m->from('ventana@televisioneducativa.gob.mx', 'Ventana Educativa');
                        $m->to($correo)->subject('Activación de correo!');
                    });
        return view('viewVentana/correoEnviado');
    }
    
    public function activaCorreo (Request $request, $correo, $hash){
        $user = \App\User::where('email', '=', $correo)->first();

        if (md5($user->password) == $hash) {
            $user->activo = 1;
            $user->save();
            return view ('viewVentana/activacionCorrecta');
        } else {
            print 'error';
        }
    }     
    
}
