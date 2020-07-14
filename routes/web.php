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
Route::get('/choice', 'ViewController@choice');
Route::get('/post', 'ViewController@post');
Route::get('/rank', 'ViewController@rank');
Route::get('/mypage', 'ViewController@mypage');
