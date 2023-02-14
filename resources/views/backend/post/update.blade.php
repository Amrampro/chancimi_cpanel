@extends('layouts/blayout')
@section('content')
    <!-- Main Content -->
    <div class="container-fluid">

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Update Post <a href="{{ url('admin/post') }}" class="btn btn-primary btn-lg">View
                            Posts</a></h3>
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
                    <form method="post" action="{{ url('admin/post/' . $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="patient-name">Category</label>
                                <select name="category" class="form-control" id="">
                                    @foreach ($category as $cat)
                                        {{-- selecting the current category --}}
                                        @if ($cat->id == $data->cat_id)
                                            <option selected value="{{ $cat->id }}">{{ $cat->title }}</option>
                                        @else
                                            <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="patient-name">Title</label>
                                <input type="text" placeholder="title" value="{{ $data->title }}" name="title"
                                    class="form-control" />
                            </div>
                            <div class="form-group col-md-12">
                                <label for="doctor-name">Detail</label>
                                <textarea class="form-control" value="" name="detail" id="" cols="30" rows="5">{{ $data->detail }}</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="doctor-name">Tags</label>
                                <textarea class="form-control" value="" name="tags" id="" cols="30" rows="5">{{ $data->tags }}</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="image">Thumb</label>
                                <p class="my-2"><img width="100" src="{{ asset('/frontend/assets/img/blog/thumb') . '/' . $data->thumb }}"
                                        alt=""></p>
                                <input type="hidden" name="post_thumb" value="{{ $data->thumb }}" />
                                <input type="file" class="form-control" name="post_thumb" id="" />
                            </div>
                            <div class="form-group col-md-12">
                                <label for="image">Full Image</label>
                                <p class="my-2"><img width="100" src="{{ asset('/frontend/assets/img/blog/full_img') . '/' . $data->full_img }}"
                                        alt=""></p>
                                <input type="hidden" name="post_image" value="{{ $data->full_img }}" />
                                <input type="file" class="form-control" name="post_image" id="" />
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
