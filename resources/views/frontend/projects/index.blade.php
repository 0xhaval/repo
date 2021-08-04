@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/projects.css') }}" />
<div class="full-header">
    <div class="container">
      <div class="content">
        <div>
          <h2>Project's</h2>
          <p>Best project's from our student</p>
        </div>
        <img src="{{ asset('frontend/img/Group 359.svg') }}" alt="" />
      </div>
    </div>
</div>
<div class="container">
    <h3>2021</h3>
    <hr>
    <div class="card-holder row">
        @foreach ($projects as $project)
        <div class="prj-card col-12 col-md-4">
            <a href="{{ route('frontend.projects.show', $project->id) }}">
            <img src="{{ asset('frontend/img/Banner_2x.png') }}" alt="" />
            </a>
            <a href="{{ route('frontend.projects.show', $project->id) }}"><h5 class="card-title">{{ $project->title }}</h5></a>
            <p class="card-text">{{ Str::limit($project->desc, 10) }}</p>
            <p class="card-text"><small class="text-muted">Created at {{ $project->created_at->format('Y-m-d H:i') }}</small></p>
        </div>
        @endforeach
    </div>
</div>
@endsection
