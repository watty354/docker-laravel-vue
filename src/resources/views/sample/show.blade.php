@foreach($texts as $text)
<div>{{ $text -> id }}</div>
<div>{{ $text -> text }}</div>
@endforeach