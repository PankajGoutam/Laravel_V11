<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    function getUsers() {
        //Using API in Laravel
        $response = Http::get('https://jsonplaceholder.typicode.com/users/');
        //return $response->body();
        //return $response->status();
        //return $response->headers();
        return view('display_users',['data'=>json_decode($response)]);
    }
}
