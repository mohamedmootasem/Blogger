<?php

use App\Http\Controllers\pagesControllers;
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

Route::get('/','pagesControllers@index');
Route::get('/about','pagesControllers@about');
Route::get('/services','pagesControllers@services');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('posts','postsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
