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

Route::get('/cars','CarController@index');
Route::get('/cars/create','CarController@create');
Route::get('/cars/{car}','CarController@show');
Route::post('/cars','CarController@store');

Route::get('/cars/{car}/reviews/index','ReviewController@index');
Route::get('/cars/{car}/reviews/create','ReviewController@create');
Route::post('/cars/{car}/reviews','ReviewController@store');
