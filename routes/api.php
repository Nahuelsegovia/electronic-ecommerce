<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

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
        'store', 'destroy'
    ]);
});
