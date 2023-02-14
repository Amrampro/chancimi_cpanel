@extends('layouts/blayout')
@section('title', 'All Posts')
@section('content')
    <!-- Main Content -->
    <div class="container-fluid">

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Patient Payment Transactions</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>By</th>
                                    <th>Thumb</th>
                                    <th>Full image</th>
                                    <th>created at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->user_id}}</td>
                                    <td>
                                        <img width="50" src="{{asset('/frontend/assets/img/blog/thumb').'/'.$post->thumb}}" alt="">
                                    </td>
                                    <td>
                                        <img width="50" src="{{asset('/frontend/assets/img/blog/full_img').'/'.$post->full_img}}" alt="">
                                    </td>
                                    <td>{{$post->created_at}}</td>
                                    <td>
                                        <a href="{{url('admin/post/' . $post->id . '/edit')}}">Update</a> || 
                                        <a onclick="return confirm('Are you sure you wanr to delete ?')" href="{{url('admin/post/' . $post->id . '/delete')}}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!--Export links-->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center export-pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="ti-download"></span> csv</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- /Export links-->
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
    <!-- /Main Content -->
@endsection
