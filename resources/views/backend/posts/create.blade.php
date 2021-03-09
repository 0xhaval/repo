@extends('backend.layouts.app')
@section('content')
<script src="https://cdn.tiny.cloud/1/16f7vorugs7vg4gjcg752t9koqvrm3sv3s6v99juardftkci/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<div class="container">


    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <a href="{{ route('admin.posts.index') }}">
                                <i class="far fa-arrow-alt-circle-left fa-3x"></i>
                            </a>
                            <h1 class="h4 text-gray-900 mb-4">Create a Post!</h1>
                        </div>
                        <form class="user" action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
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
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" id="exampleFirstName"
                                        placeholder="Title" value="{{ old('title') }}" name="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tag">Tag</label>
                                <select class="form-control" id="tag" name="tag_id">
                                    <option value="" disabled selected>Choose One..</option>
                                    @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label class="form-label" for="customFile">Upload Image</label>
                                    <input type="file" class="form-control" id="customFile" name="image">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <textarea name="desc">
                                        Here you write a Post Description
                                      </textarea>
                                      <script>
                                        tinymce.init({
                                          selector: 'textarea',
                                          toolbar_mode: 'floating',
                                       });
                                      </script>
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
