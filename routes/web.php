<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EmpsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',[UsersController::class,'getUsers']);

//Query Builder Usage
Route::get('/emps',[EmpsController::class,'queries']);
Route::get('/add_emps',[EmpsController::class,'addEmp']);
Route::get('/up_emps',[EmpsController::class,'updateEmp']);
Route::get('/del_emps',[EmpsController::class,'delEmp']);