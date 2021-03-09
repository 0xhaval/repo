@extends('layouts.app')
@section('content')
    <div class="container">
        <ul>
            <p class="card-text"><small class="text-muted">{{ $reference->semester }} Semester / {{ $reference->level }} Class / {{ $reference->dept }} Department</small></p>
            <h4>Lecture </h4>
            <li><a href="{{ $reference->lec_link }}">{{ $reference->title }}</a></li>
            <hr>
            <h4>Book </h4>
            <li><a href="{{ $reference->book_link }}">{{ $reference->book_name }}</a></li>
            <hr>
            <h4>Video </h4>
            <li><a href="{{ $reference->video_link }}">{{ $reference->video_name }}</a></li>
            <hr>
            <h4>Question </h4>
            <li><a href="{{ $reference->question_lec_link }}">{{ $reference->question_lec }}</a></li>
        </ul>
    </div>
@endsection
