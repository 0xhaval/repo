@extends('layouts.app')
@section('content')
<div class="container">
    <ul>
        Computer Lecture's
        @foreach ($references as $reference)
            @if ($reference->dept == 'computer')
                <li><a href="{{ route('frontend.references.show', $reference->id) }}">{{ $reference->title }}</a></li>
            @endif

        @endforeach

        Networking Lecture's<br>
        @foreach ($references as $reference)
            @if ($reference->dept == 'networking')
                <li><a href="{{ route('frontend.references.show', $reference->id) }}">{{ $reference->title }}</a></li>
            @endif
        @endforeach

        Software Lecture's
        @foreach ($references as $reference)
            @if ($reference->dept == 'software')
                <li><a href="{{ route('frontend.references.show', $reference->id) }}">{{ $reference->title }}</a></li>
            @endif
        @endforeach
    </ul>
</div>
@endsection
