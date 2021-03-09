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
                            <a href="{{ route('admin.tags.index') }}">
                                <i class="far fa-arrow-alt-circle-left fa-3x"></i>
                            </a>
                            <h1 class="h4 text-gray-900 mb-4">Create a Tag!</h1>
                        </div>
                        <form class="user" action="{{ route('admin.tags.store') }}" method="POST">
                            @csrf
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
                                        placeholder="Name" value="{{ old('name') }}" name="name">
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
