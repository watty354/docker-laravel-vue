@foreach($texts as $text)
<div>
    <a href="/home/{{ $text -> id }}">
        
        {{ $text -> id }}
    </a>
</div>
<div>{{ $text -> text }}</div>
@endforeach