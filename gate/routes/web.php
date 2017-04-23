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



