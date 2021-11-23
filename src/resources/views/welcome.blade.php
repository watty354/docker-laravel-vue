<!doctype html>
  <html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- ←① -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- ←② -->
      <title>Laravel-Vue-todo</title>
    </head>
    <body>
      <div id="app"> <!-- ←③ -->
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <br>
            </div>
            <div class="col-xs-6">
                <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>タスク名</th>
                        <th>完了ボタン</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="todo in todos" v-bind:key="todo.id">  <!-- ←v-forを使ってtodosを表示 -->
                        <td>@{{ todo.id }}</td>  <!-- ←todoのIDを表示。@を忘れず！ -->
                        <td>@{{ todo.title }}</td>  <!-- ←todoのtitleを表示。@を忘れず！ -->
                        <td><button class="btn btn-primary">完了</button></td>
                      </tr>  <!-- ←完了処理はまた後で設定します。 -->
                    </tbody>
                  </table>
            </div>
            <div class="col-xs-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="タスクを入力してください" v-model="new_todo"> <!-- ←v-modelを追記 -->
                    <span class="input-group-btn">
                      <button class="btn btn-success" type="button" v-on:click="addTodo">タスクを登録する</button> <!-- ←v-on:clickを追記 -->
                    </span>
                  </div>
            </div>
          </div>
        </div>
      </div>
      <script src="{{ mix('js/app.js') }}"></script> <!-- ←④ -->
    </body>
</html>