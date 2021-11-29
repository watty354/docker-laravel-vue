
  <!doctype html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>めちゃくちゃあたる性格診断</title>
        
        <!-- Styles -->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    </head>
    <body>
<div class="container">
  <div id="app">
    <div id="div1">
      <div id="div2">
          <game-component></game-component>
      </div>
    </div>
    <router-view></router-view>
  </div>
  
  <div id="box1" class="hide">
  <a href="{{ url('/fake.game', $text -> id)}}">結果を見る</a>
  </div>
  

</div>        
        {{-- <a href="{{ url('/fake.game', $text -> id)}}">やる</a> --}}


  {{-- <input type="button" value="ボタン" onclick="clickBtn1()"> --}}


  <!-- Scripts -->
  <script src="{{ mix('/js/app.js') }}" defer></script>
  <script src="{{ mix('/js/all.js') }}" defer></script>
  </body>
  </html>