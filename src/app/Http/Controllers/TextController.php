<?php

namespace App\Http\Controllers;


use App\Models\text;
use Illuminate\Http\Request;
use App\Http\Requests\TextRequest;
use Validator;

class TextController extends Controller
{
    /**
     * @return view
     */
    public function register() {

        return view('sample.text');
    }

/**
 * 一覧
 * 
 */
// public function show() {
// $texts = text::all();

// return view('sample.show',['texts' => $texts]);


// }


/**
 * 登録
 * @return view
 */

// public function exeStore(TextRequest $request) {
    
//     $inputs = $request->all();
//     text::create($inputs);

//     return redirect('/check');
//     // return view('check');

// }
/**
 * @param int $id
 * @return view
 */

public function detail($id) {
    
    $text = text::find($id);

    return view('sample.home',['text' => $text]);
}


// ======================================================================================================================


private $formItems = ["name", "text"];

private $validator = [
    "name" => "required|string|max:100",
    "text" => "required|string|max:100",
];

function show(Request $request){
    return view("input");
}






function post(Request $request){
    
    $input = $request->only($this->formItems);
    
    $validator = Validator::make($input, $this->validator);

    if($validator->fails()){
        return redirect()->action("TextController@show")
            ->withInput()
            ->withErrors($validator);
    }

    //セッションに書き込む
    $request->session()->put("form_input", $input);

    return redirect()->action("TextController@confirm");
}

function confirm(Request $request){

    //セッションから値を取り出す
    $input = $request->session()->get("form_input");
    
    //セッションに値が無い時はフォームに戻る
    if(!$input){
        return redirect()->action("TextController@show");
    }

    return view("check",["input" => $input]);
}

function send(Request $request){

    //セッションから値を取り出す
    $input = $request->session()->get("form_input");

    //戻るボタンが押された時
    if($request->has("back")){
        return redirect()->action("TextController@show")
            ->withInput($input);
    }

    //セッションに値が無い時はフォームに戻る
    if(!$input){
        return redirect()->action("TextController@show");
    }

    //ここでメールを送信するなどを行う
    text::create($input);

    //セッションを空にする
    $request->session()->forget("form_input");

    return redirect()->action("TextController@complete");
}

function complete(){	
    return view("fake.success");
}
}
