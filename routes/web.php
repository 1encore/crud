<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book/id/{id}', 'BookController@getBookById');
Route::get('/book/author/{author}', 'BookController@getBookByAuthor');
Route::get('/book/name/{name}', 'BookController@getBookByName');
Route::get('/book/year/{year}', 'BookController@getBookByYear');
Route::get('/book/manufacture/{manufacture}', 'BookController@getBookByManufacture');
