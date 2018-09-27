<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('/produto');
});

Route::group(['prefix' => 'produto'], function () {
    Route::get('/', 'ProdutoController@index')->name('welcome');
    Route::get('/findAll', 'ProdutoController@findAll');
    Route::post('/save', 'ProdutoController@save');
    Route::get('/remove/{id}', 'ProdutoController@remove');
    Route::get('/editar/{id}', 'ProdutoController@findOne');
    Route::post('/update', 'ProdutoController@update');

});