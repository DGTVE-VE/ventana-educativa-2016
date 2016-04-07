<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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

    public function frmbanner() {
        return view('viewRed/frmbanner');
    }

    public function frmcolaboradores() {
        return view('viewRed/frmcolaboradores');
    }

    public function frmproyectos() {
        return view('viewRed/frmproyectos');
    }

    public function frmpublicaciones() {
        return view('viewRed/frmpublicaciones');
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
            return redirect('correoValidado');
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
        return redirect('contacto');
    }

    public function enviaCorreoActivacion($correo, $hash) {
        Mail::send('viewRed.mailActivacion', ['correo' => $correo, 'hash' => $hash], function ($m) use ($correo) {
            $m->from('redmite@televisioneducativa.gob.mx', 'Red Mesoamericana');
            $m->to($correo)->subject('Activación de correo!');
        });
        return redirect('correoValidado');
    }

}
