@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/about.css') }}">
<div class="full-header">
    <div class="container">
      <div class="content">
        <div>
          <h2>About us</h2>
          <p>To spread the power of good work team</p>
        </div>
        <img src="{{ asset('frontend/img/Group 311.svg') }}" alt="" />
      </div>
    </div>
  </div>
  <div class="container">
    <h5>Our team</h5>
    <hr />
    <div class="row center-cards">
      <div class="cards col-12 col-sm-6 col-md-4">
        <img src="{{ asset('frontend/img/omaer.svg') }}" alt="" />
        <div class="card-body">
          <h3>Omar Mohammed</h3>
          <p>Full stuck developer</p>
        </div>
      </div>
      <div class="cards col-12 col-sm-6 col-md-4">
        <img src="{{ asset('frontend/img/walid.svg') }}" alt="" />
        <div class="card-body">
          <h3>Walid Khalid</h3>
          <p>Front-end developer & UX/UI designer</p>
        </div>
      </div>
      <div class="cards col-12 col-sm-6 col-md-4">
        <img src="{{ asset('frontend/img/halla.svg') }}" alt="" />
        <div class="card-body">
          <h3>Halla Ahmed</h3>
          <p>Java programmer & android developer</p>
        </div>
      </div>
      <div class="cards col-12 col-sm-6 col-md-4">
        <img src="{{ asset('frontend/img/ahmed.svg') }}" alt="" />
        <div class="card-body">
          <h3>Ahmed Mahmood</h3>
          <p>Front-end developer</p>
        </div>
      </div>
      <div class="cards col-12 col-sm-6 col-md-4">
        <img src="{{ asset('frontend/img/zahrra.svg') }}" alt="" />
        <div class="card-body">
          <h3>Zahra Salam</h3>
          <p>Algorithm's & databases</p>
        </div>
      </div>
    </div>
  </div>
@endsection
