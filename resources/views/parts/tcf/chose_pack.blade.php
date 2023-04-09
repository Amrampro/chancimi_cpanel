@extends('layouts/layout')
@section('content')
    <div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
        <div class="container eduvibe-animated-shape">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-start">
                        <div class="page-title">
                            <h3 class="title">Choix d'un pack</h3>
                        </div>
                        <nav class="edu-breadcrumb-nav">
                            <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                                <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                                <li class="breadcrumb-item active" aria-current="page">Packs</li>
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

    <div class="edu-pricing-area eduvibe-pricing-plan-page edu-section-gap bg-image bg-image--26">
        <div class="container eduvibe-animated-shape">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Grille tarifaire</span>
                        <h3 class="title">Choisir un pack "{{ $exam->name }}"</h3>
                    </div>
                </div>
            </div>

            <div class="row g-5 mt--20">
                @foreach ($packs as $pack)
                    <!-- Start Pricing Table  -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="pricing-table">
                            <div class="pricing-header">
                                <h3 class="title">{{ $pack->type }}</h3>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">{{ $pack->price }}</span>
                                        <span class="duration">/FCFA</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-item">
                                    @for ($i = 0; $i < sizeof($tags = explode(',', $pack->features)); $i++)
                                        <li><i class="icon-checkbox-circle-line"></i> {{ $tags[$i] }}</li>
                                    @endfor
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a class="edu-btn btn-dark" href="{{ url('pack/' . Str::slug($pack->type) . '/' . $pack->id . '/' . $exam->id) }}">Choisir ce plan<i
                                        class="icon-arrow-right-line-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pricing Table  -->
                @endforeach
            </div>
        </div>
    </div>
@endsection
