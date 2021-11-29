@extends('master')
@section('content')





    <h3 class="h4 card-title">
        偽性格診断完成！
    </h3>
    <div class="">
        <button></button>
    </div>



    <button class="btn btn-primary" type="button">
        <a href="{{ url ('/fake.home', $id) }}" >URLへ</a>
    </button>
@endsection