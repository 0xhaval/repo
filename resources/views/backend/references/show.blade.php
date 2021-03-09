@extends('backend.layouts.app')
@section('content')
<div class="container">
    <blockquote class="blockquote">
        <footer class="blockquote-footer"><cite title="Source Title">{{ $reference->dept }}</cite> Department / <cite title="Source Title">{{ $reference->level }}</cite> Class / <cite title="Source Title">{{ $reference->semester }}</cite> Semester</footer>
    </blockquote>
    <div class="card shadow-sm mb-4 bg-white rounded">
        <div class="card-header">
            Lecture
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $reference->title }}</h5>
            <a href="{{ $reference->lec_link }}" class="btn btn-primary" target="_blank">Open</a>
        </div>
    </div>

    <hr class="mb-4">
    <div class="card shadow-sm mb-4 bg-white rounded">
        <div class="card-header">
            Book
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $reference->book_name }}</h5>
            <a href="{{ $reference->book_link }}" class="btn btn-primary" target="_blank">Open</a>
        </div>
    </div>

    <hr class="mb-4">
    <div class="card shadow-sm mb-4 bg-white rounded">
        <div class="card-header">
            Video
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $reference->video_name }}</h5>
            <a href="{{ $reference->video_link }}" class="btn btn-primary" target="_blank">Open</a>
        </div>
    </div>
</div>
@endsection
