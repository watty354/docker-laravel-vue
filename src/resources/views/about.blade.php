@extends('master')
@section('content')

<div class="title mb-3 text-left mt-3">
    <h4 class="sentence">
        <span>1.</span>あなたが相手の性格診断結果を作成します</h4>
    </div>
    <div class="mb-5">
        <img src="{{ asset('images/about.png')}}" class="img-responsive">
    </div>

    
    <div class="title mb-4 text-left">
        <h4 class="sentence">
            <span>2.</span>偽性格診断のURLが作成されますので<br>コピー or そのまま偽性格診断</h4>
        </div>
        
        <div class="title mb-3 text-left">
            <h4 class="sentence">
                <span>3.</span>相手に性格診断をさせます。どうでもいい質問が5問出題されます</h4>
            </div>
            <div class="mb-5">
                <img src="{{ asset('images/about2.png')}}" class="img-responsive">
            </div>


    <div class="title mb-3 text-left">
        <h4 class="sentence">
            <span>4.</span>診断結果にあなたの作成されたものが表示されます</h4>
        </div>
        <div class="mb-5">
            <img src="{{ asset('images/about3.png')}}" class="img-responsive">
        </div>
        <a href="{{ url('/input')}}"  class="button mt-5" onclick="clickBtn3()">入力する</a>
@endsection