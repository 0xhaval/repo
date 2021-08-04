@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/fourm.css') }}" />

<div class="full-header">
    <div class="container">
      <div class="content">
        <div>
          <h2>Forum</h2>
          <p>Ask, discuss and fill your curiosity</p>
        </div>
        <img src="{{ asset('frontend/img/blog.svg') }}" alt="" />
      </div>
    </div>
  </div>
<div class="container">
    <blockquote class="blockquote">
        <footer class="blockquote-footer text-white">Author / <cite title="Source Title">{{ $discussion->user->name }}</cite></footer>
    </blockquote>
    <blockquote class="blockquote">
        <footer class="blockquote-footer text-white">Topic / <cite title="Source Title">{{ $discussion->topic->name }}</cite></footer>
    </blockquote>
    @if (Auth::check() && Auth::user()->id == $discussion->user->id)
        <a href="#" class="btn btn-danger my-2"
            onclick="document.getElementById('delete-{{ $discussion->id }}').submit();"
        >Delete a discussion</a>

        <a href="{{ route('frontend.discussions.edit', $discussion->id) }}" class="btn btn-primary my-2">Update a discussion</a>
    @endif


    <form action="{{ route('frontend.discussions.destroy', $discussion->id) }}" id="delete-{{ $discussion->id }}" method="post">
        @csrf
        @method('delete')
    </form>

    <div class="cards">
        <div class="card-body">
          <h5 class="subject">{{ $discussion->title }}</h5>
          <p class="authore-name">{{ $discussion->user->name }}</p>
          <hr />
          <p>{{ $discussion->created_at->format('Y-m-d H:i') }}</p>
          <p class="text">
            {{ $discussion->content }}
          </p>
          <p class="comment">
            <a href="#">comments 4 <i class="bi bi-card-text"></i></a>
          </p>
        </div>
      </div>

    <!--Comment-->
    @auth
    <div class="card shadow-sm mb-4 bg-white rounded">
        <div class="card-header bg-dark text-light">
            Write Your Comment
        </div>
        <div class="card-body">
            <form action="{{ route('frontend.comments.store') }}" method="post">
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
                    by {{ $comment->user->name }}
                </a>
                <div class="float-right">
                    {{ $comment->created_at->format('Y-m-d H:i') }}
                </div>
            </div>
            <div class="card-body">
                <h3 class=" text-black-50">{{ $comment->content }}</h3>
                @if (Auth::user()->id == $comment->user->id)
                    <a href="#" class="btn btn-danger float-right"
                        onclick="document.getElementById('delete-{{ $comment->id }}').submit();"
                    >Delete</a>
                @endif
            </div>
        </div>

        <form action="{{ route('frontend.comments.destroy', $comment->id) }}" method="POST" id="delete-{{ $comment->id }}">
            @csrf
            @method('delete')
        </form>
    @endif
    @empty
    @endforelse
    @endauth

    @guest
    <h1>Sign in to watch and create a Comments</h1>
    @endguest




</div>
@endsection
