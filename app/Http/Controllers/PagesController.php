<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller {

    public function indexRed() {
        return view('red/indexRed');
    }

    public function indexVod() {
        return view('vod/indexVod');
    }

    public function indexDocentes() {
        return view('docentes/indexDocentes');
    }
    
    public function headerRed($param) {
        return view('red/headerRed');
    }

}
