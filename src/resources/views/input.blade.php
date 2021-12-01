

@extends('master')
@section('content')



<form method="post" action="{{ route('form.post') }}">
    @csrf
    
<div class="question mt-5 mb-5">
    <div class="title mb-3 text-left">
        <h3 class="sentence">
           <span>1.</span>定型文を決める</h3>
    </div>
    <div class="content">
        {{-- <select name="sentence_id"  value="{{ old('sentence_id') }}">
            <option value="1" >サンプル1</option>
            <option value="2" >サンプル2</option>
            <option value="3" >サンプル3</option>
            </select> --}}

                <select name="sentence_id" id="sources" class="custom-select sources" value="{{ old('sentence_id') }}" placeholder="{{ old('sentence_id') }}">
                
                <option value="1" @if (1 === (int) old('sentence_id')) selected @endif>神経質</option>
                <option value="2" @if (2 === (int) old('sentence_id')) selected @endif>社交的</option>
                <option value="3" @if (3 === (int) old('sentence_id')) selected @endif>好奇心旺盛</option>
                <option value="4" @if (4 === (int) old('sentence_id')) selected @endif>優しい</option>
                <option value="5" @if (5 === (int) old('sentence_id')) selected @endif>真面目</option>
              </select>
    </div>
</div>


<div class="question mt-5 mb-5">
    <div class="title mb-3 text-left">
        <h3 class="sentence">
            <span>2.</span>本音を書く</h3>
    </div>
    <div class="content ">
        {{-- <textarea name="text">{{ old('text') }}</textarea> --}}

        <textarea name="text" class="textArea" id="inText"
    placeholder="入力してください"
    onblur="coloeSet(this)"
    onfocus="colorReset(this)"
    oninput="textAreaHeightSet(this)"
    onchange="textAreaHeightSet(this)">{{ old('text') }}</textarea>
    </div>
</div>



<div class="question mt-5 mb-5">
    <div class="title mb-3 text-left">
        <h3 class="sentence"><span>3.</span>ネタばらしをする</h3>
    </div>
    <div class="content text-center">
        <div class="check">
            {{-- <input type="radio" name="show_id" value="1" value="{{ old('show_id') }}"  checked/>はい
            <input type="radio" name="show_id" value="2" value="{{ old('show_id') }}" />いいえ --}}

            <div class="succes_check">
            <input type="radio" name="show_id" value="1" id="one" checked/><label for="one">はい</label>
        </div>
<div class="uncheck">
    <input type="radio" name="show_id" value="2" id="two"/><label for="two">いいえ</label>
</div>


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

	<input class="button" type="submit" value="確認" onclick="clickBtn3()"/>

</form>
    


@endsection