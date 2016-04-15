<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Intereses_educativos;

//use App\User;

class VentanaController extends Controller {
//    public function correoEnviado() {/*para pruebas de visualización*/
//        return view('viewVentana/correoEnviado');
//    }
//    
    public function ventana_educativa() {
        $interes_educativo = Intereses_educativos::lists('interes_educativo', 'id');
        return view('viewVentana/ventana-educativa', compact('interes_educativo'));
    }

    public function registraUsuario() {

        $users = new \App\User();
        $users->nickname = filter_input(INPUT_POST, 'nickname');
        $users->name = filter_input(INPUT_POST, 'name');
        $users->email = filter_input(INPUT_POST, 'email');
        $users->password = bcrypt(filter_input(INPUT_POST, 'password'));
        $users->genero = filter_input(INPUT_POST, 'genero');
        $users->nacimiento = filter_input(INPUT_POST, 'nacimiento');
        $users->ciudad = filter_input(INPUT_POST, 'ciudad');
        $users->pais = filter_input(INPUT_POST, 'pais');
        $users->intereses_edu = filter_input(INPUT_POST, 'intereses_edu');        
        $users->is_teacher = (filter_input(INPUT_POST, 'is_teacher') == 'on')? 1 : 0;
        $users->is_student = (filter_input(INPUT_POST, 'is_student') == 'on')? 1 : 0;
        $users->is_parent =  (filter_input(INPUT_POST, 'is_parent') == 'on')? 1 : 0;
        
        $users->save();
        return $this->enviaCorreoActivacion($users->email, md5($users->password));
        
    }

    public function presentacion() {
        return view('viewVentana/presentacionVentana');
    }

    public function registro() {
        return view('viewVentana/registroVentana');
    }

    public function enviaCorreoActivacion($correo, $hash) {
        Mail::send('viewVentana.emails.activacion', ['correo' => $correo, 'hash' => $hash], function ($m) use ($correo) {
            $m->from('ventana@televisioneducativa.gob.mx', 'Ventana Educativa');
            $m->to($correo)->subject('Activación de correo!');
        });
        return view('viewVentana/correoEnviado');
    }

    public function activaCorreo(Request $request, $correo, $hash) {
        $user = \App\User::where('email', '=', $correo)->first();

        if (md5($user->password) == $hash) {
            $user->activo = 1;
            $user->save();
            return Redirect::home()->with('message','¡Bienvenido! Gracias por ser parte de Ventana Educativa.');
//            return view('viewVentana/activacionCorrecta');
        } else {
            print 'error';
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
    
    private function resize($newWidth, $targetFile, $originalFile) {
        $img = $this->newImage ($originalFile);        
        list($width, $height) = getimagesize($originalFile);
//        $newHeight = ($height / $width) * $newWidth;
        $newHeight = $newWidth;
        $tmp = imagecreatetruecolor($newWidth, $newHeight);
        $width = ($width > $height)? $height : $width;
        $height = ($height > $width) ? $width : $height;
        imagecopyresampled($tmp, $img, 
                0,              //dst_x
                0,              //dst_y
                0,              //src_x
                0,              //src_y
                $newWidth,      //dst_w
                $newHeight,     //dst_h  
                $width,         //src_w
                $height);       //src_h

        if (file_exists($targetFile)) {
            unlink($targetFile);
        }
        imagepng ($tmp, $targetFile);
    }

    public function cambiaAvatar() {

        if (Input::file('image')->isValid()) {            
            $targetFile = 'uploaded/avatares/'.Auth::user()->id . '.png';  
            $this->resize(200, $targetFile, Input::file('image')->getRealPath());
            print url($targetFile);
        } else {
            print 0;
        }
    }

}
