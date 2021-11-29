

@extends('master')
@section('content')



<form method="post" action="{{ route('form.post') }}">
    @csrf
    
<div class="question">
    <div class="title">
        <h3>1.定型文を決める</h3>
    </div>
    <div class="content">
        <select name="sentence_id"  value="{{ old('sentence_id') }}">
            <option value="1" >サンプル1</option>
            <option value="2" >サンプル2</option>
            <option value="3" >サンプル3</option>
            </select>
    </div>
</div>


<div class="question">
    <div class="title">
        <h3>2.本音を書く</h3>
    </div>
    <div class="content">
        <textarea name="text">{{ old('text') }}</textarea>
    </div>
</div>



<div class="question">
    <div class="title">
        <h3>3.ネタばらしをする</h3>
    </div>
    <div class="content">
        <div>
            <input type="radio" name="show_id" value="1" value="{{ old('show_id') }}"  checked/>はい
            <input type="radio" name="show_id" value="2" value="{{ old('show_id') }}" />いいえ
        </div>
    </div>
</div>












@if ($errors->any())
<div style="color:red;">
<ul>
	@foreach ($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
</div>
@endif

	<input class="btn btn-primary" type="submit" value="送信" onclick="clickBtn3()"/>

</form>
    


@endsection