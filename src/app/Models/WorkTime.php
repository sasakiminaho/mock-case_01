<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkTime extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','work_start','work_end'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function break_times() {
        return $this->hasOne(BreakTime::class)->latestOfMany();
    }
}
