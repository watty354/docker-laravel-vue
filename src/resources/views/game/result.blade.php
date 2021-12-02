@extends('master')
@section('content')
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

@endsection