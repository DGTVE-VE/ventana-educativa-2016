<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Red\Colaborador;
use App\User;

class RedmiteController extends Controller {

    public function redmite() {
        return view('viewRed/redmite');
    }

    public function publicaciones() {
        return view('viewRed/paginapublicaciones');
    }

    public function quienesSomos() {
        return view('viewRed/paginaquienessomos');
    }

    public function prueba() {
        return view('viewRed/paginaprueba');
    }

    public function proyectos() {
        return view('viewRed/paginaproyectos');
    }

    public function areastematicas() {
        return view('viewRed/paginaareastematicas');
    }

    public function contacto() {
        return view('viewRed/paginacontacto');
    }

    public function usuarios() {
        return view('viewRed/frmusuarios');
    }

    public function correoValidado() {
        return view('viewRed/correoValidado');
    }

    public function guardaCorreoNewsLetter() {

        $news = new \App\Model\Red\News();
        $news->correo = filter_input(INPUT_POST, 'correo_newsletter');
        $news->hash = md5(date('Y/m/d H:i:s'));
        $news->save();

        $this->enviaCorreoActivacion($news->correo, $news->hash);
        return redirect('redmite');
    }

    public function activaCorreoNews(Request $request, $correo, $hash) {

        $news = \App\Model\Red\News::where('correo', '=', $correo)->first();

        if ($news->hash == $hash) {
            $news->validado = 1;
            $news->save();
            return redirect('redmite/correoValidado');
        } else {
            print 'error';
        }
    }

    public function guardaContacto() {
        $contacto = new \App\Model\Red\Contacto();
        $contacto->nombre_contacto = filter_input(INPUT_POST, 'nombre_contacto');
        $contacto->correo = filter_input(INPUT_POST, 'correo');
        $contacto->asunto = filter_input(INPUT_POST, 'asunto');
        $contacto->mensaje = filter_input(INPUT_POST, 'mensaje');
        $contacto->save();
        return redirect('redmite/contacto');
    }

    public function enviaCorreoActivacion($correo, $hash) {
        Mail::send('viewRed.mailActivacion', ['correo' => $correo, 'hash' => $hash], function ($m) use ($correo) {
            $m->from('redmite@televisioneducativa.gob.mx', 'Red Mesoamericana');
            $m->to($correo)->subject('Activación de correo!');
        });
        return redirect('redmite/correoValidado');
    }

    public function integrantes() {
        return view('viewRed/adminRed/frmintegrantes');
    }

    public function buscaIntegrantes(Requests $request) {
        $email = filter_input(INPUT_POST, 'email');
//         print $email;
        $integrante = User::where('email', $email)->first();
        if (is_null($integrante)) {
           return redirect('redmite/admin/integrantes')->with('message', 'Usuario No Registrado');
        } else {
            $request->session()->flash('status', 'Captura los demás datos para completar el registro!');
            return redirect('redmite/admin/integrantes')->with($integrante);
        }
//         print $integrante;
    }

}
