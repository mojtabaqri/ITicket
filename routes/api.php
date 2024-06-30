<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StateLocationController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Api Route for Authenticate From One time password with sms client
Route::prefix('otp')->group(function () {
    Route::post('/sendOtp',[LoginController::class,'sendOtp']);
    Route::post('/verifyOtp',[LoginController::class,'verifyOtp']);
});


//-----******************************************- Start Admin Routes***********************************

//user management routes
Route::name('admin.user')->middleware(['auth:api'])->prefix('user')->group(function () {
    Route::get('/',[UserController::class,'index']); //show all yser
    Route::get('/{user}',[UserController::class,'show']); //show one user
    Route::delete('/{user}',[UserController::class,'destroy']); //delete one user
    Route::post('/{user}',[UserController::class,'store']); //save new  user
    Route::put('/{user}',[UserController::class,'update']); //update one user
});

//Service management routes
Route::name('admin.services')->middleware(['auth:api'])->prefix('service')->group(function () {
    Route::get('/',[ServiceController::class,'index']); //show all service
    Route::get('/{service}',[ServiceController::class,'show']); //show one service
    Route::delete('/{service}',[ServiceController::class,'destroy']); //delete one service
    Route::post('/{service}',[ServiceController::class,'store']); //save new  service
    Route::put('/{service}',[ServiceController::class,'update']); //update one service
});


//Service  Category  management routes
Route::name('admin.services.category')->middleware(['auth:api'])->prefix('service-cat')->group(function () {
    Route::get('/',[ServiceCategoryController::class,'index']); //show all services category
    Route::get('/{service-cat}',[ServiceCategoryController::class,'show']); //show one services category
    Route::delete('/{service-cat}',[ServiceCategoryController::class,'destroy']); //delete services category
    Route::post('/{service-cat}',[ServiceCategoryController::class,'store']); //save new  services category
    Route::put('/{service-cat}',[ServiceCategoryController::class,'update']); //update one services category
});

//State Location Management   routes
Route::name('admin.statelocation')->middleware(['auth:api'])->prefix('location')->group(function () {
    Route::get('/',[StateLocationController::class,'index']); //show all location
    Route::get('/{location}',[StateLocationController::class,'show']); //show one  location
    Route::delete('/{location}',[StateLocationController::class,'destroy']); //delete one location
    Route::post('/{location}',[StateLocationController::class,'store']); //save new  location
    Route::put('/{location}',[StateLocationController::class,'update']); //update one location
});


//Bank Transaction Routes ( Reports , manual Transaction )

//booking (manual Booking / report  /

//invoice ( report invoice )

//Notifection Routes

//Review Management  (acept review / review  report )

//time slot managements

//wallet transactions (report)


//-----******************************************- End Admin Routes***********************************


