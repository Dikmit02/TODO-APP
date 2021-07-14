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

Route::get('todos','App\Http\Controllers\TodosController@index');

//dynamic Routing
Route::get('todos/{todo}','App\Http\Controllers\TodosController@show');

Route::get('new-todos', 'App\Http\Controllers\TodosController@create');
Route::post('store-todos', 'App\Http\Controllers\TodosController@store');

Route::get('todos/{todo}/edit', 'App\Http\Controllers\TodosController@edit');
Route::post('todos/{todo}/update-todos', 'App\Http\Controllers\TodosController@update');

Route::get('todos/{todo}/delete', 'App\Http\Controllers\TodosController@destroy');