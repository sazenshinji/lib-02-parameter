<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index($person_no = 1)
    {
        return view('appoint_check');
    }
}
