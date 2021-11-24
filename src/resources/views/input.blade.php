{{-- @include('error_card_list')
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>ブログ</title>
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js" defer></script>
    </head>

<body>
    <h2>test</h2>
    <form method="POST" action="{{ route('set') }}">
        @csrf

        <input  class="form-control" type="text" id="text" name="text" required value="{{ old('text') }}">
    


    <button type="submit" class="btn btn-primary">
        投稿する
    </button>
    </form>
</body>

</html> --}}



<h3>フォーム</h3>

@if ($errors->any())
<div style="color:red;">
<ul>
	@foreach ($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
</div>
@endif

<form method="post" action="{{ route('form.post') }}">
	@csrf

	<label>Name</label>
	<div>
		<input type="text" name="name" value="{{ old('name') }}" />
	</div>

    <select name="sentence_id">
        <option value="1" >サンプル1</option>
        <option value="2" >サンプル2</option>
        <option value="3" >サンプル3</option>
        </select>
        


	<label>Body</label>
	<div>
		<textarea name="text">{{ old('text') }}</textarea>
	</div>

	<input class="btn btn-primary" type="submit" value="送信" />

</form>