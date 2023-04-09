@extends('layouts/layout')
@section('content')
    <div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
        <div class="container eduvibe-animated-shape">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-start">
                        <div class="page-title">
                            <h3 class="title">Détails du blog</h3>
                        </div>
                        <nav class="edu-breadcrumb-nav">
                            <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                                <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                                <li class="breadcrumb-item active" aria-current="page">Détails du blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="{{ asset('frontend') }}/assets/images/shapes/shape-11-07.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="{{ asset('frontend') }}/assets/images/shapes/shape-01-02.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="{{ asset('frontend') }}/assets/images/shapes/shape-03.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-4">
                        <img src="{{ asset('frontend') }}/assets/images/shapes/shape-13-12.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-5">
                        <img src="{{ asset('frontend') }}/assets/images/shapes/shape-36.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-6">
                        <img src="{{ asset('frontend') }}/assets/images/shapes/shape-05-07.png" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="edu-blog-details-area edu-section-gap bg-color-white">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-10 offset-lg-1">
                    <div class="blog-details-1 style-variation3">

                        <div class="content-blog-top">

                            <div
                                class="content-status-top d-flex flex-wrap justify-content-between mb--30 align-items-center">
                                <div class="status-group mt_sm--10">
                                    <a href="#" class="eduvibe-status status-05 color-primary w-600">CATEGORY</a>
                                </div>
                                <ul class="blog-meta mt_sm--10">
                                    <li><img src="{{ asset('frontend') }}/assets/images/blog/author/author-small/author.png"
                                            alt="Blog Images">
                                        Suanora Leoti</li>
                                    <li><i class="icon-calendar-2-line"></i>{{ $post->created_at->format('d M, Y') }}</li>
                                    <li><i class="icon-discuss-line"></i>{{ count($post->comments) }} commentaire(s)</li>
                                    {{-- <li><i class="icon-time-line"></i>4 min read</li> --}}
                                    <li><i class="icon-eye-line"></i>37</li>
                                </ul>
                            </div>

                            <h4 class="title">{{ $post->title }}</h4>

                            <div class="thumbnail block-alignwide">
                                <img class="radius-small w-100 mb--30"
                                    src="{{ asset('/frontend/assets/img/blog/full_img') . '/' . $post->full_img }}"
                                    alt="Blog Images">
                            </div>
                        </div>

                        <div class="blog-main-content">
                            {{-- {{ $post->detail }} --}}
                            {!! $post->detail !!}
                        </div>

                        <div class="blog-tag-and-share mt--50">
                            <div class="blog-tag">
                                <div class="tag-list bg-shade">
                                    @for ($i = 0; $i < sizeof($tags = explode(',', $post->tags)); $i++)
                                        <a href="#">#{{ $tags[$i] }}</a>
                                    @endfor
                                </div>
                            </div>
                            <div class="blog-share">
                                <div class="blog-share">
                                    <div class="eduvibe-post-share">
                                        <span>Partager sur: </span>
                                        {{-- <a class="linkedin" href="#"><i class="icon-linkedin"></i></a> --}}
                                        <a class="facebook" href="https://www.facebook.com/sharer.php?u={{ url('detail/' . Str::slug($post->title) . '/' . $post->id) }}" target="_blanc"><i class="icon-Fb"></i></a>
                                        <a class="twitter" href="https://www.twitter.com/share?text&url={{ url('detail/' . Str::slug($post->title) . '/' . $post->id) }}/&hashtags=#PHP" target="_blanc"><i class="icon-Twitter"></i></a>
                                        {{-- <a class="youtube" href="https://api.whatsapp.com/send?phone=&text=<?php urlencode('Link: ') ?> {{ url('detail/' . Str::slug($post->title) . '/' . $post->id) }}" target="_blanc"><i class="icon-youtube"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="blog-author-wrapper">
                                <div class="thumbnail">
                                    <img src="{{ asset('frontend') }}/assets/images/blog/author/author-medium/author-02.jpg"
                                        alt="Author Images">
                                </div>
                                <div class="author-content">
                                    <h6 class="title">John Smith</h6>
                                    <p>Jhon Smith is an author, blogger, and designer living in a suburb of Washington, DC. When
                                        she’s not designing, blogging, or writing, Owen can be found with her head in a book or
                                        pinning like a madman.</p>
                                    <ul class="social-share icon-transparent">
                                        <li><a href="#"><i class="icon-Fb"></i></a></li>
                                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                        <li><a href="#"><i class="icon-Pinterest"></i></a></li>
                                        <li><a href="#"><i class="icon-Twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div> --}}

                        <!-- Start Comment Area  -->
                        <div class="edu-comment-area mt--50">
                            <h5 class="blog-page-title">{{ count($post->comments) }} commentaire(s)</h5>
                            <div class="comment-list-wrapper mt--40">
                                @if ($post->comments)
                                    <!-- Start Single Comment  -->
                                    @foreach ($post->comments as $comment)
                                        <div class="comment">
                                            <div class="thumbnail">
                                                <img src="{{ asset('userend') }}/img/avatars/{{ $comment->user->photo }}"
                                                    alt="Comment Images">
                                            </div>
                                            <div class="comment-content">
                                                <h6 class="title">
                                                    @if ($comment->user_id == 0)
                                                        <h5>Admin</h5>
                                                    @else
                                                        <h5>{{ $comment->user->name }}</h5>
                                                    @endif
                                                </h6>
                                                <span class="date">{{ $comment->created_at->format('d M, Y') }}</span>
                                                <p>{{ $comment->comment }}</p>
                                                <div class="reply-btn-wrapper">
                                                    <a class="reply-btn" href="#"><i class="icon-reply-all-fill"></i>
                                                        Répondre</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- End Single Comment  -->
                                @endif
                            </div>
                        </div>
                        <!-- End Comment Area  -->


                        <!-- Start Comment Form  -->
                        @auth
                            <div class="edu-comment-form mt--50">
                                <div class="comment-form-top">
                                    <h5 class="blog-page-title">Envoyer un nouveau commentaire</h5>
                                </div>
                                <form class="comment-form-style-1"
                                    action="{{ url('save-comment/' . Str::slug($post->title) . '/' . $post->id) }}"
                                    method="post">
                                    @csrf
                                    <p class="comment-note">Les champs marqué * sont obligatoire</p>
                                    <div class="row g-5">
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <input type="text" placeholder="Name*" name="name"
                                                    value="{{ auth()->user()->name }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <input type="text" placeholder="Email*" name="email"
                                                    value="{{ auth()->user()->email }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <textarea placeholder="Your comment" name="comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="comment-btn">
                                                <button class="edu-btn" type="submit">Commenter <i
                                                        class="icon-arrow-right-line-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @endif
                            <!-- End Comment Form  -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
