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

        <div class="cards">
            <div class="card-body">
                <blockquote class="blockquote">
                    <footer class="blockquote-footer text-white">Author / <cite title="Source Title">{{ $project->user->name }}</cite></footer>
                </blockquote>
              <h5>{{ $project->title }}</h5>
              <p>Last updated 3 mins ago</p>
              <img src="{{ asset('frontend/img/361-542411604910395-1604910395.jpg') }}" alt="..." />
              <p>
                {{ $project->desc }}
                {{ $project->content }}
              </p>
              <p class="downlod-descrption">
                Click to download project document
              </p>
              <a href="{{ $project->url }}" class="btn btn-w">Downloads</a>

            </div>
          </div>


    </div>
@endsection
