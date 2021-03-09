@extends('backend.layouts.app')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mt-2 text-gray-800">Project Info</h1>
    <div class="my-4">
            <!-- Topbar Search -->
        <form action="{{ route('admin.projects.index') }}" method="GET"
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
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary btn-icon-split float-right">
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
                            <th>Title</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>Admin</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>Admin</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr >
                            <td >
                                <a href="{{ route('admin.projects.show', $project->id) }}">{{ $project->title }}</a>
                            </td>
                            <td>
                                <span class="badge bg-gradient-warning text-dark">{{ $project->user->name }}</span>
                            </td>
                            <td>{{ $project->desc }}</td>
                            <td>
                                <span class="badge bg-gradient-warning text-dark"></span>
                            </td>
                            <td>
                                <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-info-circle"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                                <a href="#" class="btn btn-danger btn-icon-split btn-sm"
                                    onclick="document.getElementById('delete-user-{{ $project->id }}').submit();"
                                >
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" id="delete-user-{{ $project->id }}">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    @if ($projects->isEmpty())
                        <p class="">There is no such a result</p>
                    @endif
                </div>
            </div>
            <div>
                {{ $projects->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection
