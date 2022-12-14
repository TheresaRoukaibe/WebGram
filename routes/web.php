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

Route::get('hide', function () {
    return view('hide');
});

Route::get('add_post', function () {
    return view('add_post');
});

Route::post('signup', [ProfileController::class, "register"] );
Route::post('login', [ProfileController::class, "login"]);
Route::post('add', [ProfileController::class, "add"]);
Route::get('/edit-profile/{id}', [ProfileController::class, "edit"]);
Route::GET('/update/{id}', [ProfileController::class, "update"]);
Route::get('/delete/{id}', [ProfileController::class, "delete"]);
Route::get('/like/{id}', [ProfileController::class, "like"]);
Route::get('/comment/{id}', [ProfileController::class, "comment"]);
Route::get('/hide/{id}', [ProfileController::class, "hide"]);
Route::GET('/hide_from/{id}', [ProfileController::class, "hide_from"]);
