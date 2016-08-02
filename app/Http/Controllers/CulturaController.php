<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class CulturaController extends Controller {

    public function cultura() {
        return view('viewCultura/cultura');
    }

}
