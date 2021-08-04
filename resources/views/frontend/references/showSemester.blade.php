@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/department.css') }}" />

<div class="full-header">
    <div class="container">
      <div class="content">
        <div>
          <h2>Department's</h2>
          <p>Our new Department's and collage</p>
        </div>
        <img src="{{ asset('frontend/img/undraw_Building_re_xfcm.svg') }}" alt="" />
      </div>
    </div>
  </div>
<div class="container">
    <h5>Department's</h5>
    <hr />
    <div class="row">
        <div class="col-12 col-md-12 width">
            <h2>Computer Since</h2>
            <div class="card-body card-border">
              <img src="{{ asset('frontend/img/Group 912.svg') }}" class="card-title" />
            </div>
            <div class="card-body card-btn">
            @foreach ($references as $reference)
                @if ($reference->dept == 'computer')
                    <a class="btn btn-stages my-2" href="{{ route('frontend.references.show', $reference->id) }}">{{ $reference->title }}</a>
                @endif
            @endforeach
            </div>
        </div>

        <div class="col-12 col-md-12 width">
            <h2>Networking</h2>
            <div class="card-body card-border">
              <img src="{{ asset('frontend/img/Group 913.svg') }}" class="card-title" />
            </div>
            <div class="card-body card-btn">
            @foreach ($references as $reference)
                @if ($reference->dept == 'networking')
                    <a class="btn btn-stages my-2" href="{{ route('frontend.references.show', $reference->id) }}">{{ $reference->title }}</a>
                @endif
            @endforeach
            </div>
        </div>

        <div class="col-12 col-md-12 width">
            <h2>Software Engineer</h2>
            <div class="card-body card-border">
              <img src="{{ asset('frontend/img/Group 946.svg') }}" class="card-title" />
            </div>
            <div class="card-body card-btn">
            @foreach ($references as $reference)
                @if ($reference->dept == 'software')
                    <a class="btn btn-stages my-2" href="{{ route('frontend.references.show', $reference->id) }}">{{ $reference->title }}</a>
                @endif
            @endforeach
            </div>
        </div>

    </div>
</div>
@endsection
