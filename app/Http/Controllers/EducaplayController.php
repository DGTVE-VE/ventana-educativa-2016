<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EducaplayController extends Controller
{
    public function educaplay() {
        return view('viewEducaplay/educaplay');
    }
    public function series() {
        return view('viewEducaplay/listaVideos');
    }
}
