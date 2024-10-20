<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//cmd for migrate :- php artisan migrate
class DBController extends Controller
{
    function getUsers(){
       $users = DB::select('select * from emps');
       return view('db',['emps'=>$users]);
    }
}
