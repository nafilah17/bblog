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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', 'BlogController@index');
Route::get('/blog/detail/{id}', 'BlogController@detail');


Route::get('/admin', 'AdminController@index');


Route::get('/category', 'CategoriesController@index');
Route::get('/category/add', 'CategoriesController@add');
Route::post('/category/insert', 'CategoriesController@insert');
Route::get('/category/edit/{id}', 'CategoriesController@edit');
Route::put('/category/update/{id}', 'CategoriesController@update');
Route::get('/category/delete/{id}', 'CategoriesController@delete');


Route::get('/profile', 'ProfileController@index');
Route::get('/profile/add', 'ProfileController@add');
Route::post('/profile/insert', 'ProfileController@insert');
Route::get('/profile/edit/{id}', 'ProfileController@edit');
Route::put('/profile/update/{id}', 'ProfileController@update');
Route::get('/profile/delete/{id}', 'ProfileController@delete');


Route::get('/user', 'UserController@index');
Route::get('/user/add', 'UserController@add');
Route::post('/user/insert', 'UserController@insert');
Route::get('/user/edit/{id}', 'UserController@edit');
Route::put('/user/update/{id}', 'UserController@update');
Route::get('/user/delete/{id}', 'UserController@delete');



Route::get('/article', 'ArticleController@index');
Route::get('/article/add', 'ArticleController@add');
Route::post('/article/insert', 'ArticleController@insert');
Route::get('/article/edit/{id}', 'ArticleController@edit');
Route::put('/article/update/{id}', 'ArticleController@update');
Route::get('/article/delete/{id}', 'ArticleController@delete');

