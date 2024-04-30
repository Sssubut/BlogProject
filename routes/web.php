<?php

use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Main\IndexController;
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

Route::group(['namespace' => '\App\Http\Controllers\Main'], function (){
    Route::get('/', IndexController::class);
});


Route::group(['namespace' => '\App\Http\Controllers\Admin\Main', 'prefix' => 'admin'], function (){
        Route::get('/', AdminController::class);
});

Auth::routes();
