<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Models\WorkTime;
use App\Models\BreakTime;


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


    public function workStart(Request $request) {
        $user = Auth::user();

        $work_time = WorkTime::create([
            'user_id' => $user->id,
            'work_start' => Carbon::now()
        ]);

        $work_id = $request->only(['id']);
        return redirect()->back()->with($work_id);
    }

    public function workEnd() {
        $user = Auth::user();
        $work_time = WorkTime::where('user_id', $user->id)->latest()->first();

        $work_time->update([
            'work_end' => Carbon::now()
        ]);

        return redirect()->back();
    }

    public function breakStart() {
        $user = Auth::user();
        $work_time_id = $work_id->id;

        $break_time = BreakTime::create([
            'work_time_id' => $work_time_id->id,
            'user_id' => $user->id,
            'break_start' => Carbon::now()
        ]);

        return redirect()->back();
    }

    public function breakEnd() {
        $user = Auth::user();
        $work__time_id = WorkTime::where('work_end', )->get();
        $break_time = BreakTime::where('work_time_id', $work_time_id->id)->latest()->first();

        $break_time->update([
            'work_end' => Carbon::now()
        ]);

        return redirect()->back();

    }
}
