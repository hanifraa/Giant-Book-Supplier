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

Route::get('/', 'HomeController@index');

Route::get('/publisher', 'PublishersController@index');

Route::get('/contact', 'ContactController@index');

Route::prefix('/book')->group( function () {
    Route::get('/{bookId}', 'BooklistController@index');
});

Route::prefix('/category')->group( function () {
    Route::get('/{categoryId}', 'BooksController@index');
});
