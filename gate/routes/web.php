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

//Route::get('/sample', function () {
//    return 'sample';
//});

//Route::get('/sample', function () {
//    return view('sample');
//});

Route::get('/sample', function () {
    return view('sample/index');
});

Route::get('/list', function () {
    return view('sample/list');
});

Route::get('/sample_ctrl', 'SampleController@index');
Route::get('/sample_ctrl/{id}', 'SampleController@page');

//Route::any('foo', function () {
//    return 'Hello World';
//});

//Route::get('user/{id}', function ($id) {
//    return 'User '.$id;
//});

Route::get('users/{id}', 'UsersController@page');
Route::get('model/{id}', 'ModelController@index');

// form
Route::match(['get', 'post'],'members/signin', 'MembersController@signin');
Route::get('members/signin_complete', 'MembersController@signin_complete');

// form
Route::match(['get', 'post'],'members/signin', 'MembersController@signin');
Route::get('members/signin_complete', 'MembersController@signin_complete');

//DB session
Route::get('session/{id}', 'SessionController@index');

