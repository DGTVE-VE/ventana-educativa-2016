<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SessionsController extends Controller {

    function get_client_ip_server() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if (isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';

        return $ipaddress;
    }

    public function create(Request $request) {
//        $url = $request->session()->get('url');
//            print $url;
        //Autenticar a Facebook        
        if (strpos($_SERVER['HTTP_USER_AGENT'], "facebookexternalhit/1.1" ) !== false){
            $user = \App\User::where ('email', 'facebook@facebook.com')->first();
            Auth::login ($user);
            session_start();
            $url = $_SESSION['url'];
//            $url = $request->session()->get('url');
            var_dump($url);
//            return Redirect::to ($url);
//            return redirect()->intended($url);
        }   else { 
            return Redirect::to ('acceso');
        }
    }

    public function store(Request $request) {
        $email = Input::get('email');
        $password = Input::get('password');
        if (Auth::attempt(['email' => $email, 'password' => $password, 'activo' => 1])) {
//        if (Auth::attempt(Input::only('email', 'password'))) {
//            return Redirect::back();
            $url = $request->session()->get('url', '/');
            return redirect()->intended($url);
        }
        return Redirect::back()->withInput()->withErrors(['¡Alerta!', 'Debe activar su cuenta']);
    }

    public function destroy() {
        Auth::logout();
        return Redirect::back();
    }

}
