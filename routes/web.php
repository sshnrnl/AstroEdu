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

Route::get('/homw', function () {
    return view('welcome');
});

Route::get('/signup', function () {
    return view('Login.SignUp');
});


Route::get('/signin', function () {
    return view('Login.SignIn');
});

Route::get('/', function () {
    return view('AboutUs.AboutUs');
});

Route::get('/learn', function () {
    return view('Learning.Learning');
});