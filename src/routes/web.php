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
use Illuminate\Support\Facades\URL;
//本物HOME
Route::get('/', function () {  
  return view('home');
});

//説明
Route::get('/about', function () {  
    return view('about');
});

  

// 入力画面
// Route::get('/input', "TextController@show")->name("form.show");
Route::get('/input', "TextController@show")->name("form.show");

Route::post('/input', "TextController@post")->name("form.post");
  

// 確認画面
Route::get('/check', "TextController@confirm")->name("form.confirm");
Route::post('/check', "TextController@send")->name("form.send");


 
// 偽HOME画面
Route::get('/game.home/{id}', 'TextController@detail');

// 結果画面
Route::get('/game.game/{id}', 'TextController@detailText');