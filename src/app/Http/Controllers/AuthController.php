<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function attendance() {
        return view('attendance');
    }

    public function day()
    {
        $day = Carbon::now();
        $now_format = $day->format('Y-m-d');

        return view('attendance', compact('now_format'));
    }
}
