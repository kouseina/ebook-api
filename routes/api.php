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

// Book

Route::get('books', 'BookController@index'); // show all data
Route::post('books', 'BookController@store'); // create new data
Route::get('books/{id}', 'BookController@show'); // show data by id (detail data)
Route::put('books/edit/{id}', 'BookController@update'); // update data
Route::delete('books/delete/{id}', 'BookController@destroy'); // delete data

// Route::resource('books', 'BookController');


// Author

Route::get('authors', 'AuthorController@index'); // show all data
Route::post('authors', 'AuthorController@store'); // create new data
Route::get('authors/{id}', 'AuthorController@show'); // show data by id (detail data)
Route::put('authors/edit/{id}', 'AuthorController@update'); // update data
Route::delete('authors/delete/{id}', 'AuthorController@destroy'); // delete data