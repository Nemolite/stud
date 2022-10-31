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


Route::get('/index',[\App\Http\Controllers\MainController::class, 'index'])->name('index');
Route::get('/getdata',[\App\Http\Controllers\MainController::class, 'getdata']);
Route::post('/save',[\App\Http\Controllers\MainController::class, 'save'])->name('save');
Route::get('/display',[\App\Http\Controllers\TestController::class, 'display'])->name('display');
Route::get('/hend',[\App\Http\Controllers\TestController::class, 'hend']);
Route::post('/hend',[\App\Http\Controllers\TestController::class, 'hend'])->name('hend');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
