<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProjectController;
use App\Models\Language;
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

Route::get('/language/{name}', [LanguageController::class, 'index'])->name("languages");
Route::get('/languages', function(){
    return view('pages.index');
})->name('languages-page');
Route::get('/login', function(){
    return view('pages.login');
})->name('login');

Route::get('/signup', function(){
    return view('pages.signup');
})->name('signup');

Route::get('/home', [HomeController::class, 'index'])->name('home-app');

Route::get('/projects/{name}', [ProjectController::class, 'index'])->name('projects');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login_post', [AuthController::class, 'login'])->name('login_post');
Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');
