<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Red\Colaborador;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class RedmiteController extends Controller {

    public function __construct() {
        
        $this->middleware('auth', ['only' => ['integrantes', 'guardaIntegrantes']]);
    }
    
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

    public function guardarProyecto(){
        return view('viewRed/frmproyectos');
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
        if (Auth::user()->is_researcher ){
            return view('viewRed/adminRed/frmregistroIntegrante');
        } else {
            abort(401, 'Unauthorized action.');
        }
    }

    public function guardaIntegrantes(Request $request) {        
        
        $colaborador = new Colaborador();
        $colaborador->user_id = Auth::user()->id;            
        $colaborador->puesto = filter_input(INPUT_POST, 'puesto');
        $colaborador->area = filter_input(INPUT_POST, 'area');
        $colaborador->dependencia = filter_input(INPUT_POST, 'dependencia');
        $colaborador->resena = filter_input(INPUT_POST, 'resena');            
        $colaborador->save();
        $colaborador->url_foto = $this->storeImage ($request, $colaborador->id);
        $colaborador->save();
        return redirect('redmite/admin/integrantes')->with('message','Ahora eres parte de la Red podrás publicar y descargar material');

    }

    public function storeImage ($request, $id){
        $file = $request->file('imagen');  
//        $v = Input::file('imagen');
//        var_dump ($v);
        if (Input::file('imagen')->isValid()) {            
            $targetFile = 'uploaded/redmite/integrantes/'.$id.'.png';  
            $this->resize($targetFile, Input::file('imagen')->getRealPath());            
            return $targetFile;
        } else {           
            Log::error ('La imagen no es valida para subir: '.$file->getClientOriginalName());
            return null;
        }
    }
    
    private function newImage ($originalFile){
        $info = getimagesize($originalFile);
        $mime = $info['mime'];
        switch ($mime) {
            case 'image/jpeg':
                $img = imagecreatefromjpeg($originalFile);                
                break;

            case 'image/png':
                $img = imagecreatefrompng($originalFile);                
                break;

            case 'image/gif':
                $img = imagecreatefromgif($originalFile);                
                break;

            default:
                throw new Exception('Unknown image type.');
        }
        
        return $img;
    }
    /* ANCHO Y ALTO DE LAS FOTOS DE LOS INTEGRANTES DE LA RED*/
    public $widthImage = 150;
    public $heigtImage = 150;
    
    private function resize($targetFile, $originalFile) {        
        $img = $this->newImage ($originalFile);        
        list($width, $height) = getimagesize($originalFile);
        
        $tmp = imagecreatetruecolor($this->widthImage, $this->heigtImage);        
      
        imagecopyresampled($tmp, $img, 
                0,              //dst_x
                0,              //dst_y
                0,              //src_x
                0,              //src_y
                $this->widthImage,      //dst_w
                $this->heigtImage,     //dst_h  
                $width,         //src_w
                $height);       //src_h

        if (file_exists($targetFile)) {
            unlink($targetFile);
        }
        imagepng ($tmp, $targetFile);
    }
}
