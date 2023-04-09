@extends('layouts/blayout')
@section('title', 'Admin-team')
@section('content')
    <!-- Main Content -->
    <div class="container-fluid">

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Team List <a href="{{ url('admin/team/create') }}"
                            class="btn btn-primary btn-lg">Add Member</a></h3>
                    <div class="table-responsive mb-3">
                        <table id="tableId" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Nom</th>
                                    <th>Rôle</th>
                                    <th>Mail-pro</th>
                                    <th>Bio</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $team)
                                    <tr>
                                        <td>{{ $team->id }}</td>
                                        <td>
                                            <img width="100" src="{{ asset('frontend') . '/assets/img/team/'. $team->photo}}" alt="">
                                        </td>
                                        <td>{{ $team->nom }}</td>
                                        <td>{{ $team->role }}</td>
                                        <td>{{ $team->email }}</td>
                                        <td>{{ $team->bio }}</td>
                                        <td>
                                            <a href="{{ url('admin/team/' . $team->id . '/edit') }}">Update</a> || <a
                                                onclick="return confirm('Are you sure you want to delete ?')"
                                                href="{{ url('admin/team/' . $team->id . '/delete') }}">Delete</a>
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
