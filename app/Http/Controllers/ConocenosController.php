<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Mail;
use App\Model\Conocenos\Con_contacto;
use App\Model\Conocenos\Con_news;

class ConocenosController extends Controller {

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

    public function guardaCorreoNewsLetterConocenos() {
      $existe = Con_news::wherecorreo(filter_input(INPUT_POST, 'correo_newsletter'))->get()->first();
      if(!$existe){
        $news = new Con_news();
        $news->correo = filter_input(INPUT_POST, 'correo_newsletter');
        $news->hash = md5(date('Y/m/d H:i:s'));
        $news->save();
        $this->enviaCorreoActivacionConocenos($news->correo, $news->hash);

        \Session::flash('flash_message', '¡Enhorabuena!, ahora estas suscrito a las novedades de Ventana Educativa.');
        return redirect('conocenos');
      }
      else {
        \Session::flash('flash_message', 'El correo que ingresaste ya estaba suscrito.');
        return redirect('conocenos');
      }

    }

    public function enviaCorreoActivacionConocenos($correo, $hash) {
        Mail::send('viewConocenos.mailActivacion', ['correo' => $correo, 'hash' => $hash], function ($m) use ($correo) {
            $m->from('ventana@televisioneducativa.gob.mx', 'Ventana Educativa');
            $m->to($correo)->subject('Activación de correo!');
        });
        return redirect('viewConocenos/correoValidado');
    }

    public function activaCorreoNews(Request $request, $correo, $hash) {

        $news = Con_news::where('correo', '=', $correo)->first();

        if ($news->hash == $hash) {
            $news->validado = 1;
            $news->save();
            return redirect('viewConocenos/correoValidado');
        } else {
            print 'error';
        }
    }
    public function correoValidado() {

      return view('viewConocenos.correoValidado');

    }
}
