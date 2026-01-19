<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(Request $request, $person_no)
    {
        // クエリパラメータ取得
        $work_date = $request->work_date;

        $appointment = null;
        if ($work_date) {
            $appointment = Appointment::where('person_no', $person_no)
                ->where('work_date', $work_date)
                ->first();
        }

        return view('appoint_check', compact('appointment', 'person_no', 'work_date'));
    }
}
