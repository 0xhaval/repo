@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />

<div class="back-img">
    <div class="holder">
      <div class="main-card">
        <h2 class="card-h-one">Sing up</h2>
        <form class="form-syle" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-2">
                <label for="name" class="form-label">Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
          <div class="mb-2">
            <label for="email" class="form-label">Email address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="mb-2">
            <label for="password" class="form-label">password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="mb-2">
            <label for="password" class="form-label">confrim password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

          </div>

          <button type="submit" class="btn btn-primary btn-block">
            {{ __('Register') }}
        </button>
        </form>

      </div>
    </div>
  </div>


@endsection
