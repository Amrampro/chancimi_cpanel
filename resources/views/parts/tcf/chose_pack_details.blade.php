@extends('layouts/layout')
@section('content')
     <div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
        <div class="container eduvibe-animated-shape">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-start">
                        <div class="page-title">
                            <h3 class="title">Détails du Pack</h3>
                        </div>
                        <nav class="edu-breadcrumb-nav">
                            <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
                                <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                                <li class="breadcrumb-item active" aria-current="page">Détails</li>
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

    <div class="edu-course-details-area edu-section-gap bg-color-white">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="main-image thumbnail">
                        <img class="radius-small" src="{{asset('frontend')}}/assets/images/course/course-details/course-01.jpg"
                            alt="Banner Images">
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-xl-8 col-lg-7">
                    <div class="course-details-content">
                        <div class="content-top">
                            <div class="author-meta">
                                <div class="author-thumb">
                                    <a href="instructor-profile.html">
                                        <img src="{{asset('frontend')}}/assets/images/instructor/instructor-small/instructor-2.jpg"
                                            alt="Author Images">
                                        <span class="author-title">Par Chancimi</span>
                                    </a>
                                </div>
                            </div>
                            <div class="edu-rating rating-default">
                                <div class="rating">
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                </div>
                                <span class="rating-count">(25+ Revues)</span>
                            </div>
                        </div>

                        <h3 class="title">Pack {{$pack->type}} de {{$exam->name}}</h3>

                        <div class="course-details-card">
                            <div class="course-content">
                                <h5>Une bref revue</h5>
                                {!! $pack->details !!}
                            </div>
                        </div>

                        {{-- <div class="course-details-card mt--40">
                            <div class="course-content">
                                <div class="edu-accordion-02" id="accordionExample1">
                                    <div class="edu-accordion-item">
                                        <div class="edu-accordion-header" id="headingOne">
                                            <button class="edu-accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Sessions disponibles
                                            </button>
                                        </div>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                                            <div class="edu-accordion-body">
                                                <ul>
                                                    <li>
                                                        <div class="text"><i class="icon-draft-line"></i> Introduction
                                                        </div>
                                                        <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                    </li>
                                                    <li>
                                                        <div class="text"><i class="icon-draft-line"></i> Course Overview
                                                        </div>
                                                        <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                    </li>
                                                    <li>
                                                        <div class="text"><i class="icon-draft-line"></i> Local
                                                            Development Environment Tools</div>
                                                        <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                    </li>
                                                    <li>
                                                        <div class="text"><i class="icon-draft-line"></i> Course Excercise
                                                        </div>
                                                        <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                    </li>
                                                    <li>
                                                        <div class="text"><i class="icon-draft-line"></i> Embedding PHP in
                                                            HTML</div>
                                                        <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                    </li>
                                                    <li>
                                                        <div class="text"><i class="icon-draft-line"></i> Using Dynamic
                                                            Data</div>
                                                        <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="course-details-card mt--40">
                            <div class="course-content">
                                <div class="course-author-wrapper">
                                    <div class="thumbnail">
                                        <img src="{{asset('frontend')}}/assets/images/instructor/course-details/instructor-2.jpg"
                                            alt="Author Images">
                                    </div>
                                    <div class="author-content">
                                        <h6 class="title">
                                            <a href="instructor-profile.html">Leone Xaviona</a>
                                        </h6>
                                        <span class="subtitle">Digital Marketer</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when...
                                        </p>
                                        <ul class="social-share border-style">
                                            <li><a href="#"><i class="icon-Fb"></i></a></li>
                                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                            <li><a href="#"><i class="icon-Pinterest"></i></a></li>
                                            <li><a href="#"><i class="icon-Twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="course-details-card mt--40">
                            <div class="course-content">
                                <h5 class="mb--20">Review</h5>
                                <div class="row row--30">
                                    <div class="col-lg-4">
                                        <div class="rating-box">
                                            <div class="rating-number">5.0</div>
                                            <div class="rating">
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                            </div>
                                            <span>(25 Review)</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="review-wrapper">

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    5 <i class="icon-Star"></i>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 100%"
                                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="rating-value">1</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    4 <i class="icon-Star"></i>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="rating-value">0</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    3 <i class="icon-Star"></i>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="rating-value">0</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    2 <i class="icon-Star"></i>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="rating-value">0</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    1 <i class="icon-Star"></i>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="rating-value">0</span>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> --}}
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="eduvibe-sidebar course-details-sidebar">
                        <div class="inner">
                            <div class="eduvibe-widget">
                                {{-- <div class="video-area">
                                    <div class="thumbnail video-popup-wrapper">
                                        <img class="radius-small w-100" src="{{asset('frontend')}}/assets/images/course/video-bg/course-02.jpg"
                                            alt="Course Images">
                                        <a href="https://www.youtube.com/watch?v=pNje3bWz7V8"
                                            class="video-play-btn position-to-top video-popup-activation">
                                            <span class="play-icon course-details-video-popup"></span>
                                        </a>
                                    </div>
                                </div> --}}
                                <div class="eduvibe-widget-details mt--35">
                                    <div class="widget-content">
                                        {{-- <ul>
                                            <li><span><i class="icon-time-line"></i> Start Date</span><span>6 Hrs 40
                                                    Min</span></li>

                                            <li><span><i class="icon-user-2"></i> Enrolled</span><span>89</span></li>

                                            <li><span><i class="icon-draft-line"></i> Lectures</span><span>23</span></li>

                                            <li><span><i class="icon-bar-chart-2-line"></i> Skill
                                                    Level</span><span>Intermediate</span></li>

                                            <li><span><i class="icon-translate"></i> Language</span><span>English</span>
                                            </li>

                                            <li><span><i class="icon-artboard-line"></i> Quizzes</span><span>25</span></li>

                                            <li><span><i class="icon-award-line"></i> Certificate</span><span>Yes</span>
                                            </li>

                                            <li><span><img class="eduvibe-course-sidebar-img-icon"
                                                        src="{{asset('frontend')}}/assets/images/icons/percent.svg" alt="icon Thumb"> Pass
                                                    Percentage</span><span>90%</span></li>

                                            <li><span><i class="icon-calendar-2-line"></i> Deadline</span><span>25 Dec,
                                                    2023</span></li>

                                            <li><span><i class="icon-user-2-line_tie"></i> Instructor</span><span>Daniel
                                                    Stiva</span></li>
                                        </ul> --}}
                                        <ul>
                                            <li><span><i class="icon-artboard-line"></i> Nom</span><span>{{$exam->name}}</span></li>

                                            <li><span><i class="icon-calendar-2-line"></i> Date début</span><span>-</span></li>
                                            
                                            <li><span><i class="icon-time-line"></i> Validité</span><span>1 Mois</span></li>

                                            {{-- <li><span><i class="icon-award-line"></i> Certification</span><span>Yes</span>
                                            </li> --}}

                                            <li><span><i class="icon-calendar-2-line"></i> Date fin</span><span>-</span></li>
                                        </ul>

                                        <div class="read-more-btn mt--45">
                                            <a class="edu-btn btn-bg-alt w-100 text-center" href="#">Price:
                                                {{$pack->price}} FCFA</a>
                                        </div>

                                        <div class="read-more-btn mt--15">
                                            <a class="edu-btn w-100 text-center" href="#">Acheter</a>
                                        </div>

                                        {{-- <div class="read-more-btn mt--30 text-center">
                                            <div class="eduvibe-post-share">
                                                <span>Share: </span>
                                                <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                                <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                                <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                                <a class="youtube" href="#"><i class="icon-youtube"></i></a>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
