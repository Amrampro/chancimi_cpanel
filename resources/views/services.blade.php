@extends('layouts/layout')
@section('content')
    <!-- Start Banner
                                        ============================================= -->
    <div class="banner-area fixed-top bg-theme-small bg-cover"
        style="background-image: url({{ asset('frontend') }}/assets/img/shape-bg.jpg);">
        <!-- Side Bg -->
        <div class="side-bg">
            <img src="{{ asset('frontend') }}/assets/img/illustrations/2.png" alt="Thumb">
        </div>
        <!-- End Side Bg -->
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 left-info">
                            <div class="content" data-animation="animated fadeInUpBig">
                                <h1>Nos <span>Services</span> de qualités</h1>
                                <p>
                                    Si vous souhaitez savoir quels services nous offrons, alors vous êtes au bon endroit.
                                    Ici nous allons vous présenter nos différents prestations
                                </p>
                                <a class="btn btn-theme border btn-md" href="#process">Allons-y</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- Start Work Step
                                        ============================================= -->
    <div id="process" class="work-step-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Nos <span>services</span></h2>
                        <p>
                            Découvrez ce que nous faisons et comment nous le faisons. Internet regorge d'informations, mais
                            pas tant que ça sur ce que nous faisons. Il est important de savoir ce dont vous avez besoin de
                            nous afin que vous puissiez prendre vos propres décisions sur ce que vous attendez de nous.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="work-step-items">
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="col-md-12">
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 thumb">
                                        <img src="{{ asset('frontend') }}/assets/img/illustrations/5.svg" alt="Thumb">
                                    </div>
                                    <div class="col-md-6 info">
                                        <div class="title">
                                            <strong>01</strong>
                                            <h2>Développement siteweb et logiciels</h2>
                                        </div>
                                        <p>
                                            La premiere visibilité recherché par l'entreprise est d'abord celle d'être
                                            vu dans son espace internet à elle. C'est la raison pour laquelle pour des
                                            entreprises ou des individues, nous dévéloppons vos sites internets sur mesure
                                            pour faciliter votre installation sur l'echelle global.
                                        </p>
                                        <p>
                                            Par ailleurs, nous sommes conscient du fait que la structure peut rencontrer
                                            des difficultés dans des besoins interne. C'est la raison pour laquelle parmis
                                            nos services figurent aussi la création des logiciels simple comme web.
                                        </p>
                                        <ul>
                                            <li>Siteweb (Vitrine et autre)</li>
                                            <li>Logiciel de gestion</li>
                                            <li>E-commerce, E-learning,...</li>
                                            <li>Middleton principle</li>
                                        </ul>
                                        <a class="btn btn-theme border btn-md" href="/webprice">Voir La Grille</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item reverse">
                        <div class="col-md-12">
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 thumb">
                                        <img src="{{ asset('frontend') }}/assets/img/illustrations/3.svg" alt="Thumb">
                                    </div>
                                    <div class="col-md-6 info">
                                        <div class="title">
                                            <strong>02</strong>
                                            <h2>Montage des visuels graphiques</h2>
                                        </div>
                                        <p>
                                            L'autre angle de nos services est de fournir des visuels à nos clients.
                                            Comme le précédent, celui-ci peut être pour un individu, une entreprise et
                                            même pour un évenement. Alors nous fournissons des Flyers, Bannières,
                                            CVs, Cartes de visites,...
                                        </p>
                                        <p>
                                            Ces réalisations peuvent être vu certains dans la section blog et d'autres
                                            sur nos différentes plate-forme.
                                        </p>
                                        <ul>
                                            <li>Cartes de visites</li>
                                            <li>Flyers</li>
                                            <li>CVs</li>
                                            <li>Bannières,...</li>
                                        </ul>
                                        <a class="btn btn-theme border btn-md" href="#">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="col-md-12">
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 thumb">
                                        <img src="{{ asset('frontend') }}/assets/img/illustrations/6.svg" alt="Thumb">
                                    </div>
                                    <div class="col-md-6 info">
                                        <div class="title">
                                            <strong>03</strong>
                                            <h2>Formations en informatique</h2>
                                        </div>
                                        <p>
                                            Depuis un certains temps nous avons été actif dans la transmission
                                            de notre savoir faire car pour nous, la connaissance ne se donne pas
                                            simplement mais se multiplie.
                                        </p>
                                        <p>
                                            Constitué des ingénieurs dans leurs domaines, nous offrons des
                                            formations en programmation informatique, montage visuel (Adobe Photoshop,...),
                                            sécretariat bureautique (suite office,...).
                                        </p>
                                        <ul>
                                            <li>Programmation informatique</li>
                                            <li>Infographie</li>
                                            <li>Sécretariat bureatique</li>
                                            <li>Middleton principle</li>
                                        </ul>
                                        <a class="btn btn-theme border btn-md" href="#">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Step Area -->

    <!-- Start Services Area
                                        ============================================= -->
    <div id="services" class="services-area default-padding bottom-less bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Ce que nous offrons</h2>
                        {{-- <p>
                                                            Learning day desirous informed expenses material returned six the. She enabled invited exposed
                                                            him another. Reasonably conviction solicitude me mr at discretion reasonable. Age out full gate
                                                            bed day lose.
                                                        </p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="services-items text-center">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <i class="flaticon-project"></i>
                                <h4>Site Internet</h4>
                                <p>
                                    Vitrine, dynamique, ONGs, e-commerce, e-learning,...
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <i class="flaticon-concept"></i>
                                <h4>Dévélopment de logiciels</h4>
                                <p>
                                    Logiciel de gestion, vente, rappel en structure,...
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <i class="flaticon-insurance"></i>
                                <h4>Visuel Graphique</h4>
                                <p>
                                    Confection des flyers, cartes de visite, CVs, Bannières,...
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <i class="flaticon-talk"></i>
                                <h4>Formations</h4>
                                <p>
                                    Formation en programmation informatique, bureautique, infographie,...
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <i class="flaticon-updated"></i>
                                <h4>Suivi des équipements</h4>
                                <p>
                                    Maintenance des logiciel, analyse et reparation des systèmes,...
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <i class="flaticon-help"></i>
                                <h4>Marketing digitale</h4>
                                <p>
                                    Promotion de votre activité sur des plate-formes tel que facebook,...
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Video Area
                                                                                                                                            ============================================= -->
    <div class="video-area text-light bg-theme default-padding">
        <!-- Side Bg -->
        <div class="side-bg">
            <img src="assets/img/circle-shape.png" alt="Thumb">
        </div>
        <!-- End Side Bg -->
        <div class="container">
            <div class="row">
                <div class="item-box">
                    <div class="col-md-6 info">
                        <h2>Travaillez avec nous !</h2>
                        <h4>Pour nos clients</h4>
                        <p>
                            En etant un client, chaque travail que nous faisons pour vous ajoute un certains nombre de
                            points dans votre compte chez nous. Ainsi, avec suffisament de points, vous pouvez commander un
                            travail gratuit ou avec une reduction de prix selon la suffisance de vos points et votre rang
                            chez nous. Wow! vos commandez un travail et nous vous payons pour votre travail :)
                        </p>
                        <h4>Pour les non-clients</h4>
                        <p>
                            Une façon tout autre et assez simple de gagner de l'argent avec nous est de diriger
                            des clients vers nous. chaque projet que vous dirigez vers nous vous êtes payé
                            pour ce projet là; et ceci sans lever le petit doight. Pour chaque redirection vous obtenez
                            automatiquement 10% par projet.
                        </p>
                        {{-- <ul>
                            <li>Incommode existence put out suffering certainly.</li>
                            <li>Applauded use attempted strangers now are middleton concluded had. It is tried ﻿no added
                                purse shall</li>
                            <li>Offended as wandered thoughts greatest</li>
                        </ul> --}}
                        <a class="btn circle btn-light border btn-md" href="/user/dashboard">Acceder à l'espace
                            utilisateur</a>
                    </div>
                    <div class="col-md-6 video">
                        <img src="{{ asset('frontend') }}/assets/img/app/app-2.png" alt="Thumb">
                        {{-- <a class="popup-youtube video-play-button" href="#">
                            <i class="fa fa-play"></i>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video Area -->

    <!-- Start Faq
                                                                                                                                            ============================================= -->
    <div id="faq" class="faq-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 thumb">
                    <img src="{{asset('frontend')}}/assets/img/illustrations/2.svg" alt="Thumb">
                </div>
                <div class="col-md-7 faq-items">
                    <div class="heading">
                        <h2>Question & Réponse (FAQ)</h2>
                    </div>
                    <!-- Start Accordion -->
                    <div class="acd-items acd-arrow">
                        <div class="panel-group symb" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                            Do I need a business plan?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>
                                            Removing welcomed civility or hastened is. Justice elderly but perhaps expense
                                            six her are another passage. Full her ten open fond walk not down.For request
                                            general express unknown are. journey greatly or garrets. Draw door kept do so
                                            come on open mean. Estimating stimulated how reasonably precaution diminution
                                            she simplicity sir but. Questions am sincerity zealously concluded consisted or
                                            no gentleman it.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                            A qoui servent les points sur les travaux ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Removing welcomed civility or hastened is. Justice elderly but perhaps expense
                                            six her are another passage. Full her ten open fond walk not down.For request
                                            general express unknown are. journey greatly or garrets. Draw door kept do so
                                            come on open mean. Estimating stimulated how reasonably precaution diminution
                                            she simplicity sir but. Questions am sincerity zealously concluded consisted or
                                            no gentleman it.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac3">
                                            Where do I start?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Removing welcomed civility or hastened is. Justice elderly but perhaps expense
                                            six her are another passage. Full her ten open fond walk not down.For request
                                            general express unknown are. journey greatly or garrets. Draw door kept do so
                                            come on open mean. Estimating stimulated how reasonably precaution diminution
                                            she simplicity sir but. Questions am sincerity zealously concluded consisted or
                                            no gentleman it.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Faq  -->


    <!-- Start Testimonials Area
                                        ============================================= -->
    <div class="testimonials-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Customer Review</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="testimonial-items testimonial-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/team/4.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <p>
                                    Comparison dissimilar unpleasant six compliment two unpleasing any add. Ashamed my
                                    company thought wishing colonel it prevent he in. Pretended residence are something far
                                    engrossed old off.
                                </p>
                                <h4>Junl Sarukh</h4>
                                <span>Designer of Boxass</span>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/team/5.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <p>
                                    Comparison dissimilar unpleasant six compliment two unpleasing any add. Ashamed my
                                    company thought wishing colonel it prevent he in. Pretended residence are something far
                                    engrossed old off.
                                </p>
                                <h4>Junl Sarukh</h4>
                                <span>Designer of Boxass</span>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/team/1.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <p>
                                    Comparison dissimilar unpleasant six compliment two unpleasing any add. Ashamed my
                                    company thought wishing colonel it prevent he in. Pretended residence are something far
                                    engrossed old off.
                                </p>
                                <h4>Junl Sarukh</h4>
                                <span>Designer of Boxass</span>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->

    <!-- Start Blog Area
                                        ============================================= -->
    <div id="blog" class="blog-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Recent News</h2>
                        <p>
                            Learning day desirous informed expenses material returned six the. She enabled invited exposed
                            him another. Reasonably conviction solicitude me mr at discretion reasonable. Age out full gate
                            bed day lose.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="single.html"><img src="assets/img/blog/1.jpg" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <div class="date">
                                        15 Aug, 2019
                                    </div>
                                    <h4>
                                        <a href="single.html">Direct wicket little of talked lasted formed</a>
                                    </h4>
                                    <p>
                                        Pronounce we attention admitting on assurance of suspicion conveying. That his west
                                        quit had met till.
                                    </p>
                                    <a href="single.html">Read More <i class="fas fa-angle-right"></i></a>
                                </div>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/team/4.jpg" alt="Author">
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
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="single.html"><img src="assets/img/blog/2.jpg" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <div class="date">
                                        27 Nov, 2019
                                    </div>
                                    <h4>
                                        <a href="single.html">Supported neglected met therefore unwilling</a>
                                    </h4>
                                    <p>
                                        Pronounce we attention admitting on assurance of suspicion conveying. That his west
                                        quit had met till.
                                    </p>
                                    <a href="single.html">Read More <i class="fas fa-angle-right"></i></a>
                                </div>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/team/2.jpg" alt="Author">
                                                <span>Author</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-comments"></i>
                                                <span>17</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-share-alt"></i>
                                                <span>22</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="single.html"><img src="assets/img/blog/3.jpg" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <div class="date">
                                        18 Sep, 2019
                                    </div>
                                    <h4>
                                        <a href="single.html">Concerns greatest margaret absolute entrance</a>
                                    </h4>
                                    <p>
                                        Pronounce we attention admitting on assurance of suspicion conveying. That his west
                                        quit had met till.
                                    </p>
                                    <a href="single.html">Read More <i class="fas fa-angle-right"></i></a>
                                </div>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/team/1.jpg" alt="Author">
                                                <span>Author</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-comments"></i>
                                                <span>25</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-share-alt"></i>
                                                <span>50</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->
@endsection
