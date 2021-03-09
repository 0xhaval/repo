@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach ($projects as $project)
            <div class="card mb-3">
                <div class="card-body">
                    <a href="{{ route('frontend.projects.show', $project->id) }}"><h5 class="card-title">{{ $project->title }}</h5></a>
                    <p class="card-text">{{ Str::limit($project->desc, 10) }}</p>
                    <p class="card-text"><small class="text-muted">Created at {{ $project->created_at->format('Y-m-d H:i') }}</small></p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
