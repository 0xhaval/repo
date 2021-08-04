@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/lectuers.css') }}" />
<div class="full-header">
    <div class="container">
      <div class="content">
        <div>
            <h5 class="card-text"><small class="">{{ $reference->semester }} Semester / {{ $reference->level }} Class / {{ $reference->dept }} Department</small></h5>

          <h2>Lecture's</h2>
          <p>Every thing you need to study</p>
        </div>
        <img src="{{ asset('frontend/img/Group 335.svg') }}" alt="" />
      </div>
    </div>
  </div>
<div class="container">
    <h5>PDF</h5>
    <hr>
    <div class="row">
        <div class="col-6 col-md-3 width">
            <div class="card-body card-border">
              <img src="{{ asset('frontend/img/Group 62.svg') }}" alt="" />
            </div>
            <div class="card-body card-btn">
                <a class="btn btn-stages" href="{{ $reference->lec_link }}">{{ $reference->title }}</a>
            </div>
        </div>
    </div>

    <h5>Book</h5>
    <hr>
    <div class="row">
        <div class="col-6 col-md-3 width">
            <div class="card-body card-border">
              <img src="{{ asset('frontend/img/Group 63.svg') }}" alt="" />
            </div>
            <div class="card-body card-btn">
                <a class="btn btn-stages" href="{{ $reference->book_link }}">{{ $reference->book_name }}</a>
            </div>
        </div>
    </div>




    <h5>Video</h5>
    <hr>
    <div class="row">
        <div class="col-6 col-md-3 width">
            <div class="card-body card-border">
              <img src="{{ asset('frontend/img/Group 918.svg') }}" alt="" />
            </div>
            <div class="card-body card-btn">
                <a class="btn btn-stages" href="{{ $reference->video_link }}">{{ $reference->video_name }}</a>
            </div>
        </div>
    </div>

    <h5>Question</h5>
    <hr>
    <div class="row">
        <div class="col-6 col-md-3 width">
            <div class="card-body card-border">
              <img src="{{ asset('frontend/img/Group 919.svg') }}" alt="" />
            </div>
            <div class="card-body card-btn">
                <a class="btn btn-stages" href="{{ $reference->question_lec_link }}">{{ $reference->question_lec }}</a>
            </div>
        </div>
    </div>

    </div>
@endsection
