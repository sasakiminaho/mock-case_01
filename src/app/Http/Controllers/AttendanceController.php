<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Models\User;
use App\Models\WorkTime;
use App\Models\BreakTime;

class AttendanceController extends Controller
{
    public function now() {
        $now_date = Carbon::today()->format('Y-m-d');
        $user_data = WorkTime::whereDate('created_at', $now_date)->get();
        foreach ($user_data as $user_list){
            $break_data = BreakTime::where(['work_time_id' => $user_list->id])->get();
        };


        return view('/attendance', compact('now_date', 'user_data','user_list','break_data'));
    }


}
