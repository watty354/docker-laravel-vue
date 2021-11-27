
  <!doctype html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name', 'Vue Laravel SPA') }}</title>
        
        <!-- Styles -->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="de">{{ $text -> id }}</div>
        <div class="de">{{ $text -> text }}</div>
        
        <a href="{{ url('/fake.game', $text -> id)}}">やる</a>
        <div id="app">


          <div id="div1">
            <div id="div2">
              <p>aaa</a>
                <game-component></game-component>
            </div>
          </div>




          <router-view></router-view>
            


          <button class="btn btn-danger btn-lg" v-on:click='active01=!active01' v-bind:class='{hide:active01}'>削除</button>
  </div>

<div id="box1" class="hide">

  <a href="{{ url('/fake.game', $text -> id)}}">やる</a>

</div>
  {{-- <input type="button" value="ボタン" onclick="clickBtn1()"> --}}


  <!-- Scripts -->
  <script src="{{ mix('/js/app.js') }}" defer></script>
  <script src="{{ mix('/js/all.js') }}" defer></script>
  </body>
  </html>