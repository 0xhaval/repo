@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('frontend.discussions.create') }}" class="btn btn-primary">Create a discussion</a>
        @foreach ($discussions as $discussion)
            <div class="card mb-3">
                <div class="card-body">
                    <a href="{{ route('frontend.discussions.show', $discussion->id) }}"><h5 class="card-title">{{ $discussion->title }}</h5></a>
                    <p class="card-text"><small class="text-muted">By / {{ $discussion->user->name }}</small></p>
                    <p class="card-text">{{ $discussion->content }}</p>
                    <p class="card-text"><small class="text-muted">Comments {{ $discussion->comments->count() }}</small></p>
                    <p class="card-text"><small class="text-muted">Created at {{ $discussion->created_at->format('Y-m-d H:i') }}</small></p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
