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
        <h5>Blog</h5>
        <hr>
        @foreach ($blogs as $blog)
        <div class="cards card">
            <div class="card-body">
            <a href="{{ route('frontend.blogs.show', $blog->id) }}"><h5 class="card-title">{{ $blog->title }}</h5></a>
            <p class="card-text"><small class="">Created at {{ $blog->created_at->format('Y-m-d H:i') }}</small></p>
              <a href="{{ route('frontend.blogs.show', $blog->id) }}">
                <img class="card-img-top" height="400px" src="{{ $blog->image_path }}" alt="Card image cap">
            </a>
            <p class="card-text">{{ Str::limit($blog->desc, 10) }}</p>
            <hr>
            </div>
        </div>
        @endforeach
    </div>
@endsection
