<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Grouping Of Laravel Routes on the basis of Controller Feature is introducd in Laravel v9 and can only be use on Laravel v9 and above. 
class GroupedController extends Controller
{
    function show (){
        return "This is a show route";
    }

    function add (){
        return "This is a add route";
    }

    function delete (){
        return "This is a delete route";
    }

    function about ($name){
        return $name;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> e29d6a8df4e6929874930e6e4058c3573346000c
