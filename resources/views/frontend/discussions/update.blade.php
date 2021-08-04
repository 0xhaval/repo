@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/fourm.css') }}" />

<div class="container">
<h2 class="my-4">Update a Discussion</h2>

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <a href="{{ route('frontend.discussions.index') }}">
                                <i class="far fa-arrow-alt-circle-left fa-3x"></i>
                            </a>
                            <h1 class="h4 text-gray-900 mb-4">Update a Discussion!</h1>
                        </div>
                        <form class="user" action="{{ route('frontend.discussions.update', $discussion->id) }}" method="POST" >
                            @csrf
                            @method('PUT')
                            <input type="number" name="user_id" hidden id="" value="{{ Auth::user()->id }}">
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
                                    <label for="">Discussion Title</label>
                                    <input type="text" class="form-control" id="exampleFirstName"
                                        placeholder="Title" value="{{ $discussion->title }}" name="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tag">Topic</label>
                                <select class="form-control" id="tag" name="topic_id">
                                    <option value="" disabled selected>Choose One..</option>
                                    @foreach ($topics ?? '' as $topic)
                                        <option value="{{ $topic->id }}" {{ $topic->id == $discussion->topic->id ? 'selected' : '' }}>{{ $topic->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="">Discussion Content</label>
                                    <textarea name="content" class="form-control" cols="30" rows="10">
                                        {{ $discussion->content }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control  bg-primary text-white  btn-block"
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
