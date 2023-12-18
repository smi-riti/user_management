<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::match(["get","post"], "/", [HomeController::class,"signup"])->name("signup");
Route::controller(HomeController::class)->group(function(){
   
   


Route::prefix("home")->group(function(){
    Route::match(["get","post"],"/home/login","login")->name("login");
    Route::get("/home/logout","logoutUser")->name("logoutUser");
    Route::middleware('auth')->group(function(){
        Route::get("/dashboard","dashboard")->name("dashboard");
        Route::get("/search","search")->name("search");
        Route::post("/create","storeUser")->name("home.user.store");
        Route::get("/view/{id}","viewUser")->name("home.user.view");
        Route::post("/{id}/update","edit")->name("home.user.update");
        Route::get("/insert","addUser")->name("home.user.add");
        Route::delete("/delete","deleteUser")->name("home.user.delete");
    });
});

});