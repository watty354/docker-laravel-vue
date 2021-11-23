<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo; //← 追記

class TodoController extends Controller{

public function getTodos(){ //← 追記
  $todos = Todo::all();
  return $todos;
}
public function addTodo(Request $request){  //←追記
    $todo = new Todo;
    $todo->title = $request->title;
    $todo->save();
    $todos = Todo::all();
    return $todos;
}

}
