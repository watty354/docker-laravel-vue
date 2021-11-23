{{-- <div class="">チェックします</div>
<form method="POST" action="{{ route('user.resister_resister') }}">
    <div class="md-form">
        <label for="name">テキスト</label>
        {{ $input["text"] }}
        <input class="form-control" type="hidden" id="text" name="text" required value="{{ $input["text"] }}">
    </div>

<div class="">
    <a href="{{ url('/input') }}">
        修正
</a>
</div>
<div class="">
    <a href="{{ url('/fake.success') }}">
        偽HOMEへ
</a>
</div>

<button class="btn btn-block blue-gradient mt-2 mb-2" type="submit" name="back">戻って変更する</button>
<button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">確認して登録する</button>
</form>
</div> --}}


<h3>確認</h3>

<form method="post" action="{{ route('form.send') }}">
	@csrf

	<label>Name</label>
	<div>
		{{ $input["name"] }}
	</div>



	<label>Text</label>
	<div>
		{{ $input['text'] }}
	</div>

	<input name="back" type="submit" value="戻る" />
	<input type="submit" value="送信" />

</form>