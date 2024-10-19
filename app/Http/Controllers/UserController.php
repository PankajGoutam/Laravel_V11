<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//cmd to make Controller :- php artisan make:controller UserController 

//to check if a view exists or not
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function getUser(){
        return view('views');
    }

    function getUserName($name){
        return view('getUSer',['name'=>$name]);//getting data from the route
    }

    function aboutUser(){
        return " I am 24 years old";
    }

    //checking the view
    function adminLogin(){
        if (View::exists('admin.signup')) {
            return view('admin.signup');//calling a view inside admin folder
        }
        else{
            echo "Page not found";
        }
    }
}
