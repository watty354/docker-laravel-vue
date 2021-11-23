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
 * 
 * @return view
 */

public function exeStore(TextRequest $request) {
    
    $inputs = $request->all();
    text::create($inputs);

    \Session::flash('err_msg', 'touroku');
    return view('sample.text');
}

}
