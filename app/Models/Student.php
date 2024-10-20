<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // if you want to use diffrent name form model and table
    //protected $table = "table_name";

    //cmd to inspect a model :- php artisan model:show model_name

    //making a dummy function
    function dummy () {
        return "this is dummy function";
    }
}
