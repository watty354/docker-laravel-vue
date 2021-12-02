
  <!doctype html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>めちゃくちゃあたる性格診断</title>
        
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <link href="{{ mix('/sass/sample.css') }}" rel="stylesheet">
        <script src="{{ mix('js/all.js') }}" async></script>
    </head>
    <body>
      {{-- 1oading --}}
      <div id="loading" class="load">
        <div id="loading" class="preloader loading">
            <span class="slice"></span>
            <span class="slice"></span>
            <span class="slice"></span>
            <span class="slice"></span>
            <span class="slice"></span>
            <span class="slice"></span>
        </div>
    
        </div>
<div class="container">



  <div id="app">
    <div id="div1">
      <div id="div2">
          <game-component></game-component>
      </div>
    </div>
    <div>
      <router-view></router-view>
    </div>
  </div>
  
  <div id="box1" class="hide">
  <a href="{{ url('/game.game', $text -> id)}}" class="button result mb-5" onclick="clickBtn3()">結果を見る</a>
  </div>
  
  <footer class="footer">2021 © m-wada</footer>
</div>        



  <!-- Scripts -->
  <script src="{{ mix('/js/app.js') }}" defer></script>
  <script src="{{ mix('/js/all.js') }}" defer></script>
  </body>
  </html>