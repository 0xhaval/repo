@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach ($blogs as $blog)
            <div class="card mb-3">
                <a href="{{ route('frontend.blogs.show', $blog->id) }}">
                    <img class="card-img-top" src="{{ $blog->image_path }}" alt="Card image cap">
                </a>
                <div class="card-body">
                    <a href="{{ route('frontend.blogs.show', $blog->id) }}"><h5 class="card-title">{{ $blog->title }}</h5></a>
                    <p class="card-text">{{ Str::limit($blog->desc, 10) }}</p>
                    <p class="card-text"><small class="text-muted">Created at {{ $blog->created_at->format('Y-m-d H:i') }}</small></p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
