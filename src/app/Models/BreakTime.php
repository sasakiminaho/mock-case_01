<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakTime extends Model
{
    use HasFactory;
    
    protected $fillable = ['work_time_id','user_id','break_start','break_end'];

    public function workTime() {
        return $this->belongsTo('App\WorkTime');
    }
}
