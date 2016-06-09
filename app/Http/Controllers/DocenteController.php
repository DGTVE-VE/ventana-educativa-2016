<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class DocenteController extends Controller {
    public function docente() {
        return view('viewDocente/docente');
    }

    public function calendario() {
        return view('viewDocente/calendario');
    }  
    
    public function mimaterial() {
        return view('viewDocente/mimaterial');
    } 

    public function materialapoyo() {
        return view('viewDocente/materialapoyo');
    } 

    public function foros() {
        return view('viewDocente/foros');
    }     
}