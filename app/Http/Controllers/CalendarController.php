<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\EventModel;
use MaddHatter\LaravelFullcalendar\Event;

class CalendarController extends Controller {

    public function calendario() {
        return view('viewDocente/calendario');
    }

}
