<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Http\Requests;
use App\Model\Admin\Users_admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller {

    public function admin() {
//        dd(Auth::user()->id);
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $consultaAdministrador = Users_admin::where('users_id', $user_id)->get();
            if ($consultaAdministrador != '[]') {
                /* Usuarios totales */
                $usuarioTotal = DB::table('users')->count();
                /* Docentes Totales */
                $docenteTotal = DB::table('med_docente')->count();
                $docenteTelesecundaria = DB::table('med_docente')->where('tipo_docente', '=', 1)->count();
                $docenteBasica = DB::table('med_docente')->where('tipo_docente', '=', 2)->count();
                $docenteOtro = DB::table('med_docente')->where('tipo_docente', '=', 1)->count();
                /* Series en educamedia */
                $seriesLista = DB::table('edu_serie')->select('titulo_serie')->get();
                /* Videos totales en educaplay y educamedia */
                $videosTotalTelesecundaria = DB::table('med_telesecundaria')->count();
                $videosTotalTelebachillerato = DB::table('med_telebachillerato')->count();
                return view('viewAdmin/admin')
                        ->with('usuarioTotal', $usuarioTotal)
                        ->with('docenteTelesecundaria', $docenteTelesecundaria)
                        ->with('docenteBasica', $docenteBasica)
                        ->with('docenteOtro', $docenteOtro)
                        ->with('docenteTotal', $docenteTotal)
                        ->with('seriesLista', $seriesLista)
                        ->with('videosTotalTelesecundaria', $videosTotalTelesecundaria)
                        ->with('videosTotalTelebachillerato', $videosTotalTelebachillerato)
                        ->with('consultaAdministrador', $consultaAdministrador);
                ;
            } else {
                return Redirect::to('acceso')->withInput()->withErrors(['¡Alerta!', 'Sin permiso para esta sección']);
            }
        } else {
            return Redirect::back();
        }
    }

}
