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


Route::get('/admin', 'AdminController@index');

Route::get('/article', 'ArticleController@index');
Route::get('/article/add', 'ArticleController@add');
Route::post('/article/insert', 'ArticleController@insert');



Route::get('/category', 'CategoriesController@index');
Route::get('/category/add', 'CategoriesController@add');
Route::post('/category/insert', 'CategoriesController@insert');



Route::get('/profile', 'ProfileController@index');

Route::get('/user', 'UserController@index');