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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'admin'], function(){

    /* VIEWS */
    Route::get('/', function(){
        return view('/panel/index');
    });

    Route::get('/productos/cargar', function(){
        return view('/panel/products');
    });

    Route::get(('/productos'), function(){
        return view('/panel/showproducts');
    });

    /* CONTROLLERS */
    Route::resource('/productos', App\Http\Controllers\ProductController::class)->only([
        'store', 'destroy', 'update', 'show',
    ]);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
