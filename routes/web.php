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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::group(['prefix' => 'admin','middleware'=>'auth'],function(){
    Route::get('zoo/create','Admin\ZooController@add');
    Route::post('zoo/create','Admin\ZooController@create');
    Route::get('zoo/index', 'Admin\ZooController@index');
    Route::get('zoo/edit', 'Admin\ZooController@edit');
    Route::post('zoo/edit', 'Admin\ZooController@update');
    Route::get('zoo/delete', 'Admin\ZooController@delete');
});

Route::get('/','ZoofrontController@top');
Route::get('/posts','ZoofrontController@index');
Route::get('/posts/{id}','ZoofrontController@show');
Route::get('/intro','ZoofrontController@intro');

Route::get('/test','ZoofrontController@test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
