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
// user login page
Route::get('/', function () {
    return view('userLogin');
});
Route::get('/UserLogin', function () {
    return view('userLogin');
});
// admin login page
Route::get('/AdminLogin', function () {
    return view('adminLogin');
});
// user account register page
Route::get('/UserRegister', function () {
    return view('userRegister');
});
// home page
Route::get('/GuestHome', function () {
    return view('homeTemplate');
});
