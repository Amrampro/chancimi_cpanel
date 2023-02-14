@extends('layouts/layout')
@section('content')
    <!-- Start Breadcrumb
            ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url({{ asset('frontend') }}/assets/img/banner/1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Nos Actualités</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li class="active">Actualités</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
            ============================================= -->
    <div class="blog-area full-width bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    @foreach ($posts as $post)
                        <!-- Single Item -->
                        <div class="col-lg-4 col-md-4 col-sm-6 equal-height">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{ url('detail/'.Str::slug($post->title).'/'.$post->id) }}"><img
                                            src="{{ asset('/frontend/assets/img/blog/thumb') . '/' . $post->thumb }}"
                                            alt="Thumb"></a>
                                </div>
                                <div class="info">
                                    <div class="content">
                                        <div class="date">
                                            {{ $post->created_at->format('d M, Y') }}
                                            {{-- 15 Aug, 2019 --}}
                                        </div>
                                        <h4>
                                            <a
                                                href="{{ url('detail/'.Str::slug($post->title).'/'.$post->id) }}">{{ implode(' ', array_slice(explode(' ', $post->title), 0, 4)) }}...</a>
                                        </h4>
                                        <p>
                                            {{ implode(' ', array_slice(explode(' ', $post->detail), 0, 10)) }}...
                                        </p>
                                        <a href="{{ url('detail/'.Str::slug($post->title).'/'.$post->id) }}">Lire Plus <i
                                                class="fas fa-angle-right"></i></a>
                                    </div>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('frontend') }}/assets/img/team/1.jpg"
                                                        alt="Author">
                                                    <span>Admin</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-comments"></i>
                                                    <span>05</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-share-alt"></i>
                                                    <span>37</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    @endforeach
                    {{ $posts->links('partials/my-paginate') }}
                    {{-- <div class="col-lg-12 col-md-12 pagi-area">
                        <nav aria-label="navigation">
                            <ul class="pagination">
                                <li><a href="#">Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
