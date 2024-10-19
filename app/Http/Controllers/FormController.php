<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
   function addUser(Request $request){
      $request->validate([
         'name'=>'required | min:3 | max:15 | uppercase',
         'email'=>'required | email',
        // 'name'=>'required',
        // 'email'=>'required',
        'password'=>'required',
      ],[
        'name.required'=>"username can't be empty",
        'name.min'=>'username must be under 3-15 characters',
        'name.max'=>'username must be under 3-15 characters',
        'name.uppercase'=>"username must be in UPPERCASE",
        'email.required'=>'email can not be empty',
        'email.email'=>'Please enter a valid email e.g. abc@gmail.com'
      ]);
      //cmd for lang folder :- php artisan lang:publish
    return $request->name;
   }
   function checkBox(Request $request){
    return $request;
   }
}