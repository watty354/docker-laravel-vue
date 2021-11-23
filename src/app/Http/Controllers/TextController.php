<?php

namespace App\Http\Controllers;


use App\Models\text;
use Illuminate\Http\Request;
use App\Http\Requests\TextRequest;


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
public function show() {
$texts = text::all();

return view('sample.show',['texts' => $texts]);


}


/**
 * 
 * @return view
 */

public function exeStore(TextRequest $request) {
    
    $inputs = $request->all();
    text::create($inputs);

    return view('sample.text');
}
/**
 * @param int $id
 * @return view
 */

public function detail($id) {
    
    $text = text::find($id);

    return view('sample.home',['text' => $text]);
}

}
