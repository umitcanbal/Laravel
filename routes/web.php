<?php

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


// Route::get('/api/books', 'APIBookController@index');

// Route::get('/books', 'BookController@index');

// Route::get('/books-orm', 'BookORMController@index');
// Route::get('/books-orm/create', 'BookORMController@create');
// Route::get('/books-orm/{id}', 'BookORMController@show');

Route::get("/publishers", "PublisherController@index");
Route::get("/publishers/{publisher_id}", "PublisherController@show");
// Route::get("/publishers/{Burada ne yazdığı hiç önemli değil ama variable olduğunu belirtmen lazım}", "PublisherController@show");
