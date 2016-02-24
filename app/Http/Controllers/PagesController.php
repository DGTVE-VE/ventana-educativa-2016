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

    public function guardaCorreoNewsLetter() {

        $news = new \App\Red\News();
        $news->correo = filter_input(INPUT_POST, 'correo_newsletter');
        $news->hash = md5(date('Y/m/d H:i:s'));
        $news->save();
        $this->sendConfirmMail($news->correo, $news->hash);
        print 'guardado';
    }

    public function activaCorreoNews(Request $request, $correo, $hash) {

        $news = \App\Red\News::where('correo', '=', $correo)->first();

        if ($news->hash == $hash) {
            print 'iguales';
        } else {
            print 'diferentes';
        }
    }

    private function sendConfirmMail($mail, $hash) {

        $título = 'Activa tu cuenta de la red mesoamericana';
        $mensaje = "
                    <html>
                    <head>
                      <title>Activa tu cuenta de la red mesoamericana</title>
                    </head>
                    <body>
                      <a  href='http://ventana.televisioneducativa.gob.mx/public/indexRed?correo=$mail'>
                         <button type='button'> Activa tu cuenta</button>
                      </a>
                    </body>
                    </html>
                    ";

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales        
        $cabeceras .= 'From: Recordatorio <ventana@televisioneducativa.gob.mx>' . "\r\n";

// Enviarlo
        mail($mail, $título, $mensaje, $cabeceras);
    }

//    public function integrantesSlider() {
//        return view('integrantesSlider');
//    }

    public function guardaContacto() {
        $contacto = new \App\Red\Contacto();
        $contacto->nombre_contacto = filter_input(INPUT_POST, 'nombre_contacto');
        $contacto->correo = filter_input(INPUT_POST, 'correo');
        $contacto->asunto = filter_input(INPUT_POST, 'asunto');
        $contacto->mensaje = filter_input(INPUT_POST, 'mensaje');
        $contacto->save();  
        return view('red/paginacontacto');
    }

}
