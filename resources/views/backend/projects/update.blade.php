@extends('backend.layouts.app')
@section('content')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <a href="{{ route('admin.projects.index') }}">
                                <i class="far fa-arrow-alt-circle-left fa-3x"></i>
                            </a>
                            <h1 class="h4 text-gray-900 mb-4">Update a Project!</h1>
                        </div>
                        <form class="user" action="{{ route('admin.projects.update', $project->id) }}" method="POST">
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
                                    <label for="">Project Name</label>
                                    <input type="text" class="form-control" id=""
                                        placeholder="Project Name" value="{{ $project->title }}" name="title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="owner">Project Owner Email</label>
                                <select class="form-control" id="owner" name="user_id" size="5">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {{ $user->id == $project->user_id ? 'selected' : '' }}>{{ $user->email }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="desc">Description</label>
                                    <textarea name="desc" id="desc" cols="30" rows="5" class="form-control">{{ $project->desc }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="content">Content</label>
                                    <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ $project->content }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="">Project Url</label>
                                    <input type="text" class="form-control" id=""
                                        placeholder="Url" value="{{ isset($project->url) ? $project->url : '' }}" name="url">
                                </div>
                            </div>


                            <div class="form-group">
                                <input type="submit" class="form-control  btn btn-primary  btn-block"
                                 value="Add">
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
