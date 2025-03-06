<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware("auth:sanctum")->group(function(){
    Route::get("/user", action: function (Request $request){
return $request->user();
});
    Route::post("/logout", [AuthController::class,"logout"])->name("");
});

Route::post("/register", [AuthController::class, "register"]);
Route::post("/login", [AuthController::class, "login"]);

Route::get('/hello', function () {
    return 'Hello World';
});