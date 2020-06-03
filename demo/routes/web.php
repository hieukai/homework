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
Route::get('/master', function(){
    return view('master');
});
Route::get('/layout', function(){
    return view('layout');
});
Route::get('/sub', function(){
    return view('sub');
});

Route::get('/app', function(){
    return view('app');
});
Route::get('/childapp', function(){
    return view('childapp');
});

Route::get('/parent', function(){
    return view('parent');
});
Route::get('/child', function(){
    return view('child');
});