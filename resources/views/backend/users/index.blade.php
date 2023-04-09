@extends('layouts/blayout')
@section('title', 'Utilisateurs')
{{-- We use the above because we take it from CategoryController. We could still use the below line  --}}
{{-- @section('title', 'All Categories') --}}
@section('content')
    <!-- Main Content -->
    <div class="container-fluid">

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    {{-- <h3 class="widget-title">Category List <a href="{{ url('admin/category/create') }}"
                            class="btn btn-primary btn-lg">Add category</a></h3> --}}
                    <div class="table-responsive mb-3">
                        <table id="tableId" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Points</th>
                                    <th>Tel</th>
                                    <th>Created_at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $usr)
                                    <tr>
                                        <td>{{ $usr->id }}</td>
                                        <td>
                                            <img width="100" src="{{ asset('userend/img/avatars') . '/' . $usr->photo }}" alt="">
                                        </td>
                                        <td>{{ $usr->name }}</td>
                                        <td>{{ $usr->email }}</td>
                                        <td>{{ $usr->points }}</td>
                                        <td>{{ $usr->tel }}</td>
                                        <td>{{ $usr->created_at }}</td>
                                        {{-- <td>
                                            <a href="{{ url('admin/category/' . $usr->id . '/edit') }}">Update</a> || <a
                                                onclick="return confirm('Are you sure you want to delete ?')"
                                                href="{{ url('admin/category/' . $usr->id . '/delete') }}">Delete</a>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
    <!-- /Main Content -->
@endsection
