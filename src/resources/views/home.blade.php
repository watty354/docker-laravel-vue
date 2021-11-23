<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ url('/about') }}">説明</a>
    <a href="{{ url('/input') }}">入力</a>
	<div id="app">
		@{{ message }}
        <a href="/@{{ message }}">sannpuru</a>
	</div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>