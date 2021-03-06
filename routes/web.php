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
    return redirect()->route('index');
});

Route::get('/index', 'App\Http\Controllers\TesteController@index')->name('index');
Route::get('/best', 'App\Http\Controllers\BestController@best')->name('best');
Route::get('/teste', 'App\Http\Controllers\TestController@teste')->name('teste');
