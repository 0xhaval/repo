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
        <h5>Forum</h5>
        <hr>
        <a href="{{ route('frontend.discussions.create') }}" class="btn btn-primary my-3">Create a discussion</a>
        <div class="row">
        @foreach ($discussions as $discussion)
            <div class="col-12">
                <div class="cards">
                  <div class="card-body">
                    <h5 class="subject">
                        <a href="{{ route('frontend.discussions.show', $discussion->id) }}"><h5 class="card-title">{{ $discussion->title }}</h5></a>
                    </h5>
                    <p class="authore-name">
                        <p class="card-text">By / {{ $discussion->user->name }}</p>
                    </p>
                    <hr />
                    <p class="card-text">Created at {{ $discussion->created_at->format('Y-m-d H:i') }}</p>
                    <p class="card-text text">{{ $discussion->content }}</p>
                    <p class="comment">
                        <p class="card-text">Comments {{ $discussion->comments->count() }}</p>
                    </p>
                  </div>
                </div>
              </div>
        @endforeach

        </div>
    </div>
@endsection
