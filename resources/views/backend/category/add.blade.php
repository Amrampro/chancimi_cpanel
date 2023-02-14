@extends('layouts/blayout')
@section('content')
    <!-- Main Content -->
    <div class="container-fluid">

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Add Category <a href="{{ url('admin/category') }}"
                            class="btn btn-primary btn-lg">View all categories</a></h3>
                    @if ($errors)
                        @foreach ($errors as $error)
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{ $error }}</strong> You should check in on some of those fields below.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        @endforeach
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <span class="text-success"></span>
                    @endif
                    <form method="post" action="{{ url('admin/category') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="patient-name">Title</label>
                                <input type="text" placeholder="title" name="title" class="form-control" />
                            </div>
                            <div class="form-group col-md-12">
                                <label for="doctor-name">Detail</label>
                                <textarea class="form-control" name="detail" id="" cols="30" rows="5"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" name="cat_image" id="" />
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
    <!-- /Main Content -->
@endsection
