<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SessionsController extends Controller
{
    public function create (){
        return Redirect::to ('acceso');
    }
    
    public function store (Request $request){
        if (Auth::attempt(Input::only ('email', 'password'))){                        
//            return Redirect::back();
            $url = $request->session()->get('url', '/');            
            return redirect()->intended($url);
        }
        return Redirect::back()->withInput ();
        
    }
    
    public function destroy (){
        Auth::logout ();
        return Redirect::back ();
    }
    
}
