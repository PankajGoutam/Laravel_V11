<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function getStudents(){
        //$students = DB::select('select * from students');
        //using a modal function
        $data = new \App\Models\Student;
        echo $data->dummy();
        $students = \App\Models\Student::all();
        return view('student',['students'=>$students]);
        //return $students;
     }
}
