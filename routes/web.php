<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'noticias'], function() {
    Route::get('/', 'NoticiasController@index');
});

Route::get('/', function () {
    return view('template.app');
});

Route::post('/store', 'NoticiasController@store');


