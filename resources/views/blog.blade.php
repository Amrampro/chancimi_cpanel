@extends('layouts/layout')
@section('content')
    <div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
        <div class="container eduvibe-animated-shape">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-start">
                        <div class="page-title">
                            <h3 class="title">Actualités</h3>
                        </div>
                        <nav class="edu-breadcrumb-nav">
                            <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
                                <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="{{asset('frontend')}}/assets/images/shapes/shape-11-07.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="{{asset('frontend')}}/assets/images/shapes/shape-01-02.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="{{asset('frontend')}}/assets/images/shapes/shape-03.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-4">
                        <img src="{{asset('frontend')}}/assets/images/shapes/shape-13-12.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-5">
                        <img src="{{asset('frontend')}}/assets/images/shapes/shape-36.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-6">
                        <img src="{{asset('frontend')}}/assets/images/shapes/shape-05-07.png" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="edu-elements-area edu-section-gap bg-color-white">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <!-- Start Blog Grid  -->
                        @foreach ($posts as $post)
                            <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                data-sal-duration="800">
                                <div class="edu-blog blog-type-2 radius-small">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="{{ url('detail/' . Str::slug($post->title) . '/' . $post->id) }}">
                                                <img src="{{ asset('/frontend/assets/img/blog/thumb') . '/' . $post->thumb }}"
                                                    alt="Blog Images">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <div class="status-group">
                                                <a href="#" class="eduvibe-status status-05"><i
                                                        class="icon-price-tag-3-line"></i> Education</a>
                                            </div>
                                            <h5 class="title"><a
                                                    href="{{ url('detail/' . Str::slug($post->title) . '/' . $post->id) }}">{{ $post->title }}</a>
                                            </h5>
                                            <div class="blog-card-bottom">
                                                <ul class="blog-meta">
                                                    <li><i
                                                            class="icon-calendar-2-line"></i>{{ $post->created_at->format('d M, Y') }}
                                                    </li>
                                                </ul>
                                                <div class="read-more-btn">
                                                    <a class="btn-transparent"
                                                        href="{{ url('detail/' . Str::slug($post->title) . '/' . $post->id) }}">Lire
                                                        plus<i class="icon-arrow-right-line-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- End Blog Grid  -->
                    </div>
                    {{ $posts->links('partials/my-paginate') }}
                </div>
            </div>
        </div>
    </div>
@endsection
