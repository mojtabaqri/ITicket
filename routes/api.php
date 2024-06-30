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
    Route::resource('user',UserController::class);

});

//Service management routes
Route::name('admin.services')->middleware(['auth:api'])->prefix('service')->group(function () {
    Route::resource('service',ServiceController::class);
});

//Service  Category  management routes
Route::name('admin.services.category')->middleware(['auth:api'])->prefix('service-cat')->group(function () {
    Route::resource('service-cat',ServiceCategoryController::class);
});

//State Location Management   routes
Route::name('admin.statelocation')->middleware(['auth:api'])->prefix('location')->group(function () {
    Route::resource('location',StateLocationController::class);
});


//Bank Transaction Routes ( Reports , manual Transaction )//wallet transaction routs and bank transaction routes
Route::name('admin.Transaction')->middleware(['auth:api'])->prefix('transaction')->group(function () {
});

//booking (manual Booking / report  /
Route::name('admin.booking')->middleware(['auth:api'])->prefix('booking')->group(function () {

});

//invoice ( report invoice )
Route::name('admin.invoice')->middleware(['auth:api'])->prefix('invoice')->group(function () {

});

//Notifection Routes
Route::name('admin.notifection')->middleware(['auth:api'])->prefix('notifection')->group(function () {

});

//Review Management  (acept review / review  report )
Route::name('admin.review')->middleware(['auth:api'])->prefix('review')->group(function () {

});
//time slot managements
Route::name('admin.timeslot')->middleware(['auth:api'])->prefix('timeslot')->group(function () {

});
 

//-----******************************************- End Admin Routes***********************************


