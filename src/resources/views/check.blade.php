@extends('master')
@section('content')
<div class="sentence mt-5 mb-4">
	<p>以下のように表示されます</p>
</div>







<div class="box B_5">
	<div class="confirm">
		<form method="post" action="{{ route('form.send') }}">
			@csrf
		<div class="">
			<div class="text-left">
				{{ $sentence -> sentence }}
			</div>
			<div class="text-left  text-break">
				{{ $input['text'] }}
			</div>
		</div>
	</div>


	</div>
<div>
	<input name="back" class="button cancel mt-5 mb-5" type="submit" value="修正" onclick="clickBtn3()"/>

</div>
<div>
	<input type="submit" class="button mt-5 mb-5 arrow" value="決定" onclick="clickBtn3()"/>

</div>
</form>


@endsection