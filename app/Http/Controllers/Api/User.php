<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class User extends Controller
{
    public function existEmail (Request $request, $email) {
        
        $usuario = \App\User::where ('email', '=', $email)->first();    
        if ($usuario == NULL)
            print json_encode (NULL);
        else
            print json_encode($usuario->id);
    }
    
    public function existNick (Request $request, $nickname) {
        
        $usuario = \App\User::where ('nickname', '=', $nickname)->first();    
        if ($usuario == NULL)
            print json_encode (NULL);
        else
            print json_encode($usuario->id);
    }
}
