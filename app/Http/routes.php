<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('categories','CategoriesController@index');
Route::get('categories/create','CategoriesController@create');
Route::get('categories/update/{id}','CategoriesController@update');
Route::post('categories/create',array('before' => 'csrf', 'uses' => 'CategoriesController@create'));
Route::post('categories/update/{id}',array('before' => 'csrf', 'uses' => 'CategoriesController@update'));
Route::get('categories/delete/{id}','CategoriesController@delete');

Route::resource('members','MembersController');
Route::resource('suppliers','SuppliersController');
Route::resource('profile','ProfileController');
Route::resource('products','ProductsController');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
