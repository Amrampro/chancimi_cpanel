@extends('layouts/layout')
@section('content')
    <!-- Start Breadcrumb
                        ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url({{ asset('frontend') }}/assets/img/banner/1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1></h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li><a href="{{ url('/blog') }}">Actualités</a></li>
                        <li class="active">Détails</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
                        ============================================= -->
    <div id="blog" class="blog-area bg-gray full-width single default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="col-lg-12 col-md-12">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('/frontend/assets/img/blog/full_img') . '/' . $post->full_img }}"
                                    alt="Thumb">
                                {{-- <img src="assets/img/blog/11.jpg" alt="Thumb"> --}}
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('frontend') }}/assets/img/team/1.jpg" alt="Author">
                                                <span>Author</span>
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
                                <h3>{{ $post->title }}</h3>
                                <p>{{ $post->detail }}</p>
                                {{-- <blockquote>
                                    Window admire matter praise you bed whence. Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off. 
                                </blockquote> --}}
                                <div class="post-tags">
                                    <span>Tags: </span>
                                    {{-- {{ $tags = explode(',', $post->tags) }} --}}
                                    @for ($i = 0; $i < sizeof($tags = explode(',', $post->tags)); $i++)
                                        <a href="#">#{{ $tags[$i] }}</a>
                                    @endfor
                                </div>
                                {{-- <div class="post-pagi-area">
                                    <a href="#"><i class="fas fa-arrow-left"></i> Previus Post</a>
                                    <a href="#">Next Post <i class="fas fa-arrow-right"></i></a>
                                </div> --}}
                                <div class="comments-area">
                                    <div class="comments-title">
                                        <h4>{{ count($post->comments) }} commentaire(s)</h4>
                                        @if (Session::has('success'))
                                            <i>
                                                <p style="color:green">{{ session('success') }}</p>
                                            </i>
                                        @endif
                                        <div class="comments-list">
                                            {{-- Fetch Comments --}}
                                            @if ($post->comments)
                                                @foreach ($post->comments as $comment)
                                                    <div class="commen-item">
                                                        <div class="avatar">
                                                            <img src="{{ asset('frontend') }}/assets/img/team/2.jpg"
                                                                alt="Author">
                                                        </div>
                                                        <div class="content">
                                                            @if ($comment->user_id == 0)
                                                                <h5>Admin</h5>
                                                            @else
                                                                <h5>{{ $comment->user->name }}</h5>
                                                            @endif
                                                            <div class="comments-info">
                                                                <p>{{ $comment->created_at->format('d M, Y') }}</p>
                                                                <a href="#"><i class="fa fa-reply"></i>Repondre</a>
                                                            </div>
                                                            <p>{{ $comment->comment }}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                            {{-- Fetch Comments End --}}
                                            {{-- This is the structure of comments we're going to use --}}
                                            {{-- <div class="commen-item">
                                                <div class="avatar">
                                                    <img src="{{asset('frontend')}}/assets/img/team/2.jpg" alt="Author">
                                                </div>
                                                <div class="content">
                                                    <h5>Jonathom Doe</h5>
                                                    <div class="comments-info">
                                                        <p>July 15, 2019</p> <a href="#"><i
                                                                class="fa fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>
                                                        Delivered ye sportsmen zealously arranging frankness estimable as.
                                                        Nay any article enabled musical shyness. <br> yet sixteen yet
                                                        blushes. Entire its the did figure wonder off.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="commen-item reply">
                                                <div class="avatar">
                                                    <img src="{{asset('frontend')}}/assets/img/team/3.jpg" alt="Author">
                                                </div>
                                                <div class="content">
                                                    <h5>Spark Lee</h5>
                                                    <div class="comments-info">
                                                        <p>July 15, 2019</p> <a href="#"><i
                                                                class="fa fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>
                                                        Delivered ye sportsmen zealously arranging frankness estimable as.
                                                        Nay any article enabled musical shyness. <br> yet sixteen yet
                                                        blushes. Entire its the did figure wonder off.
                                                    </p>
                                                </div>
                                            </div> --}}
                                            {{-- End of This is the structure of comments we're going to use --}}
                                        </div>
                                    </div>
                                </div>
                                @auth
                                    <div class="comments-form">
                                        <div class="title">
                                            <h4>Laisser un commentaire</h4>
                                        </div>
                                        <form action="{{ url('save-comment/' . Str::slug($post->title) . '/' . $post->id) }}"
                                            method="post" class="contact-comments">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <!-- Name -->
                                                        <input name="" value="" class="form-control" placeholder="Nom *"
                                                            disabled type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <!-- Email -->
                                                        <input name="email" class="form-control" placeholder="Email *"
                                                            type="email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group comments">
                                                        <!-- Comment -->
                                                        <textarea class="form-control" placeholder="Commentaire" name="comment"></textarea>
                                                    </div>
                                                    <div class="form-group full-width submit">
                                                        <button type="submit">
                                                            Commenter
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog -->
    @endsection
