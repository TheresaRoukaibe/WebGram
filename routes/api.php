<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Profile;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(["prefix"=> "v0.1"], function(){
    Route::get("/profile", [ProfileController::class, "getAllProfiles"]);
    Route::post("/register",[ProfileController::class, "register"] );
    Route::post("/login", [ProfileController::class, "login"]);
    Route::post("/add", [ProfileController::class, "add"]);
    Route::get("/edit-profile/{id}", [ProfileController::class, "edit"]);
    Route::GET("/update/{id}", [ProfileController::class, "update"]);
    Route::get('/delete/{id}', [ProfileController::class, "delete"]);
    Route::get('/like/{id}', [ProfileController::class, "like"]);
    Route::get('/comment/{id}', [ProfileController::class, "comment"]);
});
