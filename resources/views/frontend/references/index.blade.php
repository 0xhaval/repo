@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-5">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h1 class="card-title">First Stage</h1>
                        <div class=" block mb-3">
                            <a href="{{ route('frontend.references.showSemester', ['first', 'first']) }}" class="btn btn-primary">First Semester</a>
                        </div>
                        <div class="block">
                            <a href="{{ route('frontend.references.showSemester', ['first', 'second']) }}" class="btn btn-primary">Second Semester</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-5">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h1 class="card-title">Second Stage</h1>
                        <div class=" block mb-3">
                            <a href="{{ route('frontend.references.showSemester', ['second', 'first']) }}" class="btn btn-primary">First Semester</a>
                        </div>
                        <div class="block">
                            <a href="{{ route('frontend.references.showSemester', ['second', 'second']) }}" class="btn btn-primary">Second Semester</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-5">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h1 class="card-title">Third Stage</h1>
                        <div class=" block mb-3">
                            <a href="{{ route('frontend.references.showSemester', ['third', 'first']) }}" class="btn btn-primary">First Semester</a>
                        </div>
                        <div class="block">
                            <a href="{{ route('frontend.references.showSemester', ['third', 'second']) }}" class="btn btn-primary">Second Semester</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-5">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h1 class="card-title">Fourth Stage</h1>
                        <div class=" block mb-3">
                            <a href="{{ route('frontend.references.showSemester', ['fourth', 'first']) }}" class="btn btn-primary">First Semester</a>
                        </div>
                        <div class="block">
                            <a href="{{ route('frontend.references.showSemester', ['fourth', 'second']) }}" class="btn btn-primary">Second Semester</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
