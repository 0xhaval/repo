@extends('layouts.app')
@section('content')
    <div class="container">
        Hi {{ $profile->name }}

        <a href="{{ route('frontend.profile.edit', $profile->id) }}">Setting</a>
    </div>
@endsection
