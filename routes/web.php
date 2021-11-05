<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\OrdersController;

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

// Route::get('/home', 'LibraryController@library');
// Route::get('/login', 'LibraryController@login');
// Route::get('/contact', 'LibraryController@contact');


Route::prefix('books')->group(function () {
    Route::get('index','BooksController@index');
    Route::get('create','BooksController@create');
    Route::post('store', 'BooksController@store');
    Route::get('show', 'BooksController@show');
    Route::get('edit/{id}','BooksController@edit');
    Route::put('update/{id}','BooksController@update');
    Route::post('/delete/{id}','BooksController@destroy');
});




Route::prefix('categories')->group(function () {
    Route::get('create', 'CategoriesController@create');
    Route::post('store', 'CategoriesController@store');
    Route::get('show','CategoriesController@show');
    Route::get('edit/{id}','CategoriesController@edit');
    Route::put('update/{id}','CategoriesController@update');
    Route::post('/delete/{id}','CategoriesController@destroy');
});

Route::prefix('orders')->group(function () {
    Route::get('create', 'OrdersController@create');
    Route::post('store', 'OrdersController@store');
    Route::get('show','OrdersController@show');
    Route::post('/cancel/{id}','OrdersController@cancel')->name('cancel');
    Route::post('/complete/{id}','OrdersController@complete')->name('complete');
});
