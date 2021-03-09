@extends('backend.layouts.app')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mt-2 text-gray-800">Topics Info</h1>
    <div class="my-4">
            <!-- Topbar Search -->
        <form action="{{ route('admin.topics.index') }}" method="GET"
            class="d-none d-sm-inline-block form-inline mr-auto my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="search" name="search" class="form-control bg-black border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2" value="{{ request('search') }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
        <!-- Page Heading -->
        <a href="{{ route('admin.topics.create') }}" class="btn btn-primary btn-icon-split float-right">
            <span class="icon text-white-50">
                <i class="fas fa-users"></i>
            </span>
            <span class="text">Create</span>
        </a>
    </div>
    @if ($message = Session::get('message'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($topics as $topic)
                        <tr >
                            <td >
                                {{ $topic->name }}
                            </td>
                            <td>
                                <a href="{{ route('admin.topics.edit', $topic->id) }}" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-info-circle"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                                <a href="#" class="btn btn-danger btn-icon-split btn-sm"
                                    onclick="document.getElementById('delete-tag-{{ $topic->id }}').submit();"
                                >
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <form action="{{ route('admin.topics.destroy', $topic->id) }}" method="POST" id="delete-tag-{{ $topic->id }}">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    @if ($topics->isEmpty())
                        <p class="">There is no such a result</p>
                    @endif
                </div>
            </div>
            <div>
                {{ $topics->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection
