@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

<div class="back-img">
    <div class="holder">
      <div class="main-card">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input
                  type="email"
                  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                  id="email"
                  placeholder="name@example.com"
                />
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input
                  type="password"
                  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                  id="password"
                  placeholder="name@example.com"
                />
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="mb-3">

            <input
            type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
            class="form-check-input"
            id="exampleCheck1"/>
            <label class="form-check-label" for="exampleCheck1"
            >Remeber me</label>
            </div>

            <button type="submit" class="btn">Login</button>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="forgetpass">Forget Your Password?</a>
            @endif
        </div>

        </form>
      </div>
    </div>
  </div>

@endsection
