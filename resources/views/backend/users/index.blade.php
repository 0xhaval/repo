@extends('backend.layouts.app')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mt-2 text-gray-800">User Info</h1>
    <div class="my-4">
            <!-- Topbar Search -->
        <form action="{{ route('admin.users.index') }}" method="GET"
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
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-icon-split float-right">
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
                            <th>Department</th>
                            <th>Level</th>
                            <th>Role</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Level</th>
                            <th>Role</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $user)
                        <tr >
                            <td >
                                <div class="">
                                    {{ $user->name }}
                                    <p class="badge bg-primary text-wrap text-white">{{ $user->email }}</p>
                                </div>
                            </td>
                            <td>
                                {{ isset($user->dept) ? $user->dept: '' }}
                            </td>
                            <td>
                                {{ (!$user->isAdmin()) ? $user->level : '' }}
                            </td>
                            <td>
                                <span class="badge {{ $user->is_admin? 'bg-success' : 'bg-danger' }} text-white">{{ $user->is_admin? 'Admin' : 'User' }}</span>
                            </td>
                            <td>
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-info-circle"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                                <a href="#" class="btn btn-danger btn-icon-split btn-sm"
                                    onclick="document.getElementById('delete-user-{{ $user->id }}').submit();"
                                >
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" id="delete-user-{{ $user->id }}">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    @if ($users->isEmpty())
                        <p class="">There is no such a result</p>
                    @endif
                </div>
            </div>
            <div>
                {{ $users->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection
