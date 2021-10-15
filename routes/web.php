<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('signup',function (){
    return view("signup");
});

Route::get('login',function (){
    return view("login");
});

Route::get('muree',function (){
    return view("muree");
});

Route::get('destinations',function (){
    return view("destinations");
});

Route::get('hotel',function (){
    return view("hotel");
});

Route::get('blogcategory',function (){
    return view("blogcategory");
});

Route::get('useraccount',function (){
    return view("useraccount");
});

Route::get('accountcreated',function (){
    return view("accountcreated");
});

Route::get('about',function (){
    return view("about");
});

Route::get('contact',function (){
    return view("contact");
});

Route::get('author',function (){
    return view("author");
});

Route::get('hotellisting',function (){
    return view("hotellisting");
});

Route::get('destinationlisting',function (){
    return view("destinationlisting");
});

Route::get('bloglisting',function (){
    return view("bloglisting");
});

Route::get('blogdetail',function (){
    return view("blogdetail");
});

Route::get('blogcategorylisting',function (){
    return view("blogcategorylisting");
});

Route::get('freelancerdetail',function (){
    return view("freelancerdetail");
});

Route::get('freelancerlisting',function (){
    return view("freelancerlisting");
});

Route::get('productdetail',function (){
    return view("productdetail");
});

Route::get('productlisting',function (){
    return view("productlisting");
});