<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BibliotecaController extends Controller
{
    public function biblioteca() {
        return view('viewBiblioteca/biblioteca');
    }
}
