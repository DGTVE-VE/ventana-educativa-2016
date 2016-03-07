<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Intereses_educativos;

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

    public function store() {
        $input = Input::all();

        if (!$this->user->fill($input)->isValid()) {
            return Redirect::back()->withInput()->withErrors($this->user->errors);
        }

        //if the user input is  valid then save it and assign associated role
        $this->user->save();
        $this->user->assignRole(Input::get('role'));

        return Redirect::to('/user')->with('flash_message', 'User added to the database!');
    }

}
