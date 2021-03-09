@extends('backend.layouts.app')
@section('content')
<div class="container">
    <blockquote class="blockquote">
        <footer class="blockquote-footer">Author / <cite title="Source Title">{{ $discussion->user->name }}</cite></footer>
    </blockquote>
    <blockquote class="blockquote">
        <footer class="blockquote-footer">Topic / <cite title="Source Title">{{ $discussion->topic->name }}</cite></footer>
    </blockquote>
    <div class="card shadow-sm mb-4 bg-white rounded">
        <div class="card-header">
            {{ $discussion->title }}
            <div class="float-right">
                {{ $discussion->created_at->format('Y-m-d H:i') }}
            </div>
        </div>
        <div class="card-body">
            <h5>Discussion Content</h5>
                {{ $discussion->content }}
        </div>
    </div>

    <div class="card shadow-sm mb-4 bg-white rounded">
        <div class="card-header bg-dark text-light">
            Write Your Comment
        </div>
        <div class="card-body">
            <form action="{{ route('admin.comments.store') }}" method="post">
                @csrf
                <input type="text" hidden name="user_id" value="{{ Auth::user()->id }}">
                <input type="text" hidden name="discussion_id" value="{{ $discussion->id }}">
                <textarea name="content" id="" cols="30" rows="5" class="form-control"></textarea>
                <br>
                <input type="submit" value="Send" class="btn btn-primary float-right">
            </form>
        </div>
    </div>

    @forelse ($comments as $comment)
        @if ($comment->discussion->id === $discussion->id)
            <div class="card shadow-sm mb-4 bg-white rounded">
                <div class="card-header">
                    <a href="#">
                        {{ $comment->user->name }}
                    </a>
                    <div class="float-right">
                        {{ $comment->created_at->format('Y-m-d H:i') }}
                    </div>
                </div>
                <div class="card-body">
                    <p>{{ $comment->content }}</p>
                    <a href="#" class="btn btn-danger float-right"
                        onclick="document.getElementById('delete-{{ $comment->id }}').submit();"
                    >Delete</a>
                </div>
            </div>

            <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST" id="delete-{{ $comment->id }}">
                @csrf
                @method('delete')
            </form>
        @endif
    @empty
    @endforelse

    @foreach ($comments as $comment)


    @endforeach

</div>
@endsection
