<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


//Query Builder Usage
// class EmpsController extends Controller
// {
//     function queries(){
//         $result = DB::table('emps')->get();

//         //using where condition
//         //$result = DB::table('emps')->where('name','Rahul')->get();

//         //for first entry of the table
//         //$result = DB::table('emps')->first();

//         //if only one result come it won't be an array so we have to convert it into array
//        // $result = [$result];

//         return view('emps',['data'=>$result]);
//     }

//     function addEmp (){
//         $add = DB::table('emps')->insert([
//             'name'=>'Rohit',
//             'email'=>'rohit@gmail.com'
//         ]);
//         return "added successfully ";
//     }

//     function updateEmp ()
//     {
//         $update = DB::table('emps')->where('name','Aayan')->update([
//             'email'=>'aayan@gmail.com'
//         ]);
//         return "updated successfully";
//     }

//     function delEmp ()
//     {
//         $delete = DB::table('emps')->where('name','Aayan')->delete();
//         return "Deleted Successfully";
//     }
// }


//Queries Using Eloquent Model
use App\Models\Emp;


class EmpsController extends Controller
{
    function queries(){
        // $response = Emp::all();
        $response = Emp::get();

        //Using Where
        //$response = Emp::where('name','Ajay')->get();

        //using find
        //$response = Emp::find(1);
        //$response = [$response];

        return view('emps',['data'=>$response]);
    }

    function addEmp (){
        $add = Emp::insert([
            'name'=>'Rocky',
            'email'=>'rocky@gmail.com'
        ]);
        return 'Added Successfully';
    }

    function updateEmp (){
        $update = Emp::where('name','Rakesh')->update([
            'email'=>'rakesh@gmail.com'
        ]);
        return "Updated Successfully";
        //you have to do this  public $timestamps = false in Eloquent Model because by default they have updated_at field so it will give error if you don't have this field updated.
    }

    function delEmp (){
        $delete = Emp::where('name','Rakesh')->delete();
        return "deleted successfully";
    }
}
