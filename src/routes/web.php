<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});

Route::get('/attendance', [AuthController::class, 'attendance']);

Route:: group(['middleware' => 'auth'], function() {
    Route::post('/work_start', [AuthController::class, 'workStart'])->name('work_time/work_start');
    Route::post('/work_end', [AuthController::class, 'workEnd'])->name('work_time/work_end');
});

Route::post('/break_start', [AuthController::class, 'breakStart'])->name('break_time/break_start');
Route::post('/break_end', [AuthController::class, 'breakEnd'])->name('break_time/break_end');

Route::get('/attendance', [AttendanceController::class, 'now']);

