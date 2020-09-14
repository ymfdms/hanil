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

Route::get('/top', 'ViewController@top');
Route::get('/', 'ViewController@logout');

Route::get('/choice', 'ViewController@answer');
Route::get('/post', 'ViewController@post');
Route::get('/rank', 'RankController@rank');
Route::get('/post_select', 'RankController@post_select');
Route::get('/answer_select', 'RankController@answer_select');
Route::get('/mypage', 'ViewController@mypage');
Route::get('/answer', 'ViewController@answer');
Route::get('/check', 'ViewController@check');
Route::get('/result', 'ViewController@result');
Route::post('/correct', 'ViewController@correct');
Route::post('/incorrect', 'ViewController@incorrect');
Route::get('/goanswer', 'ViewController@goanswer');
Route::get('/gotop', 'ViewController@gotop');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'ViewController@logout');

Route::post('/store', 'PostController@store');
