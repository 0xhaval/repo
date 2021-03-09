@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Update {{ $profile->name }} Account!</h1>
                        </div>
                        <form class="user" action="{{ route('frontend.profile.update', $profile->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Error!</strong> <br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" id="exampleFirstName"
                                        placeholder="Full Name" value="{{ $profile->name }}" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail"
                                    placeholder="Email Address" value="{{ $profile->email }}" name="email">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control "
                                        id="exampleInputPassword" placeholder="Password" name="password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control "
                                        id="exampleRepeatPassword" placeholder="Repeat Password" name="password_confirmation">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dept">Department</label>
                                <select class="form-control" id="dept" name="dept">
                                    <option value="computer" {{ $profile->dept == "computer" ? 'selected' : '' }}>Computer Science</option>
                                    <option value="networking" {{ $profile->dept == "networking" ? 'selected' : '' }}>Networking</option>
                                    <option value="software" {{ $profile->dept == "software" ? 'selected' : '' }}>Software</option>
                                </select>
                            </div>
                            @if (!$profile->isAdmin())
                            <div class="form-group">
                                <label for="level">Level</label>
                                <select class="form-control" id="level" name="level">
                                    <option value="first" {{ $profile->level == "first" ? 'selected' : '' }}>First</option>
                                    <option value="second" {{ $profile->level == "second"? 'selected' : '' }}>Second</option>
                                    <option value="third" {{ $profile->level == "third" ? 'selected' : '' }}>Third</option>
                                    <option value="fourth" {{ $profile->level == "fourth"? 'selected' : '' }}>Fourth</option>
                                </select>
                            </div>
                            @endif
                            <div class="form-group">
                                <label >Date of Birth</label>
                                <input type="date" name="dob" max="3000-12-31"
                                       min="1000-01-01" class="form-control" value="{{ isset($profile->dob) ? $profile->dob: null }}">
                            </div>


                            <div class="form-group">
                                <input type="submit" class="form-control  btn btn-primary  btn-block"
                                 value="Update">
                            </div>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
