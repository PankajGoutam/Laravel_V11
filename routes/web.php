<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DBController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',[DBController::class,'getUsers']);
Route::get('/students',[StudentController::class,'getStudents']);
 