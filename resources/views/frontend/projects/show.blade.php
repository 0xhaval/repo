@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="card shadow-sm mb-4 bg-white rounded">
            <div class="card-header">
                {{ $project->title }}
            </div>
            <div class="card-body">
                <h5>Project Description</h5>
                    {{ $project->desc }}
                <h5>Project Content</h5>
                {{ $project->content }}
            </div>
        </div>
        <a href="{{ $project->url }}">Porject URL</a>
        <blockquote class="blockquote">
            <footer class="blockquote-footer">Author / <cite title="Source Title">{{ $project->user->name }}</cite></footer>
        </blockquote>
    </div>
@endsection
