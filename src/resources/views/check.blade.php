@extends('master')
@section('content')

<p>以下のように表示されます</p>

<form method="post" action="{{ route('form.send') }}">
	@csrf








<div class="">
	<div>
		{{ $sentence -> sentence }}
	</div>


	<div>
		{{ $input['text'] }}
	</div>
</div>

	<input name="back" type="submit" value="修正" />
	<input type="submit" value="決定" />
</form>


@endsection