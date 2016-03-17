<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MediatecaController extends Controller
{
    public function mediateca() {
       return view('viewMediateca/mediateca');
    }
}
