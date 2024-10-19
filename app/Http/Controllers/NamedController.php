<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamedController extends Controller
{
    function getName(){
        //usnig named route name
        return to_route('name');
    }
    function showName(){
        return view('namedRoute');
    }
    function user($name){
        //usnig named route user with parameter name
        return to_route('user',["name"=>'aayan']);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> e29d6a8df4e6929874930e6e4058c3573346000c
