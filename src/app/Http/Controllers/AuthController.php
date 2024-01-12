<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Models\User;
use App\Models\WorkTime;
use App\Models\BreakTime;


class AuthController extends Controller
{
    public function index()
    {
        $work_data = Auth::user()->work_times;
        $break_data = BreakTime::where(['work_time_id' => optional($work_data)->id])->latest()->first();

        return view('index', compact('work_data','break_data'));
    }

    public function attendance() {
        return view('attendance');
    }



    public function workStart() {

        $user = Auth::user();
        $work_time = WorkTime::create([
            'user_id' => $user->id,
            'work_start' => Carbon::now()
        ]);
        $work_id = $work_time->id;

        $work_data = Auth::user()->work_times;
        $break_data = BreakTime::where(['work_time_id' => $work_data->id])->latest()->first();


        return view('index', compact('work_id', 'work_data', 'break_data'));

    }

    public function workEnd() {
        $user = Auth::user();
        $work_time = WorkTime::where('user_id', $user->id)->latest()->first();

        $work_time->update([
            'work_end' => Carbon::now()
        ]);

        $work_data = Auth::user()->work_times;
        $break_data = BreakTime::where(['work_time_id' => $work_data->id])->latest()->first();

        return view('index', compact('work_data', 'break_data'));
    }

    public function breakStart(Request $request) {

        $break_time = BreakTime::create([
            'work_time_id' => $request->id,
            'break_start' => Carbon::now()
        ]);

        $work_data = Auth::user()->work_times;
        $break_data = BreakTime::where(['work_time_id' => $work_data->id])->latest()->first();
        return view('index', compact('work_data', 'break_data'));

    }

    public function breakEnd(Request $request) {
        $break_time = BreakTime::where('id', $request->id)->latest()->first();

        $break_time->update([
            'break_end' => Carbon::now()
        ]);
        $work_data = Auth::user()->work_times;
        $break_data = BreakTime::where(['work_time_id' => $work_data->id])->latest()->first();
        return view('index', compact('work_data', 'break_data'));

    }
}
