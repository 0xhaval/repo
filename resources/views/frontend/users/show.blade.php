@extends('layouts.app')
@section('content')
<div class="full-header">
    <div class="container">
      <div class="content">
        <div>
            @auth
            <h2>{{ Auth::user()->name }}</h2>
            <p>Edit you profile <a href="{{ route('frontend.profile.edit', $profile->id) }}" class="text-white">Setting</a></p>

            @endauth
        </div>
        <img src="{{ asset('frontend/img/Group 311.svg') }}" alt="" />
      </div>

    </div>
  </div>
@endsection
