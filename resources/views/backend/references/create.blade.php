@extends('backend.layouts.app')
@section('content')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center mb-3">
                            <h1 class="h4 text-gray-900 ">Create a New Reference</h1>
                            <small class="text-danger">All fields is Required</small>
                        </div>
                        <form class="user" action="{{ route('admin.references.store') }}" method="POST">
                            @csrf
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
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control "
                                        id="exampleInputPassword" placeholder="Title" name="title">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control "
                                        id="exampleRepeatPassword" placeholder="Lecture Link" name="lec_link">
                                        <small class="text-danger ml-1">link is must be from Google Drive</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control "
                                        id="exampleInputPassword" placeholder="Book Name" name="book_name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control "
                                        id="exampleRepeatPassword" placeholder="Book Link" name="book_link">
                                        <small class="text-danger ml-1">link is must be from Google Drive</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control"
                                        id="exampleInputPassword" placeholder="Video Name" name="video_name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control "
                                        id="exampleRepeatPassword" placeholder="Video Link" name="video_link">
                                        <small class="text-danger ml-1">link is must be from Google Drive</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control"
                                        id="exampleInputPassword" placeholder="Question Name" name="question_lec">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control "
                                        id="exampleRepeatPassword" placeholder="Question Lecture Link" name="question_lec_link">
                                        <small class="text-danger ml-1">link is must be from Google Drive</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="level">Class</label>
                                <select class="form-control" id="level" name="level">
                                    <option value="first">First</option>
                                    <option value="second">Second</option>
                                    <option value="third">Third</option>
                                    <option value="fourth">Fourth</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="semester">Semester</label>
                                <select class="form-control" id="semester" name="semester">
                                    <option value="first">First</option>
                                    <option value="second">Second</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="dept">Department</label>
                                <select class="form-control" id="dept" name="dept">
                                    <option value="computer">Computer Science</option>
                                    <option value="networking">Networking</option>
                                    <option value="software">Software</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control  btn btn-primary  btn-block"
                                 value="Save">
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
