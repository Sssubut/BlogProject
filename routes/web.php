<?php

use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\CreateController;
use App\Http\Controllers\Admin\Category\EditController;
use App\Http\Controllers\Admin\Category\ShowController;
use App\Http\Controllers\Admin\Category\StoreController;
use App\Http\Controllers\Admin\Category\UpdateController;
use App\Http\Controllers\Admin\Category\DeleteController;
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

//Route::group(['namespace' => '\App\Http\Controllers\Admin' ] , function (){
//    Route::group(['namespace' => 'Main', 'prefix' => 'admin'], function (){
//            Route::get('/', AdminController::class);
//        Route::group(['namespace' => 'Category' , 'prefix' => 'categories'], function (){
//            Route::get('/' , CategoryController::class);
//        });
//    });
//
//});

Route::group(['prefix' => 'admin'], function (){
    Route::get('/', AdminController::class)->name('admin.index');
    Route::get('/category' , CategoryController::class)->name('admin.categories.index');
    Route::get('/create' , CreateController::class)->name('admin.categories.create');
    Route::post('/' , StoreController::class)->name('admin.categories.store');
    Route::get('/{category}' , ShowController::class)->name('admin.categories.show');
    Route::get('/{category}/edit' , EditController::class)->name('admin.categories.edit');
    Route::patch('/{category}' , UpdateController::class)->name('admin.categories.update');
    Route::delete('/{category}' , DeleteController::class)->name('admin.categories.delete');
});


Auth::routes();




//Route::group(['namespace' => '\App\Http\Controllers\Admin\Main', 'prefix' => 'admin'], function (){
//        Route::get('/', AdminController::class);
//    Route::group(['namespace' => 'App\Http\Controllers\Admin\Category' , 'prefix' => 'categories'], function (){
//        Route::get('/' , CategoryController::class);
//    });
//
//});
