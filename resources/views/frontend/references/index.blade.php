@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/stages.css') }}" />

<div class="full-header">
    <div class="container">
      <div class="content">
        <div>
          <h2>Stages</h2>
          <p>Our new Department's and collage</p>
        </div>
        <img src="{{ asset('frontend/img/Group 335.svg') }}" alt="" />
      </div>
    </div>
  </div>

    <div class="container">
      <h5>Stages</h5>
      <hr />
        <div class="row">

            <div class="col-12 col-md-6 width">
                <div class="card-body card-border">
                  <h5 class="card-title">First stage :)</h5>
                </div>
                <div class="card-body card-btn">
                  <a href="{{ route('frontend.references.showSemester', ['first', 'first']) }}" class="btn btn-stages">1st Semester </a>
                  <a href="{{ route('frontend.references.showSemester', ['first', 'second']) }}" class="btn btn-stages">2nd Semester </a>
                </div>
            </div>


            <div class="col-12 col-md-6 width">
                <div class="card-body card-border">
                  <h5 class="card-title">Second stage</h5>
                </div>
                <div class="card-body card-btn">
                  <a href="{{ route('frontend.references.showSemester', ['second', 'first']) }}" class="btn btn-stages">1st Semester </a>
                  <a href="{{ route('frontend.references.showSemester', ['second', 'second']) }}" class="btn btn-stages">2nd Semester </a>
                </div>
            </div>

            <div class="col-12 col-md-6 width">
                <div class="card-body card-border">
                  <h5 class="card-title">Third stage</h5>
                </div>
                <div class="card-body card-btn">
                  <a href="{{ route('frontend.references.showSemester', ['third', 'first']) }}" class="btn btn-stages">1st Semester </a>
                  <a href="{{ route('frontend.references.showSemester', ['third', 'second']) }}" class="btn btn-stages">2nd Semester </a>
                </div>
            </div>

            <div class="col-12 col-md-6 width">
                <div class="card-body card-border">
                  <h5 class="card-title">Fourth stage</h5>
                </div>
                <div class="card-body card-btn">
                  <a href="{{ route('frontend.references.showSemester', ['fourth', 'first']) }}" class="btn btn-stages">1st Semester </a>
                  <a href="{{ route('frontend.references.showSemester', ['fourth', 'second']) }}" class="btn btn-stages">2nd Semester </a>
                </div>
            </div>


        </div>
    </div>
@endsection
