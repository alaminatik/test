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

Route::get('/hello', function(){
 return "hello";
});
Route::get('/ddddd', function(){
 return "heldddlo";
});
Route::get('/hedddllo', function(){
 return "ddd";
});



Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});


Route::get('/Test', function () {
    return view('Test');
});
Route::get('/Test', function () {
    return view('Test');
});

Route::get('/demo', function () {
    return view('demo');
});
Route::get('/sddsdsd', function () {
    return view('demo');
});