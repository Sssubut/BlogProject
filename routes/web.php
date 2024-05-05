<?php

use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\CreateController;
use App\Http\Controllers\Admin\Category\EditController;
use App\Http\Controllers\Admin\Category\ShowController;
use App\Http\Controllers\Admin\Category\StoreController;
use App\Http\Controllers\Admin\Category\UpdateController;
use App\Http\Controllers\Admin\Category\DeleteController;

use App\Http\Controllers\Admin\Tag\TagController;
use App\Http\Controllers\Admin\Tag\CreateTagController;
use App\Http\Controllers\Admin\Tag\EditTagController;
use App\Http\Controllers\Admin\Tag\ShowTagController;
use App\Http\Controllers\Admin\Tag\StoreTagController;
use App\Http\Controllers\Admin\Tag\UpdateTagController;
use App\Http\Controllers\Admin\Tag\DeleteTagController;

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


//Для категорий
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

//Для тегов
Route::group(['prefix' => 'tags'], function (){
    Route::get('/tag' , TagController::class)->name('admin.tag.index');
    Route::get('/create' , CreateTagController::class)->name('admin.tag.create');
    Route::post('/' , StoreTagController::class)->name('admin.tag.store');
    Route::get('/{tag}' , ShowTagController::class)->name('admin.tag.show');
    Route::get('/{tag}/edit' , EditTagController::class)->name('admin.tag.edit');
    Route::patch('/{tag}' , UpdateTagController::class)->name('admin.tag.update');
    Route::delete('/{tag}' , DeleteTagController::class)->name('admin.tag.delete');
});


Auth::routes();


