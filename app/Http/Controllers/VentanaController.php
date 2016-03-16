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

    public function ventana_educativa() {
        $interes_educativo = Intereses_educativos::lists('interes_educativo', 'id');
        return view('viewVentana/ventana-educativa', compact('interes_educativo'));
    }

    public function registraUsuario() {

        $users = new \App\User();
        $users->name = filter_input(INPUT_POST, 'name');
        $users->email = filter_input(INPUT_POST, 'email');
        $users->password = bcrypt(filter_input(INPUT_POST, 'password'));
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
            return view('viewVentana/activacionCorrecta');
        } else {
            print 'error';
        }
    }

    public function cambiaAvatar() {
        
        // getting all of the post data
        $file = array('image' => Input::file('image'));
        // setting up rules
        $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
        //TODO VALIDAR EL UPLOAD DE LA IMAGEN
        // doing the validation, passing post data, rules and the messages
//        $validator = Validator::make($file, $rules);
//        if ($validator->fails()) {
//            $failedRules = $validator->failed();
//            var_dump ($failedRules);
//            print 'error validator';
//            // send back to the page with the input data and errors
////            return Redirect::to('upload')->withInput()->withErrors($validator);
//        } else {
            // checking file is valid.
            if (Input::file('image')->isValid()) {
                $destinationPath = 'uploaded/avatares'; // upload path
                $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
                $fileName = Auth::user ()->id . '.' . $extension; // renameing image
                Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
                // sending back with message
//                Session::flash('success', 'Upload successfully');
                print 'El archivo se subió con éxito';
//                return Redirect::to('upload');
            } else {
                // sending back with error message.
//                Session::flash('error', 'uploaded file is not valid');
                print 'No es una imagen válida';
//                return Redirect::to('upload');
            }
//        }

//        if (isset($_FILES["file"]["type"])) {
//            $validextensions = array("jpeg", "jpg", "png");
//            $temporary = explode(".", $_FILES["file"]["name"]);
//            $file_extension = end($temporary);
//            if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
//                    ) && ($_FILES["file"]["size"] < 100000)//Approx. 100kb files can be uploaded.
//                    && in_array($file_extension, $validextensions)) {
//                if ($_FILES["file"]["error"] > 0) {
//                    echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
//                } else {
//                    if (file_exists("storage/images/avatares/" . $_FILES["file"]["name"])) {
//                        echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
//                    } else {
//                        $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
//                        $targetPath = "storage/images/avatares/" . $_FILES['file']['name']; // Target path where file is to be stored
//                        move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file
//                        echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
//                        echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
//                        echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
//                        echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
//                        echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
//                    }
//                }
//            } else {
//                echo "<span id='invalid'>***Invalid file Size or Type***<span>";
//            }
//        }
    }

}
