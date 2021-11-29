<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('/sass/sample.css') }}" rel="stylesheet">
</head>

<body>
    <div id="loading" class="load">
        <div class="preloader loading">
            <span class="slice"></span>
            <span class="slice"></span>
            <span class="slice"></span>
            <span class="slice"></span>
            <span class="slice"></span>
            <span class="slice"></span>
        </div>
    </div>
    
    <div class="container">
        
        
        {{-- <a href="{{ url('/about') }}">説明</a>
        <a href="{{ url('/input') }}">入力</a> --}}
        <div class="">
            <h1>偽性格診断</h1>
        </div>
        
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="button"><a href="{{ url('/input') }}"  onclick="clickBtn3()">入力</a></button>
        </div>
        

        <div class="">
            <a href="{{ url('/about') }}">説明</a>
        </div>
        
        <footer class="footer">2021 © m-wada</footer>
    </div>
    
    

    <script src="{{ mix('js/all.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
