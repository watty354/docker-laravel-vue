<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>ブログ</title>
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js" defer></script>
    </head>

<body>
    <h2>test</h2>
    <form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()">
        @csrf

    <input id="text"
    name="text"
    class="form-control"
    value="{{ old('text') }}"
    type="text">
    


    <button type="submit" class="btn btn-primary">
        投稿する
    </button>
    </form>
</body>

</html>