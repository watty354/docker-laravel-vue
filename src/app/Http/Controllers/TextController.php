<?php

namespace App\Http\Controllers;


use App\Models\text;
use App\Models\Personality;
use Illuminate\Http\Request;
use App\Http\Requests\TextRequest;
use Validator;

class TextController extends Controller
{
    // /**
    //  * @return view
    //  */
    // public function register() {

    //     return view('sample.text');
    // }



/**
 * @param int $id
 * @return view
 */

public function detail($id) {
    
    $text = text::find($id);

    

    return view('fake.home',['text' => $text]);
}
/**
 * @param int $id
 * @return view
 */
public function detailText($id) {
    
    $text = text::find($id);

    $sentence_id = $text->sentence_id; 
    
    $sentence = Personality::find($sentence_id);

    return view('fake.result',['text' => $text,"sentence" =>$sentence]);
}


// ======================================================================================================================


private $formItems = ["sentence_id", "text", "show_id"];

private $validator = [
    "sentence_id" => "required",
    "show_id" => "required",
    "text" => "required",
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

    $id = $input['sentence_id'];

    $sentence = Personality::find($id);

    return view("check",["input" => $input,"sentence" =>$sentence]);
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
    $data = text::create($input);

    $id = $data->id;

    // //セッションを空にする
    // $request->session()->forget("form_input");

    return view("fake.success", compact('id'));
    }

}
