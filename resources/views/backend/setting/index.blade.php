@extends('layouts/blayout')
@section('content')
    <!-- Main Content -->
    <div class="container-fluid">

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Manage settings </h3>
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
                    <form method="post" action="{{ url('admin/setting') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="patient-name">Comment Auto approve</label>
                                <input @if ($setting) value="{{$setting->comment_auto}}" @endif type="text" placeholder=" " name="comment_auto" class="form-control" />
                            </div>
                            <div class="form-group col-md-12">
                                <label for="doctor-name">User auto approve</label>
                                <input @if ($setting) value="{{$setting->user_auto}}" @endif type="text" placeholder=" " name="user_auto" class="form-control" />
                            </div>
                            <div class="form-group col-md-12">
                                <label for="doctor-name">Recent post limit</label>
                                <input @if ($setting) value="{{$setting->recent_limit}}" @endif type="text" placeholder=" " name="recent_limit" class="form-control" />
                            </div>
                            <div class="form-group col-md-12">
                                <label for="doctor-name">Popular post limit</label>
                                <input @if ($setting) value="{{$setting->popular_limit}}" @endif type="text" placeholder=" " name="popular_limit" class="form-control" />
                            </div>
                            <div class="form-group col-md-12">
                                <label for="doctor-name">Recent comments limit</label>
                                <input @if ($setting) value="{{$setting->recent_comment_limit}}" @endif type="text" placeholder=" " name="recent_comment_limit" class="form-control" />
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
