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

Route::get('/products', ['as'=>'list-products', 'uses'=>'products\productsController@getList']);
Route::get('/product', 'products\productsController@addItem');
Route::post('/product', 'products\productsController@store');
Route::get('/categories', ['as'=>'list-category', 'uses'=>'categories\categoriesController@getList']);
Route::get('/category', 'categories\categoriesController@getItem');
Route::get('/category', 'categories\categoriesController@editItem/{$id}');
Route::post('/category', 'categories\categoriesController@store');

Route::get('/login', ['as'=>'login', 'uses'=>'user\userController@login']);

Route::group(['prefix'=>'admin', 'namespace'=>'admin', 'middleware'=>'auth'], function (){
    Route::group(['prefix'=>'products'], function (){
        Route::get('item', ['as'=>'add-item', 'uses'=>'admin\productsController@addItem']);
        Route::get('list', ['as'=>'list', 'uses'=>'admin\productsController@getList']);
    });

    Route::group(['prefix'=>'categories'], function (){
        Route::get('item', ['as'=>'add-item', 'uses'=>'admin\categoriesController@addItem']);
        Route::get('list', ['as'=>'list', 'uses'=>'admin\categoriesController@getList']);
    });
});
