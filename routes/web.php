<?php

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




Route::prefix('/')->middleware('auth')->group(function (){
//    Route::get('/user', \App\Http\Controllers\User::class)->name('user');
    Route::resource('/', \App\Http\Controllers\userController::class);
    Route::resource('users', \App\Http\Controllers\userController::class);
    Route::resource('gift', \App\Http\Controllers\giftController::class);

    Route::get('/removePointDay',[\App\Http\Controllers\userController::class,'resetPointDay'])->name('resetPointDay');
    Route::get('/resetPointWeek',[\App\Http\Controllers\userController::class,'resetPointWeek'])->name('resetPointWeek');
    Route::get('/showRemovePoint',[\App\Http\Controllers\userController::class,'showResetPointDay'])->name('showResetPoint');



});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
