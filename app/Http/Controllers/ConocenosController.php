<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ConocenosController extends Controller
{
    public function conocenos() {
        return view('viewConocenos/conocenos');
    }
    public function bannerInicial() {
        return view('viewConocenos/bannerInicial');
    }
}
