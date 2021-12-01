<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    
    
    {{-- <header class="header">ヘッダ</header> --}}
    <div class="container fadein">
        @yield('content')
    </div>
    <footer class="footer">2021 © m-wada</footer>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
