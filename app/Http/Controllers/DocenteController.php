<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class DocenteController extends Controller {

    public function docente() {
        return view('viewDocente/docente');
    }

}
