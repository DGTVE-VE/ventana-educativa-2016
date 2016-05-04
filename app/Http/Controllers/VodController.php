<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VodController extends Controller
{
    public function vod() {
        return view('viewVod/vod');
    }
}
