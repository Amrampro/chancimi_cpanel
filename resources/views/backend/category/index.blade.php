@extends('layouts/blayout')
@section('title', $pageTitle)
{{-- We use the above because we take it from CategoryController. We could still use the below line  --}}
{{-- @section('title', 'All Categories') --}}
@section('content')
    <!-- Main Content -->
    <div class="container-fluid">

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Category List <a href="{{ url('admin/category/create') }}"
                            class="btn btn-primary btn-lg">Add category</a></h3>
                    <div class="table-responsive mb-3">
                        <table id="tableId" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Cat ID</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>last modif</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $cat)
                                    <tr>
                                        <td>{{ $cat->id }}</td>
                                        <td>{{ $cat->title }}</td>
                                        <td>
                                            <img width="100" src="{{ asset('imgs') . '/' . $cat->image }}" alt="">
                                        </td>
                                        <td>{{ $cat->updated_at }}</td>
                                        <td>
                                            <a href="{{ url('admin/category/' . $cat->id . '/edit') }}">Update</a> || <a
                                                onclick="return confirm('Are you sure you want to delete ?')"
                                                href="{{ url('admin/category/' . $cat->id . '/delete') }}">Delete</a>
                                        </td>
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
