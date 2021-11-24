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
    // return view('home');


    $url = URL::temporarySignedRoute('unsubscribe', 
    now()->addSeconds(5), 
    ['user' => 1]);

// とりあえずwelcomページにリンクを出して見る
return view('home')->with('url',$url);
  });

  Route::get('/unsubscribe/{user}', function (Request $request) {

    return view('safe');

})->name('unsubscribe')->middleware('signed');




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


 



  Route::get('/fake.home/{id}', 'TextController@detail');

  
  Route::get('/fake.game/{id}', 'TextController@detailText');










// Route::get('/home/{id}', 'TextController@detail') -> name('home');




Route::get('text', 'TextController@register')->name('text');

Route::post('store', 'TextController@exeStore')->name('store');


