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

// Route home
Route::get('/', function () {
    return view('Home', ['title' => 'Hello World!']);
})->name('Home');


// Route about me
Route::get('/AboutMe', function () {
    return view('AboutMe');
})->name('AboutMe');

// Route portfolio
Route::get('/Portfolio', function () {
    return view('Portfolio');
})->name('Portfolio');

// Route contact
Route::get('/Contact', function () {
    return view('Contact');
})->name('Contact');
