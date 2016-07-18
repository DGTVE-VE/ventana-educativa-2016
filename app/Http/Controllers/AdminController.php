<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class AdminController extends Controller
{
    public function admin() {
        /*Usuarios totales*/
        $usuarioTotal = DB::table('users')->count();
        /*Series en educamedia*/
        $seriesLista = DB::table('edu_serie')->select('titulo_serie')->get();
        $videosTotalTelesecundaria = DB::table('med_telesecundaria')->count();
        $videosTotalTelebachillerato = DB::table('med_telebachillerato')->count();        
        return view('viewAdmin/admin')
                ->with('usuarioTotal', $usuarioTotal)
                ->with('seriesLista',$seriesLista)
                ->with('videosTotalTelesecundaria',$videosTotalTelesecundaria)
                ->with('videosTotalTelebachillerato',$videosTotalTelebachillerato)
                ;
    }
   
}

