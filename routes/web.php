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

Route::get('/about',function () {
	return 'This is the about page';
});

Route::get('/post/{id}/{title}', function ($id, $title) {
	return 'Post ID is' . $id . " and title is " . $title;
});