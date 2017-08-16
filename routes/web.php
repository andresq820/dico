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
/*Posts*/
Route::get('/', 'PostController@index');

Route::get('/posts', 'PostController@index');

Route::get('/post/create', 'PostController@create');

Route::post('/post/store', 'PostController@store');

Route::get('/posts/{post}', 'PostController@show');

/*Comments*/
Route::post('/posts/{post}/comments', 'CommentController@store');


/*Groups*/
Route::get('/groups', 'GroupController@index');

Route::get('/group', 'GroupController@show');

Route::get('/group/create', 'GroupController@create');

Route::get('/meetings', 'MeetingController@index');

Route::get('/meeting', 'MeetingController@show');

Route::get('/meeting/create', 'MeetingController@create');

Route::get('/users', 'UserController@index');

Route::get('/user', 'UserController@show');

Route::get('/user/create', 'UserController@create');

Route::get('/points', 'PointController@index');



