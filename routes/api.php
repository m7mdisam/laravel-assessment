<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\StudentController;

Route::apiResource('franchises', FranchiseController::class);
Route::apiResource('schedules', ScheduleController::class);
Route::apiResource('parents', ParentController::class);
Route::apiResource('students', StudentController::class);
