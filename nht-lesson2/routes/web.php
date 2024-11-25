<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/les2', function () {
    return "<h1>Hello World, I,m nht </h1>";
});

#Redirect 
Route::redirect('/here','three');

Route::get('/three', function (){
    return "<h1> hello world, I'm nht </h1>";
});

#router return view 
Route::get('/huy-thong',function(){
    return view('huythong');
});

#Routeer parameter
Route::get('/devmaster/{id}',function($id){
    return"<h1> Devmaster ".$id. "</h1>";
});