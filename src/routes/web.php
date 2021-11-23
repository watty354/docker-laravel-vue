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

//本物HOME
Route::get('/', function () {  
    return view('home');
  });
  //説明
  Route::get('/about', function () {  
    return view('about');
  });

  

  //入力
//   Route::get('/input', function () {  
//     return view('input');
//   });


  Route::get('/input', "TextController@show")->name("form.show");
  Route::post('/input', "TextController@post")->name("form.post");
  
  Route::get('/check', "TextController@confirm")->name("form.confirm");
  Route::post('/check', "TextController@send")->name("form.send");
  
  Route::get('/fake.success', "TextController@complete")->name("form.complete");











//   //入力画面
//   Route::get('/input', function () {  
//     return view('input');
//   });
//   //入力画面をセット
//   Route::post('/input', 'TextController@setValue')->name('set');
  

// //チェック
// Route::get('/check','TextController@check')->name('check');

// Route::post('/check', 'TextController@register')->name('user.resister_resister');


// //成功
// Route::get('/fake.success', function () {  
//   return view('fake.success');
// });

// //成功
// Route::get('/fake.home', function () {  
//   return view('fake.home');
// });
// //成功
// Route::get('/fake.game', function () {  
//   return view('fake.game');
// });

// //成功
// Route::get('/fake.result', function () {  
//   return view('fake.result');
// });





Route::get('/sample', function () {
    return view('sample.jscss');
});

Route::get('/home/{id}', 'TextController@detail') -> name('home');


Route::get('show', 'TextController@show')->name('showw');


Route::get('text', 'TextController@register')->name('text');

Route::post('store', 'TextController@exeStore')->name('store');


