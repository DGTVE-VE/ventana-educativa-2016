<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class AdminController extends Controller
{
    public function admin() {
        $usuarioTotal = DB::table('users')->count();
//        print $usuarioTotal;
        return view('viewAdmin/admin')->with('usuarioTotal', $usuarioTotal);
    }
}
