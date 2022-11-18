<?php

use App\Http\Controllers\ProfileController;
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
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('signup', function () {
    return view('signup');
});

Route::get('browse', function () {
    return view('browse');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('add_post', function () {
    return view('add_post');
});

Route::post('signup', [ProfileController::class, "register"] );
Route::post('login', [ProfileController::class], "login");


