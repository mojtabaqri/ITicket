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
Route::name('admin.user')->group(function () {
    Route::resource('user',UserController::class)->except(['edit','create']);

});

//Service management routes
Route::name('admin.services')->group(function () {
    Route::resource('service',ServiceController::class)->except(['edit','create']);
});

//Service  Category  management routes
Route::name('admin.services.category')->group(function () {
    Route::resource('service-cat',ServiceCategoryController::class)->except(['edit','create']);
});

//State Location Management   routes
Route::name('admin.statelocation')->group(function () {
    Route::resource('location',StateLocationController::class)->except(['edit','create']);
});


//Bank Transaction Routes ( Reports , manual Transaction )//wallet transaction routs and bank transaction routes
Route::name('admin.Transaction')->middleware(['auth:api'])->group(function () {
});

//booking (manual Booking / report  /
Route::name('admin.booking')->middleware(['auth:api'])->group(function () {

});

//invoice ( report invoice )
Route::name('admin.invoice')->middleware(['auth:api'])->group(function () {

});

//Notifection Routes
Route::name('admin.notifection')->middleware(['auth:api'])->group(function () {

});

//Review Management  (acept review / review  report )
Route::name('admin.review')->middleware(['auth:api'])->group(function () {

});
//time slot managements
Route::name('admin.timeslot')->middleware(['auth:api'])->group(function () {

});


//-----******************************************- End Admin Routes***********************************


