@extends('backend.layouts.app')
@section('content')
<div class="container">
    <blockquote class="blockquote">
        <footer class="blockquote-footer">Author / <cite title="Source Title">{{ $post->user->name }}</cite></footer>
    </blockquote>
    <blockquote class="blockquote">
        <footer class="blockquote-footer">Tag / <cite title="Source Title">{{ $post->tag->name }}</cite></footer>
    </blockquote>
    <div class="card shadow-sm mb-4 bg-white rounded">
        <div class="card-header">
            {{ $post->title }}
        </div>
        <div class="card-body">
            <h5>Post Image</h5>
            <img src="{{ $post->image_path }}" alt="" width="100%">
            <hr class="my-4">
            <h5>Post Description</h5>
                {!! $post->desc !!}
        </div>
    </div>
</div>
@endsection
