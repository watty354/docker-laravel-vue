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

Route::get('/', function () {  //←追記
    return view('welcome');
  });

Route::get('sample', function () {
    return view('sample.jscss');
});

Route::get('/home/{id}', 'TextController@detail') -> name('home');


Route::get('show', 'TextController@show')->name('showw');


Route::get('text', 'TextController@register')->name('text');

Route::post('store', 'TextController@exeStore')->name('store');


