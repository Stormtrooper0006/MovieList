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

// home page
Route::get('/', function () {
    return view('guestHome');
});
Route::get('/GuestHome', function () {
    return view('guestHome');
});
Route::get('/UserHome', function () {
    return view('userHome');
});
Route::get('/AdminHome', function () {
    return view('adminHome');
});


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
Route::get('/UserWatchlist', function () {
    return view('userWatchlist');
});

// profile page
Route::get('/UserProfile', function () {
    return view('userProfile');
});

// movie details page
Route::get('/GuestMovieDetails', function () {
    return view('guestMovieDetails');
});
Route::get('/UserMovieDetails', function () {
    return view('userMovieDetails');
});
Route::get('/AdminMovieDetails', function () {
    return view('adminMovieDetails');
});

// actor details page
Route::get('/GuestActorDetails', function () {
    return view('guestActorDetails');
});
Route::get('/UserActorDetails', function () {
    return view('userActorDetails');
});
Route::get('/AdminActorDetails', function () {
    return view('adminActorDetails');
});

// create update movie page
Route::get('/CreateMovie', function () {
    return view('createMovie');
});

// create update actor page
Route::get('/CreateActor', function () {
    return view('createActor');
});
