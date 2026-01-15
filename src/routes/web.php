<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

Route::get('/{person_no}', [AppointmentController::class, 'index']);
