<?php

use App\Http\Controllers\RestroController;
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
    return view('home');
});

Route::get('/home', 'RestroController@index');
Route::get('/about', 'RestroController@about');
Route::get('/contact', 'RestroController@contact');
Route::get('/techBlog/{id}', 'RestroController@blog');
Route::get("/techBlogDesc/{id}", 'RestroController@blogDesc');
Route::view("/add",'addContant');
Route::get("/list",'RestroController@list');
Route::post("/add",'RestroController@add');
Route::get("/delete/{id}",'RestroController@delete');
Route::get("/edit/{id}",'RestroController@edit');
Route::post("/edit",'RestroController@update');


Route::get("userIndex",'RestroController@userIndex');
Route::get("userReg",'RestroController@userRegView');
Route::post("userReg",'RestroController@userReg');
Route::post("mailGen",'RestroController@contactMail');
