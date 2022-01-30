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



Auth::routes();

Route::get('/home', [
    'uses'=>'ShoppingController@index',
    'as'=>'home.index'
]);

Route::resource('/product','ProductController');

Route::get('/front', [
    'uses'=>'ProductController@show',
    'as'=>'front'
]);

//Categories route

Route::resource('/category','CategoryController');
Route::get('/display', [
    'uses'=>'CategoryDisplayController@display_category',
    'as'=>'display'
]);

Route::get('/display/{id}',[
   'uses'=>'CategoryDisplayController@display_category_products',
   'as'=>'display.category.product'
]);

//end routes


