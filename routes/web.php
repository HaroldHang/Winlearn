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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function() {
    return view('pages.index');
})->name("home");

Route::get('/language', function() {
    return view('pages.language');
})->name("languages");

Route::get('/login', function(){
    return view('pages.login');
})->name('login');

Route::get('/signup', function(){
    return view('pages.signup');
})->name('signup');

Route::get('/home', function(){
    return view('pages.home');
})->name('home-app');

Route::get('/projects', function(){
    return view('pages.projects');
})->name('projects');

