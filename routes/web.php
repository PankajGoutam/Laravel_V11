<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\NamedController;
use App\Http\Controllers\GroupPrefixController;
use App\Http\Controllers\GroupedController;
use App\Http\Middleware\AgeChecker;
use App\Http\Middleware\CountryCheck;
//cmd to make view :- php artisan make:view name_of_view
//cmd to make view inside a folder :- php artisan make:view name_of_folder.name_of_view



Route::get('/user',[UserController::class,'getUser']);
Route::get('/about',[UserController::class,'aboutUser']);
Route::get('/users/{name?}',[UserController::class,'getUserName']);//passing data to the Controller
Route::get('/login',[UserController::class,'adminLogin']);



Route::get('/', function () {
    return view('welcome');
});

//Database Routes
Route::get('/users',[DBController::class,'getUsers']);
Route::get('/students',[StudentController::class,'getStudents']);
// end

//start
//Making Routes Groups On the Basis Of Prefix
Route::prefix('student')->group(function(){
    Route::get('/home', function () {
        return view('groupPrefixRoutes');
    });
    
    Route::get('/show',[GroupPrefixController::class,'show']);
    Route::get('/add',[GroupPrefixController::class,'add']);
});
//the end url will be localhost:8000/student/home or show or add

//Making Routes Groups On the Basis Of Controller
Route::controller(GroupedController::class)->group(function(){
    Route::get('/home', function () {
        return view('groupControllerRoutes');
    });
    Route::get('/show','show');
    Route::get('/add','add');
    Route::get('/delete','delete');
    //with parameters
    Route::get('/about/{name}','about');
});

//Working With Middleware


//Applying a Single Middleware to a Single Route
Route::view('/description','description')->middleware(AgeChecker::class);

//Applying a Single Middleware to a Group of Routes
Route::middleware(CountryCheck::class)->group(function () {
    Route::get('/dashboard', function () {
        return view('description');
    });

    Route::get('/settings', function () {
        return view('description');
    });
    
    Route::get('/profile', function () {
        return view('description');
    });
});

//Applying More Than One Middleware without grouping them to a Single Route
Route::view('/disco','description')->middleware([AgeChecker::class,CountryCheck::class]);

//Applying More Than One Middleware without grouping them to a Group of Routes
Route::middleware([CountryCheck::class,AgeChecker::class])->group(function () {
    Route::get('/dance', function () {
            return view('description');
        });
    
        Route::get('/settings', function () {
                return view('description');
            });
        
            Route::get('/profile', function () {
                    return view('description');
                });
            });
            
            
//To apply group of middleware on single route in this case it's info
Route::view('/info','info')->middleware('checkers');
            
//To apply group of middleware on group of routes
Route::middleware('checkers')->group(function(){
Route::view('/show','description');
Route::view('/data','description');
Route::view('/demo','description');
Route::view('/display','description');
Route::view('/dummy','description');
});
//end

//Named Routes
//another way of using route
Route::view('name/profile/user','namedRoute')->name('name');
Route::view('name/profile/{name}','namedRoute')->name('user');

Route::get('get',[NamedController::class,'getName']);
Route::get('show',[NamedController::class,'showName']);
//named with parameters
Route::get('user/{name}',[NamedController::class,'user']);
//End Of Named Routes

//Url Info

// Route::get('/home',function(){
// Route::get('/home',function(){
//     return view('home');
// });

// Route::get('/user',function(){
//     return view('home');
// });

// Route::get('/about',function(){
//     return view('about ');
// });
// Route::get('/about/{name}',function(){
//     return view('about ');
// });
//url Info end    

Route::get('/home', function () {
    return view('home');
});
Route::get('/test-basic', function () {
    return view('test-basic');
});

//Form Work
Route::get('/', function () {
    return view('welcome');
});

Route::get('/form',function(){
    return view('user-form');
});

Route::get('/form-checkbox',function(){
    return view('user-form2');
});
Route::post('addUser',[FormController::class,'addUser']);
Route::post('checkbox',[FormController::class,'checkBox']);
//End Of Form Work    

// //Using Redirect method
// Route::get('views', function () {
//     return redirect('/home');
// });
// // required parameters
// Route::get('/post/{id}', function ($id) {
//     return "id number is :".$id;
// });
// //multiple required parameters
// Route::get('/student/{id}/{name}', function ($id,$name) {
//     return "id number is :".$id." ".$name;
// });
// //optional parameters
// Route::get('/users/{name?}', function ($name="Raj") {  
//     return $name;  
// });  

//Using Regax with where()
// Route::get('/id/{id?}', function($id = null){
//     return "id is:".$id;
// })->where('id','[0-9]+');

// Route::get('user/{name?}', function ($name=null) {  
//     return $name;  
// })->where('name','[a-zA-Z]+');  

// Route::get('user/{id}/{name}', function ($id,$name) {  
//     return "id is : ". $id ." ,".  "Name is : ".$name ;  
// })->where(['id'=>'[0-9]+', 'name'=>'[a-zA-Z]+']);  
