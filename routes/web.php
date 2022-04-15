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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin','as' => 'admin.'],function(){

    Route::group(['middleware' => 'guest:admin'],function(){
        Route::get('/login', [App\Http\Controllers\Admin\Auth\LoginController::class,'showLogin'])->name('login.show');
        Route::post('/login', [App\Http\Controllers\Admin\Auth\LoginController::class,'login'])->name('login');
    });


    Route::group(['middleware' => 'auth:admin'],function(){
        Route::get('/',[App\Http\Controllers\Admin\HomeController::class,'home'])->name('home');
    });
});