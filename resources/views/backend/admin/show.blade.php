@extends('backend.layouts.app')
@section('content')
<div class="container">
    <div class="card shadow-sm mb-4 bg-white rounded">
        <div class="card-header">
            Admin Profile
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ auth()->user()->name }}</h5>
            <a href="{{ route('admin.users.edit', auth()->user()->id) }}" class="btn btn-primary">Setting</a>
        </div>
    </div>
</div>
@endsection
