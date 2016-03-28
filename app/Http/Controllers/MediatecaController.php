<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MediatecaController extends Controller
{
    public function mediateca() {
       return view('viewMediateca/mediateca');
    }
    public function telesecundaria() {
       return view('viewMediateca/telesecundaria');
    }
    public function telebachillerato() {
       return view('viewMediateca/telebachillerato');
    }
    public function primergrado() {
       return view('viewMediateca/primergrado');
    }
    public function segundogrado() {
       return view('viewMediateca/segundogrado');
    }
	public function tercergrado() {
       return view('viewMediateca/tercergrado');
    }
	public function semestreI() {
       return view('viewMediateca/semestreI');
    }
	public function semestreII() {
       return view('viewMediateca/semestreII');
    }
	public function semestreIII() {
       return view('viewMediateca/semestreIII');
    }
	public function semestreIV() {
       return view('viewMediateca/semestreIV');
    }
	public function semestreV() {
       return view('viewMediateca/semestreV');
    }
	public function semestreVI() {
       return view('viewMediateca/semestreVI');
    }
}
