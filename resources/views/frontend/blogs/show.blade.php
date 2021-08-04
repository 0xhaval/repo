@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/blog.css') }}" />
<div class="full-header">
    <div class="container">
      <div class="content">
        <div>
          <h2>Blog</h2>
          <p>New psots and articals</p>
        </div>
        <img src="{{ asset('frontend/img/Group 358.png') }}" alt="" />
      </div>
    </div>
</div>
<div class="container">

    <div class="cards mb-4">
        <div class=" text-center">
            <h3>{{ $post->title }}</h3>
        </div>
        <div class="card-body">
            <img src="{{ $post->image_path }}" alt="" width="100%">
            <hr class="my-4">
                {!! $post->desc !!}
        </div>
    </div>
    <blockquote class="blockquote">
        <footer class="blockquote-footer text-white">Author / <cite title="Source Title">{{ $post->user->name }}</cite></footer>
    </blockquote>
    <blockquote class="blockquote">
        <footer class="blockquote-footer text-white">Tag / <cite title="Source Title">{{ $post->tag->name }}</cite></footer>
    </blockquote>
</div>
@endsection
