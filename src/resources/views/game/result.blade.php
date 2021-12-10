<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      
      <title>めちゃくちゃあたる性格診断</title>
      <meta name="description" content="最新のAIを駆使した質問であなたの驚性格を当てます。くほどめちゃくちゃあたります。">
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
<div class="sentence mt-5 mb-4 result">
	<p>診断結果</p>
</div>


            <div class="box B_5 mt-5 mb-5">
                <div class="confirm">
                        <div class="text-left">
                            {{ $sentence -> sentence }}
                        </div>
                        <div class="text-left  text-break">
                            {{ $text -> text }}
                        </div>
                    </div>
            </div>


@if ($text -> show_id ===1)
<a href="{{url('/')}}" class="button mt-5 mb-5" onclick="clickBtn3()">ネタばらし</a>
@endif

<footer class="footer">2021 © m-wada</footer>
</div>        



  <!-- Scripts -->
  <script src="{{ mix('/js/app.js') }}" defer></script>
  <script src="{{ mix('/js/all.js') }}" defer></script>
  </body>
  </html>