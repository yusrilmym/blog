<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/{name}', function ($name) { //name for passing data
//     // echo $name;//for data pass in slug
//     return view('welcome',['name'=>$name]);
// });
Route::get('/', function(){
    // return view('welcome');
    return redirect("about");//redirect
});

// Route::get('/about', function(){
//     return view('about');
// });

Route::view("about", 'about');
Route::view("xyz", 'contact');//xyz slug , contact is view

// Route::get("path","controller file");
// Route::get("users","Users@index");//not use
Route::get("users/{user}",[Users::class,'index']);