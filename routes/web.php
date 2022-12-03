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
// login page
Route::get('/UserLogin', function () {
    return view('userLogin');
});
Route::get('/AdminLogin', function () {
    return view('adminLogin');
});


// register page
Route::get('/UserRegister', function () {
    return view('userRegister');
});
Route::post('/UserRegister');


// home page
Route::get('/', function () {
    return view('guestHome');
});
Route::get('/GuestHome', function () {
    return view('guestHome');
});
Route::get('/UserHome');
Route::get('/AdminHome');


// actors page
Route::get('/GuestActors', function () {
    return view('guestActors');
});
Route::get('/UserActors', function () {
    return view('userActors');
});
Route::get('/AdminActors', function () {
    return view('adminActors');
});


// watchlist page
Route::get('/UserWatchlist/{id}');
Route::post('/UserWatchlist/{id}');
Route::patch('/UserWatchlist/{id}');
Route::delete('/UserWatchlist/{id}');


// profile page
Route::get('/UserProfile/{id}');
Route::patch('/UserProfile/{id}');


// movie details page
Route::get('/GuestMovieDetails/{id}');
Route::get('/UserMovieDetails/{id}');
Route::get('/AdminMovieDetails/{id}');
Route::delete('/AdminMovieDetails/{id}');


// actor details page
Route::get('/GuestActorDetails/{id}');
Route::get('/UserActorDetails/{id}');
Route::get('/AdminActorDetails/{id}');
Route::delete('/AdminActorDetails/{id}');


// create update movie page
Route::get('/CreateMovie', function () {
    return view('createMovie');
});
Route::post('/CreateMovie');
Route::get('/UpdateMovie/{id}');
Route::patch('/UpdateMovie/{id}');


// create update actor page
Route::get('/CreateActor', function () {
    return view('createActor');
});
Route::post('/CreateActor');
Route::get('/UpdateActor/{id}');
Route::patch('/UpdateActor/{id}');
