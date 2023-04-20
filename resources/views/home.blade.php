@extends('layouts/layout')
@section('content')
    <!-- Start Sldier Area  -->
    <div class="slider-area banner-style-2 bg-image d-flex align-items-center">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="inner">
                        <div class="content">
                            <span class="pre-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                Chancimi Travel Agency</span>
                            <h1 class="title" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                                Procedure Canadienne facile et Rapide
                            </h1>
                            <p class="description" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                Nous vous fournissons tout le nessessaire: cours, epreuve, service
                                pour assurer le bon déroulement de votre procédue d'immigration au Canada.</p>
                            <div class="read-more-btn" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                                <a class="edu-btn" href="#">Commencer aujourd'hui <i
                                        class="icon-arrow-right-line-right"></i></a>
                            </div>
                            <div class="arrow-sign d-lg-block d-none">
                                <img src="{{ asset('frontend') }}/assets/images/banner/banner-02/arrow.png"
                                    alt="Banner Images" data-sal-delay="150" data-sal="fade" data-sal-duration="800">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="banner-thumbnail">
                        <img class="girl-thumb" src="{{ asset('frontend') }}/assets/images/banner/banner-02/banner-02.png"
                            alt="Girl Images" data-sal-delay="150" data-sal="fade" data-sal-duration="800" />
                    </div>
                    <div class="banner-bg d-lg-block d-none">
                        <img class="girl-bg" src="{{ asset('frontend') }}/assets/images/banner/banner-02/girl-bg.png"
                            alt="Girl Background" data-sal-delay="150" data-sal="fade" data-sal-duration="800" />
                    </div>
                </div>
            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-19.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-05-01.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-3">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-19-01.png" alt="Shape Thumb" />
                </div>
            </div>
        </div>
    </div>
    <!-- End Sldier Area  -->

    <div class="sercice-area eduvibe-service-four edu-section-gap bg-color-white">
        <div class="container eduvibe-animated-shape">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Nos Examens</span>
                        <h3 class="title">Les examens importants à passer</h3>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--25">
                @foreach ($exams as $exam)
                    <!-- Start Service Grid  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="service-card service-card-4">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icon-student-read"></i>
                                    <span class="subtitle">27 epreuves</span>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="{{ url('/pack' . '/' . $exam->id . '/chose') }}">{{$exam->name}}</a></h6>
                                    <p class="description">{{$exam->meaning}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->
                @endforeach

            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-11-02.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-02-03.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-3">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-20.png" alt="Shape Thumb" />
                </div>
            </div>

        </div>
    </div>
    <div class="edu-about-area about-style-3 edu-section-gap bg-image">
        <div class="container eduvibe-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 pr--80">
                    <div class="gappery-wrapper" data-sal-delay="200" data-sal="fade" data-sal-duration="800">
                        <div class="row g-5 align-items-end">
                            <div class="col-lg-5 col-md-6">
                                <div class="gallery-image mt--85">
                                    <img class="w-100"
                                        src="{{ asset('frontend') }}/assets/images/about/about-04/gallery-1.jpg"
                                        alt="Gallery Images">
                                    <div class="icon-badge">
                                        <i class="icon-ribbon"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-6">
                                <div class="gallery-image">
                                    <img class="w-100"
                                        src="{{ asset('frontend') }}/assets/images/about/about-04/gallery-2.jpg"
                                        alt="Gallery Images">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="gallery-image gallery-image-3 text-center">
                                    <img src="{{ asset('frontend') }}/assets/images/about/about-04/gallery-3.jpg"
                                        alt="Gallery Images">
                                    <div class="student-like-status bounce-slide">
                                        <div class="inner">
                                            <div class="icon">
                                                <i class="icon-Smile"></i>
                                            </div>
                                            <div class="content">
                                                <h6 class="title">100+</h6>
                                                <span class="subtitle">Utilisateurs au Total</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner">
                        <div class="section-title text-start" data-sal-delay="200" data-sal="slide-up"
                            data-sal-duration="800">
                            <span class="pre-title">A propos</span>
                            <h3 class="title">Les meuilleurs préparations sont chez nous !</h3>

                        </div>
                        <p class="description mt--40" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                            nunc null liobortis nibh porttitor. Facilisi arcu, nibh vel risus, morbi pharetra.
                            Facilisi sit miam mauris non iaculis elit fusce amet nunc in odio molestie.</p>
                        <div class="feature-style-5 row g-5">
                            <div class="col-lg-12 col-xl-6" data-sal-delay="200" data-sal="slide-up"
                                data-sal-duration="800">
                                <div class="edu-feature-list">
                                    <div class="icon">
                                        <i class="icon-Board"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Supports à porté de main</h6>
                                        <p class="description">
                                            Vous avez différents types d'épreuves des procédures précédentes que vous
                                            retrouvez et pouvez composer chez nous.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6" data-sal-delay="200" data-sal="slide-up"
                                data-sal-duration="800">
                                <div class="edu-feature-list">
                                    <div class="icon">
                                        <i class="icon-Bag"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Assistance de l'éducateur</h6>
                                        <p class="description">
                                            Nous offrons de différents types de services rendrons
                                            votre procédure plus facile.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="read-more-btn mt--60 mt_lg--30 mt_md--30 mt_sm--30" data-sal-delay="200"
                            data-sal="slide-up" data-sal-duration="800">
                            <a class="edu-btn" href="about-us-1.html">En savoir plus <i
                                    class="icon-arrow-right-line-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-21.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-13-04.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-3">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-03-05.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-4">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-15-02.png" alt="Shape Thumb" />
                </div>
            </div>

        </div>
    </div>

    <div class="edu-course-area eduvibe-home-two-course course-three-wrapper edu-section-gap bg-color-white">
        <div class="container eduvibe-animated-shape">
            <div class="row g-5 align-items-center mb--30">
                <div class="col-lg-6">
                    <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <span class="pre-title">Who We Are</span>
                        <h3 class="title">We Offer The Best Carrier</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div
                        class="button-group isotop-filter filters-button-group d-flex justify-content-start justify-content-lg-end">
                        <button data-filter="*" class="is-checked"><span class="filter-text">All</span></button>
                        <button data-filter=".cat--1"><span class="filter-text">Trending</span></button>
                        <button data-filter=".cat--2"><span class="filter-text">Popularity</span></button>
                        <button data-filter=".cat--3"><span class="filter-text">Featured</span></button>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-12">
                    <div class="grid-metro3 mesonry-list">
                        <div class="resizer"></div>
                        <!-- Start Single Card  -->
                        <div class="grid-metro-item cat--1 cat--3">
                            <div class="edu-card card-type-3 radius-small">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="course-details.html">
                                            <img class="w-100"
                                                src="{{ asset('frontend') }}/assets/images/course/course-01/course-01.jpg"
                                                alt="Course Meta">
                                        </a>
                                        <div class="wishlist-top-right">
                                            <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                        </div>
                                        <div class="top-position status-group left-bottom">
                                            <span class="eduvibe-status status-03">Language Learning</span>
                                        </div>
                                    </div>

                                    <div class="content">
                                        <div class="card-top">
                                            <div class="author-meta">
                                                <div class="author-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/assets/images/instructor/instructor-small/instructor-1.jpg"
                                                            alt="Author Images">
                                                        <span class="author-title">James Carlson</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="edu-meta meta-02">
                                                <li><i class="icon-file-list-3-line"></i>45 Lessons</li>
                                            </ul>
                                        </div>
                                        <h6 class="title"><a href="course-details.html">Master Native English
                                                Class This Speaking Skills</a>
                                        </h6>
                                        <div class="card-bottom">
                                            <div class="price-list price-style-02">
                                                <div class="price current-price">$55.99</div>
                                                <div class="price old-price">$65.99</div>
                                            </div>
                                            <div class="edu-rating rating-default">
                                                <div class="rating">
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                </div>
                                                <span class="rating-count">(30)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-hover-action">
                                    <div class="hover-content">
                                        <div class="content-top">
                                            <div class="top-status-bar">
                                                <span class="eduvibe-status status-03">Language
                                                    Learning</span>
                                            </div>
                                            <div class="top-wishlist-bar">
                                                <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                            </div>
                                        </div>
                                        <h6 class="title"><a href="course-details.html">Master Native English
                                                Class This Speaking Skills</a></h6>

                                        <p class="description">There are many variations of passages of
                                            Lorem Ipsaums available, but the majority have suffered
                                            alteration. generators on the Internet tend to repeat.</p>

                                        <div class="price-list price-style-02">
                                            <div class="price current-price">$55.99</div>
                                            <div class="price old-price">$69.99</div>
                                        </div>

                                        <div class="hover-bottom-content">
                                            <div class="author-meta">
                                                <div class="author-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/assets/images/instructor/instructor-small/instructor-1.jpg"
                                                            alt="Author Images">
                                                        <span class="author-title">James Carlson</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="edu-meta meta-02">
                                                <li><i class="icon-file-list-3-line"></i>45 Lessons</li>
                                            </ul>
                                        </div>


                                        <div class="read-more-btn">
                                            <a class="edu-btn btn-medium btn-white" href="course-details.html">Enroll
                                                Now<i class="icon-arrow-right-line-right"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="grid-metro-item cat--1 cat--2">
                            <div class="edu-card card-type-3 radius-small">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="course-details.html">
                                            <img class="w-100"
                                                src="{{ asset('frontend') }}/assets/images/course/course-01/course-02.jpg"
                                                alt="Course Meta">
                                        </a>
                                        <div class="wishlist-top-right">
                                            <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                        </div>
                                        <div class="top-position status-group left-bottom">
                                            <span class="eduvibe-status status-03">Marketing</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="card-top">
                                            <div class="author-meta">
                                                <div class="author-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/assets/images/instructor/instructor-small/instructor-3.jpg"
                                                            alt="Author Images">
                                                        <span class="author-title">Nancy Phipps</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="edu-meta meta-02">
                                                <li><i class="icon-file-list-3-line"></i>40 Lessons</li>
                                            </ul>
                                        </div>
                                        <h6 class="title"><a href="course-details.html">The Basic Of Financial
                                                Analyst Online
                                                Course</a>
                                        </h6>
                                        <div class="card-bottom">
                                            <div class="price-list price-style-02">
                                                <div class="price current-price">$39.99</div>
                                                <div class="price old-price">$49.99</div>
                                            </div>
                                            <div class="edu-rating rating-default">
                                                <div class="rating">
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                </div>
                                                <span class="rating-count">(10)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-hover-action">
                                    <div class="hover-content">
                                        <div class="content-top">
                                            <div class="top-status-bar">
                                                <span class="eduvibe-status status-03">Marketing</span>
                                            </div>
                                            <div class="top-wishlist-bar">
                                                <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                            </div>
                                        </div>

                                        <h6 class="title"><a href="course-details.html">The Basic Of Financial
                                                Analyst Online
                                                Course</a></h6>

                                        <p class="description">There are many variations of passages of
                                            Lorem Ipsaums available, but the majority have suffered
                                            alteration. generators on the Internet tend to repeat.</p>

                                        <div class="price-list price-style-02">
                                            <div class="price current-price">$39.99</div>
                                            <div class="price old-price">$49.99</div>
                                        </div>

                                        <div class="hover-bottom-content">
                                            <div class="author-meta">
                                                <div class="author-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/assets/images/instructor/instructor-small/instructor-3.jpg"
                                                            alt="Author Images">
                                                        <span class="author-title">Nancy Phipps</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="edu-meta meta-02">
                                                <li><i class="icon-file-list-3-line"></i>40 Lessons</li>
                                            </ul>
                                        </div>
                                        <div class="read-more-btn">
                                            <a class="edu-btn btn-medium btn-white" href="course-details.html">Enroll
                                                Now<i class="icon-arrow-right-line-right"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="grid-metro-item cat--3">
                            <div class="edu-card card-type-3 radius-small">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="course-details.html">
                                            <img class="w-100"
                                                src="{{ asset('frontend') }}/assets/images/course/course-01/course-03.jpg"
                                                alt="Course Meta">
                                        </a>
                                        <div class="wishlist-top-right">
                                            <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                        </div>
                                        <div class="top-position status-group left-bottom">
                                            <span class="eduvibe-status status-03">Graphics Design</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="card-top">
                                            <div class="author-meta">
                                                <div class="author-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/assets/images/instructor/instructor-small/instructor-6.jpg"
                                                            alt="Author Images">
                                                        <span class="author-title">Linda Bacote</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="edu-meta meta-02">
                                                <li><i class="icon-file-list-3-line"></i>18 Lessons</li>
                                            </ul>
                                        </div>
                                        <h6 class="title"><a href="course-details.html">Introduction to
                                                Javascript for The
                                                Beginners</a>
                                        </h6>
                                        <div class="card-bottom">
                                            <div class="price-list price-style-02">
                                                <div class="price current-price">$89.99</div>
                                                <div class="price old-price">$99.99</div>
                                            </div>
                                            <div class="edu-rating rating-default">
                                                <div class="rating">
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                </div>
                                                <span class="rating-count">(20)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-hover-action">
                                    <div class="hover-content">
                                        <div class="content-top">
                                            <div class="top-status-bar">
                                                <span class="eduvibe-status status-03">Marketing</span>
                                            </div>
                                            <div class="top-wishlist-bar">
                                                <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                            </div>
                                        </div>

                                        <h6 class="title"><a href="course-details.html">Introduction to
                                                Javascript for The
                                                Beginners</a></h6>

                                        <p class="description">There are many variations of passages of
                                            Lorem Ipsaums available, but the majority have suffered
                                            alteration. generators on the Internet tend to repeat.</p>

                                        <div class="price-list price-style-02">
                                            <div class="price current-price">$89.99</div>
                                            <div class="price old-price">$99.99</div>
                                        </div>

                                        <div class="hover-bottom-content">
                                            <div class="author-meta">
                                                <div class="author-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/assets/images/instructor/instructor-small/instructor-6.jpg"
                                                            alt="Author Images">
                                                        <span class="author-title">Linda Bacote</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="edu-meta meta-02">
                                                <li><i class="icon-file-list-3-line"></i>18 Lessons</li>
                                            </ul>
                                        </div>
                                        <div class="read-more-btn">
                                            <a class="edu-btn btn-medium btn-white" href="course-details.html">Enroll
                                                Now<i class="icon-arrow-right-line-right"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="grid-metro-item cat--3">
                            <div class="edu-card card-type-3 radius-small">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="course-details.html">
                                            <img class="w-100"
                                                src="{{ asset('frontend') }}/assets/images/course/course-01/course-04.jpg"
                                                alt="Course Meta">
                                        </a>
                                        <div class="wishlist-top-right">
                                            <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                        </div>
                                        <div class="top-position status-group left-bottom">
                                            <span class="eduvibe-status status-03">Marketing</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="card-top">
                                            <div class="author-meta">
                                                <div class="author-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/assets/images/instructor/instructor-small/instructor-5.jpg"
                                                            alt="Author Images">
                                                        <span class="author-title">Alice McCoy</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="edu-meta meta-02">
                                                <li><i class="icon-file-list-3-line"></i>28 Lessons</li>
                                            </ul>
                                        </div>
                                        <h6 class="title"><a href="course-details.html">Oracle SQL Developer :
                                                Essentials Tips and
                                                Tricks</a>
                                        </h6>
                                        <div class="card-bottom">
                                            <div class="price-list price-style-02">
                                                <div class="price current-price">$79.99</div>
                                                <div class="price old-price">$85.99</div>
                                            </div>
                                            <div class="edu-rating rating-default">
                                                <div class="rating">
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                </div>
                                                <span class="rating-count">(15)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-hover-action">
                                    <div class="hover-content">
                                        <div class="content-top">
                                            <div class="top-status-bar">
                                                <span class="eduvibe-status status-03">Marketing</span>
                                            </div>
                                            <div class="top-wishlist-bar">
                                                <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                            </div>
                                        </div>

                                        <h6 class="title"><a href="course-details.html">Oracle SQL Developer :
                                                Essentials Tips and
                                                Tricks</a></h6>

                                        <p class="description">There are many variations of passages of
                                            Lorem Ipsaums available, but the majority have suffered
                                            alteration. generators on the Internet tend to repeat.</p>

                                        <div class="price-list price-style-02">
                                            <div class="price current-price">$75.99</div>
                                            <div class="price old-price">$85.99</div>
                                        </div>

                                        <div class="hover-bottom-content">
                                            <div class="author-meta">
                                                <div class="author-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/assets/images/instructor/instructor-small/instructor-5.jpg"
                                                            alt="Author Images">
                                                        <span class="author-title">Alice McCoy</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="edu-meta meta-02">
                                                <li><i class="icon-file-list-3-line"></i>28 Lessons</li>
                                            </ul>
                                        </div>
                                        <div class="read-more-btn">
                                            <a class="edu-btn btn-medium btn-white" href="course-details.html">Enroll
                                                Now<i class="icon-arrow-right-line-right"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="grid-metro-item cat--3">
                            <div class="edu-card card-type-3 radius-small">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="course-details.html">
                                            <img class="w-100"
                                                src="{{ asset('frontend') }}/assets/images/course/course-01/course-05.jpg"
                                                alt="Course Meta">
                                        </a>
                                        <div class="wishlist-top-right">
                                            <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                        </div>
                                        <div class="top-position status-group left-bottom">
                                            <span class="eduvibe-status status-03">Web Development</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="card-top">
                                            <div class="author-meta">
                                                <div class="author-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/assets/images/instructor/instructor-small/instructor-1.jpg"
                                                            alt="Author Images">
                                                        <span class="author-title">James Carlson</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="edu-meta meta-02">
                                                <li><i class="icon-file-list-3-line"></i>35 Lessons</li>
                                            </ul>
                                        </div>
                                        <h6 class="title"><a href="course-details.html">Education Makes A Person
                                                A Responsible Citizen</a>
                                        </h6>
                                        <div class="card-bottom">
                                            <div class="price-list price-style-02">
                                                <div class="price current-price">$49.99</div>
                                                <div class="price old-price">$59.99</div>
                                            </div>
                                            <div class="edu-rating rating-default">
                                                <div class="rating">
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                </div>
                                                <span class="rating-count">(40)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-hover-action">
                                    <div class="hover-content">
                                        <div class="content-top">
                                            <div class="top-status-bar">
                                                <span class="eduvibe-status status-03">Web Development</span>
                                            </div>
                                            <div class="top-wishlist-bar">
                                                <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                            </div>
                                        </div>

                                        <h6 class="title"><a href="course-details.html">Education Makes A Person
                                                A Responsible Citizen</a></h6>

                                        <p class="description">There are many variations of passages of
                                            Lorem Ipsaums available, but the majority have suffered
                                            alteration. generators on the Internet tend to repeat.</p>

                                        <div class="price-list price-style-02">
                                            <div class="price current-price">$49.99</div>
                                            <div class="price old-price">$59.99</div>
                                        </div>

                                        <div class="hover-bottom-content">
                                            <div class="author-meta">
                                                <div class="author-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/assets/images/instructor/instructor-small/instructor-1.jpg"
                                                            alt="Author Images">
                                                        <span class="author-title">James Carlson</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="edu-meta meta-02">
                                                <li><i class="icon-file-list-3-line"></i>35 Lessons</li>
                                            </ul>
                                        </div>
                                        <div class="read-more-btn">
                                            <a class="edu-btn btn-medium btn-white" href="course-details.html">Enroll
                                                Now<i class="icon-arrow-right-line-right"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="grid-metro-item cat--3">
                            <div class="edu-card card-type-3 radius-small">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="course-details.html">
                                            <img class="w-100"
                                                src="{{ asset('frontend') }}/assets/images/course/course-01/course-06.jpg"
                                                alt="Course Meta">
                                        </a>
                                        <div class="wishlist-top-right">
                                            <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                        </div>
                                        <div class="top-position status-group left-bottom">
                                            <span class="eduvibe-status status-03">Programming</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="card-top">
                                            <div class="author-meta">
                                                <div class="author-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/assets/images/instructor/instructor-small/instructor-3.jpg"
                                                            alt="Author Images">
                                                        <span class="author-title">Nancy Phipps</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="edu-meta meta-02">
                                                <li><i class="icon-file-list-3-line"></i>16 Lessons</li>
                                            </ul>
                                        </div>
                                        <h6 class="title"><a href="course-details.html">Python Django Web
                                                Development: To-Do
                                                App</a>
                                        </h6>
                                        <div class="card-bottom">
                                            <div class="price-list price-style-02">
                                                <div class="price current-price">$79.99</div>
                                                <div class="price old-price">$89.99</div>
                                            </div>
                                            <div class="edu-rating rating-default">
                                                <div class="rating">
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                </div>
                                                <span class="rating-count">(53)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-hover-action">
                                    <div class="hover-content">
                                        <div class="content-top">
                                            <div class="top-status-bar">
                                                <span class="eduvibe-status status-03">Programming</span>
                                            </div>
                                            <div class="top-wishlist-bar">
                                                <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                            </div>
                                        </div>

                                        <h6 class="title"><a href="course-details.html">Python Django Web
                                                Development: To-Do
                                                App</a></h6>

                                        <p class="description">There are many variations of passages of
                                            Lorem Ipsaums available, but the majority have suffered
                                            alteration. generators on the Internet tend to repeat.</p>

                                        <div class="price-list price-style-02">
                                            <div class="price current-price">$79.99</div>
                                            <div class="price old-price">$89.99</div>
                                        </div>

                                        <div class="hover-bottom-content">
                                            <div class="author-meta">
                                                <div class="author-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/assets/images/instructor/instructor-small/instructor-3.jpg"
                                                            alt="Author Images">
                                                        <span class="author-title">Nancy Phipps</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="edu-meta meta-02">
                                                <li><i class="icon-file-list-3-line"></i>16 Lessons</li>
                                            </ul>
                                        </div>
                                        <div class="read-more-btn">
                                            <a class="edu-btn btn-medium btn-white" href="course-details.html">Enroll
                                                Now<i class="icon-arrow-right-line-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->
                    </div>
                </div>
            </div>

            {{--  <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="video-gallery-wrapper edu-section-gapTop video-section-overlayto-another">
                        <div class="video-gallery-1">
                            <div class="thumbnail video-popup-wrapper">
                                <img class="radius-small w-100"
                                    src="{{ asset('frontend') }}/assets/images/videopopup/video-popup-bg-01.jpg"
                                    alt="Video Images">
                                <a href="https://www.youtube.com/watch?v=pNje3bWz7V8"
                                    class="video-play-btn with-animation position-to-top video-popup-activation btn-secondary-color size-80">
                                    <span class="play-icon"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-04-02.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-03-06.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-3">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-04-03.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-4">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-07-01.png" alt="Shape Thumb" />
                </div>
            </div>
        </div>
    </div>

    <!-- Start Testimonial Area  -->
    <div
        class="eedu-testimonial-area eduvibe-home-two-testimonial bg-color-white testimonial-card-box-bg edu-section-gap position-relative bg-image">
        <div class="container eduvibe-animated-shape">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <span class="pre-title">TESTIMONIALS</span>
                        <h3 class="title">Our Lovely Students Feedback</h3>
                    </div>
                </div>
            </div>

            <div class="edu-testimonial-activation testimonial-item-3 mt--40 edu-slick-button">

                <!-- Start Tastimonial Card  -->
                <div class="testimonial-card-box">
                    <div class="inner">
                        <div class="client-info">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend') }}/assets/images/testimonial/testimonial-04/client-03.png"
                                    alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Stive Marlone</h6>
                                <span class="designation">Web Developer</span>
                            </div>
                        </div>
                        <p class="description">“ There are many variations of passages of Lorem Ipsum available,
                            but the majority on have suffered alteration in some form, by a injected humour, or
                            randomised. ”</p>
                        <div class="rating">
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                        </div>
                    </div>
                </div>
                <!-- End Tastimonial Card  -->

                <!-- Start Tastimonial Card  -->
                <div class="testimonial-card-box">
                    <div class="inner">
                        <div class="client-info">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend') }}/assets/images/testimonial/testimonial-04/client-04.png"
                                    alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">James Carlson</h6>
                                <span class="designation">UI/UX Designer</span>
                            </div>
                        </div>
                        <p class="description">“ There are many variations of passages of Lorem Ipsum available,
                            but the majority on have suffered alteration in some form, by a injected humour, or
                            randomised. ”</p>
                        <div class="rating">
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                        </div>
                    </div>
                </div>
                <!-- End Tastimonial Card  -->

                <!-- Start Tastimonial Card  -->
                <div class="testimonial-card-box">
                    <div class="inner">
                        <div class="client-info">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend') }}/assets/images/testimonial/testimonial-04/client-01.png"
                                    alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Nancy Phipps</h6>
                                <span class="designation">Digital Marketer</span>
                            </div>
                        </div>
                        <p class="description">“ There are many variations of passages of Lorem Ipsum available,
                            but the majority on have suffered alteration in some form, by a injected humour, or
                            randomised. ”</p>
                        <div class="rating">
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                        </div>
                    </div>
                </div>
                <!-- End Tastimonial Card  -->

                <!-- Start Tastimonial Card  -->
                <div class="testimonial-card-box">
                    <div class="inner">
                        <div class="client-info">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend') }}/assets/images/testimonial/testimonial-04/client-02.png"
                                    alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Adam Smith</h6>
                                <span class="designation">Web Developer</span>
                            </div>
                        </div>
                        <p class="description">“ There are many variations of passages of Lorem Ipsum available,
                            but the majority on have suffered alteration in some form, by a injected humour, or
                            randomised. ”</p>
                        <div class="rating">
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                        </div>
                    </div>
                </div>
                <!-- End Tastimonial Card  -->

                <!-- Start Tastimonial Card  -->
                <div class="testimonial-card-box">
                    <div class="inner">
                        <div class="client-info">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend') }}/assets/images/testimonial/testimonial-04/client-05.png"
                                    alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Jhaniel Devora</h6>
                                <span class="designation">Digital Marketer</span>
                            </div>
                        </div>
                        <p class="description">“ There are many variations of passages of Lorem Ipsum available,
                            but the majority on have suffered alteration in some form, by a injected humour, or
                            randomised. ”</p>
                        <div class="rating">
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                        </div>
                    </div>
                </div>
                <!-- End Tastimonial Card  -->

                <!-- Start Tastimonial Card  -->
                <div class="testimonial-card-box">
                    <div class="inner">
                        <div class="client-info">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend') }}/assets/images/testimonial/testimonial-04/client-06.png"
                                    alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Jhamina Diva</h6>
                                <span class="designation">Web Developer</span>
                            </div>
                        </div>
                        <p class="description">“ There are many variations of passages of Lorem Ipsum available,
                            but the majority on have suffered alteration in some form, by a injected humour, or
                            randomised. ”</p>
                        <div class="rating">
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                        </div>
                    </div>
                </div>
                <!-- End Tastimonial Card  -->

                <!-- Start Tastimonial Card  -->
                <div class="testimonial-card-box">
                    <div class="inner">
                        <div class="client-info">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend') }}/assets/images/testimonial/testimonial-04/client-01.png"
                                    alt="Client Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Mark Ronson</h6>
                                <span class="designation">Digital Marketer</span>
                            </div>
                        </div>
                        <p class="description">“ There are many variations of passages of Lorem Ipsum available,
                            but the majority on have suffered alteration in some form, by a injected humour, or
                            randomised. ”</p>
                        <div class="rating">
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                            <i class="on icon-Star"></i>
                        </div>
                    </div>
                </div>
                <!-- End Tastimonial Card  -->

            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-23.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-14-02.png" alt="Shape Thumb" />
                </div>
            </div>

        </div>
    </div>
    <!-- End Testimonial Area  -->

    <div class="eduvibe-home-two-counter edu-counterup-area counterup-wrapper-1 edu-section-gapBottom bg-color-white">
        <!-- Start Counterup Area  -->
        <div class="container eduvibe-animated-shape">
            <div class="row gy-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-5 pr--75 pr_md--0 pr_sm--0">
                        <!-- Start Single Counterup  -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="edu-counterup">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="{{ asset('frontend') }}/assets/images/icons/winner-04.png"
                                            alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="380">00</span>
                                        </h3>
                                        <span>Utilisateurs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counterup  -->

                        <!-- Start Single Counterup  -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="edu-counterup">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="{{ asset('frontend') }}/assets/images/icons/winner-05.png"
                                            alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="83">00</span>
                                        </h3>
                                        <span>Cours & epreuves</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counterup  -->

                        <!-- Start Single Counterup  -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="edu-counterup">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="{{ asset('frontend') }}/assets/images/icons/winner-06.png"
                                            alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="275">50</span>
                                        </h3>
                                        <span>Etudiants</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counterup  -->

                        <!-- Start Single Counterup  -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="edu-counterup">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="{{ asset('frontend') }}/assets/images/icons/winner-07.png"
                                            alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="378">00</span>
                                        </h3>
                                        <span>Testes réalisés</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counterup  -->

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-us-2">
                        <div class="inner">
                            <div class="section-title text-left" data-sal-delay="150" data-sal="slide-up"
                                data-sal-duration="800">
                                <span class="pre-title" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">Pourquoi nous choisir</span>
                                <h3 class="title">Notre agence rend votre voyage plus facile</h3>
                            </div>
                            <p class="description mt--40 mb--30">There are many variations of passages of the
                                Ipsum available, but the majority have suffered alteration in some form, by
                                injected humour.</p>
                            <div class="feature-style-4">
                                <div class="edu-feature-list" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                    <div class="icon">
                                        <i class="icon-Smile"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Des centaines nous font confiance</h6>
                                        <p>There are many variations of passages of the Ipsum available, but the
                                            majority have suffered alteration</p>
                                    </div>
                                </div>

                                <div class="edu-feature-list color-var-2" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                    <div class="icon">
                                        <i class="icon-Support"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Une quantité importante de supports</h6>
                                        <p>Nous augmentons régulièrement à notre stock des supports; d'epreuves, cours, et
                                            des
                                            différents aures services importants pour votre procédure.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-04-01.png" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-11.png" alt="Shape Thumb" />
                </div>
            </div>
        </div>
        <!-- End Counterup Area  -->
    </div>

    <!-- Start Newsletter Area  -->
    <div class="edu-newsletter-area bg-image newsletter-style-3 edu-section-gap bg-color-primary">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="inner">
                        <div class="section-title text-white text-start" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <span class="pre-title">Besoin d'aide ?</span>
                            <h3 class="title">Laissez-nous vous aider</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div
                        class="newsletter-right-content d-block d-sm-flex align-items-center justify-content-start justify-content-lg-end">
                        <div class="contact-btn">
                            <a class="edu-btn btn-white" href="{{ url('/contact') }}">Nous contacter<i
                                    class="icon-arrow-right-line-right"></i></a>
                        </div>
                        <div class="contact-info">
                            <a href="tel:+237656071320"><i class="icon-phone-line"></i> +237 656 07 13 20</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Newsletter Area  -->

    <!-- Start Blog Area  -->
    <div class="eduvibe-home-two-blog edu-blog-area edu-section-gap bg-image">
        <div class="wrapper">
            <div class="container eduvibe-animated-shape">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <span class="pre-title">Nouvelles Recentes</span>
                            <h3 class="title">Toutes nos nouvelles & Blog</h3>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--30">
                    @foreach ($data as $post)
                        <!-- Start Blog Grid  -->
                        <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="edu-blog blog-type-2 bg-white radius-small">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="{{ url('detail/' . Str::slug($post->title) . '/' . $post->id) }}">
                                            <img src="{{ asset('frontend') }}/assets/img/blog/thumb/{{ $post->thumb }}"
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
                        <!-- End Blog Grid  -->
                    @endforeach

                </div>

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="{{ asset('frontend') }}/assets/images/shapes/shape-13-06.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="{{ asset('frontend') }}/assets/images/shapes/shape-13-05.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-4">
                        <img src="{{ asset('frontend') }}/assets/images/shapes/shape-25.png" alt="Shape Thumb" />
                    </div>
                </div>

            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-2">
                    <img src="{{ asset('frontend') }}/assets/images/shapes/shape-24.png" alt="Shape Thumb" />
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area  -->
@endsection
