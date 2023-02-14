@extends('layouts/layout')
@section('content')
    <!-- Start Banner
                    ============================================= -->
    <div class="banner-area auto-height inc-form text-center text-light shadow theme-hard bg-fixed"
        style="background-image: url({{ asset('frontend') }}/assets/img/banner/7.jpg);">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="content">
                                <h1>GoulBAM Enterprises</h1>
                                <h3>Le monde numérique à une autre dimension</h3>
                                <p>
                                    Leadeur de services informatiques, nous fournissons les meilleures solutions de
                                    technologie de l'information pour votre entreprise avec notre équipe d'experts dédiés à
                                    vous fournir le meilleur service possible.
                                </p>
                                <a class="btn circle btn-light border btn-md" href="#about">Allons-y</a>
                            </div>
                        </div>
                    </div>
                </div><br><br><br>
                <div class="wavesshape">
                    <img src="{{ asset('frontend') }}/assets/img/waves-shape.svg" alt="Shape">
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About
                    ============================================= -->
    <div id="about" class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 info">
                    <h2>A propos de <span style="color:#2466EA">GoulBAM Enterprises</span> <br> Meilleurs solutions IT</h2>
                    <p>
                        Nous sommes une startup du domaine informatique qui depuis sa création,
                        a pour but principale de contribuer dans l'innovation
                        numérique notament en apportant des solutions informatiques
                        aux entreprises quelqu'en soit le domaine de leur activité.

                    <p>Depuis sa création, la société a été en mesure de fournir une large gamme de
                        services et de produits pour les clients. Nous nous occupons
                        <u><a style="color:blue" href="{{ url('/about') }}">En savoir plus...</a></u>
                    </p>

                    {{-- Depuis sa création, la société a été en mesure de fournir une large gamme de 
                        services et de produits pour les clients. Nous nous occupons principalement de
                         la fourniture de services tels que des sites Web, des logiciels de gestion, 
                         des applications Web, des applications mobiles et d'autres outils Web, puis 
                         de la conception graphique (dépliants, cartes de visite,...) et plus encore. 
                         Notre objectif principal est de vous fournir le meilleur service possible qui 
                         répond à vos besoins et à vos exigences. --}}
                    </p>
                    <ul>
                        <li>Nous gérons votre plate-forme en ligne</li>
                        <li>Nous gérons votre visibilité sur le web</li>
                        <li>Formations des personnes désirent s'aquiter des connaissance en informatique</li>
                    </ul>
                    <div class="fun-facts">
                        <h3>Quelques résultats de notre super équipe</h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 item">
                                <div class="fun-fact clients">
                                    <div class="timer" data-to="30" data-speed="5000">30</div>
                                    <span class="medium">Clients</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 item">
                                <div class="fun-fact invest">
                                    <div class="timer" data-to="2" data-speed="5000">2</div>
                                    <span class="medium">Revenus</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="98" data-speed="5000">98</div>
                                    <span class="medium">Taux de réussite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 thumb">
                    <img src="{{ asset('frontend') }}/assets/img/about/1.png" alt="Thumb">
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Features Area
                ============================================= -->
    <div id="features" class="features-area carousel-shadow default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Ce que nous offrons</h2>
                        <p>
                            Jetez un coup d'œil aux services que nous offrons à nos clients afin
                            de vous faciliter la vie. Vous n'avez pas à vous soucier de tout type
                            de problème. Nous fournissons des services de qualité à nos clients et
                            nous travaillons avec une grande passion.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="features-items features-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <span>01</span>
                                <i class="flaticon-drag-2"></i>
                            </div>
                            <div class="info">
                                <h4>Site web et logiciels</h4>
                                <p>
                                    Nous conçevons vos sites web et logiciels (de gestion ou autres...) et gérons cela pour
                                    vous si selon le contrat d'arrangement.
                                </p>
                                <div class="bottom">
                                    <a href="#">Voir les details <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <span>02</span>
                                <i class="flaticon-software"></i>
                            </div>
                            <div class="info">
                                <h4>Formations</h4>
                                <p>
                                    Notre entreprise oeuvre aussi dans la formations des différents angles d'informatique
                                    tels que...
                                </p>
                                <div class="bottom">
                                    <a href="#">Voir les details <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <span>03</span>
                                <i class="flaticon-rgb"></i>
                            </div>
                            <div class="info">
                                <h4>Medias de communication</h4>
                                <p>
                                    Ici il s'agit de la confection des Flyers, Cartes de visites, CVs, Bannières, brochures,
                                    stickers, affiches publicitaires...
                                </p>
                                <div class="bottom">
                                    <a href="#">Voir les details <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <span>04</span>
                                <i class="flaticon-video"></i>
                            </div>
                            <div class="info">
                                <h4>Marketing Digital</h4>
                                <p>
                                    Ici nous visons votre visibilité sur le web tels que les publicités facebook, setup de
                                    votre WA business,...
                                </p>
                                <div class="bottom">
                                    <a href="#">Voir les details <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->

    <!-- Start Companies Area
                    ============================================= -->
    <div class="companies-area text-center default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 info">
                    <h3>Plus en plus de <span>clients</span> nous font confiance</h3>
                    <p>
                        En raison du service de haute qualité que nous offrons, de plus en plus de clients reviennent vers
                        nous pour leurs autres besoins. Notre équipe de professionnels est toujours prête à vous aider
                    </p>
                </div>
                <div class="col-md-8 col-md-offset-2 clients">
                    <div class="clients-items owl-carousel owl-theme text-center">
                        <div class="single-item">
                            <a href="https://www.apdel.cm" target="_blanc"><img
                                    src="{{ 'frontend' }}/assets/img/clients/1.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="{{ 'frontend' }}/assets/img/clients/2.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="{{ 'frontend' }}/assets/img/clients/3.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="{{ 'frontend' }}/assets/img/clients/4.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="{{ 'frontend' }}/assets/img/clients/5.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="{{ 'frontend' }}/assets/img/clients/6.png" alt="Clients"></a>
                        </div>
                        {{-- <div class="single-item">
                            <a href="#"><img src="{{ 'frontend' }}/assets/img/clients/7.png" alt="Clients"></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Companies Area -->

    <!-- Start Overview
                    ============================================= -->
    <div id="overview" class="overview-area bg-theme text-light default-padding">
        <!-- Side Bg -->
        <div class="side-bg">
            <img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="Thumb">
        </div>
        <!-- End Side Bg -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Aperçu rapide des travaux</h2>
                        <p>
                            Prenez une vue des solutions que nous avons déjà eu à implementer sur le marché. Ici
                            sont mélangé les differentes photos des sites, applications web, logiciels et bien d'autres
                            de nos solutions apportées aux entreprises client.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 text-center overview-items">
                    <div class="overview-carousel owl-carousel owl-theme">
                        <div class="item">
                            <a class="item popup-link " href="{{ asset('frontend') }}/assets/img/app/1.jpg">
                                <img src="{{ asset('frontend') }}/assets/img/app/1.jpg" alt="Thumb">
                            </a>
                        </div>
                        <div class="item">
                            <a class="item popup-link " href="{{ asset('frontend') }}/assets/img/app/2.jpg">
                                <img src="{{ asset('frontend') }}/assets/img/app/2.jpg" alt="Thumb">
                            </a>
                        </div>
                        <div class="item">
                            <a class="item popup-link " href="{{ asset('frontend') }}/assets/img/app/3.jpg">
                                <img src="{{ asset('frontend') }}/assets/img/app/3.jpg" alt="Thumb">
                            </a>
                        </div>
                        <div class="item">
                            <a class="item popup-link " href="{{ asset('frontend') }}/assets/img/app/4.jpg">
                                <img src="{{ asset('frontend') }}/assets/img/app/4.jpg" alt="Thumb">
                            </a>
                        </div>
                        <div class="item">
                            <a class="item popup-link " href="{{ asset('frontend') }}/assets/img/app/5.jpg">
                                <img src="{{ asset('frontend') }}/assets/img/app/5.jpg" alt="Thumb">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview -->

    <!-- Start Team Area
                    ============================================= -->
    <div id="team" class="team-area radius-less default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Innovative Team</h2>
                        <p>
                            Learning day desirous informed expenses material returned six the. She enabled invited
                            exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age
                            out full gate bed day lose.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-items text-center">
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('frontend') }}/assets/img/team/6.jpg" alt="Thumb">
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info">
                                <h4>BASSIME Amram</h4>
                                <span>Président</span>
                                <h5><i class="fas fa-envelope"></i> president@goulbam.com</h5>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('frontend') }}/assets/img/team/2.jpg" alt="Thumb">
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info">
                                <h4>Munia Ankor</h4>
                                <span>Project Manager</span>
                                <h5><i class="fas fa-envelope"></i> munia@goulbam.com</h5>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('frontend') }}/assets/img/team/3.jpg" alt="Thumb">
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info">
                                <h4>Ahel Natasha</h4>
                                <span>Developer</span>
                                <h5><i class="fas fa-envelope"></i> natasha@goulbam.com</h5>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Testimonials Area
                    ============================================= -->
    <div class="testimonials-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Avis des client</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="testimonial-items testimonial-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('frontend') }}/assets/img/team/4.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <p>
                                    J'aime cette entreprise parce qu'ils sont si bons dans leur travail et
                                    qu'ils ont la capacité de vous faire sentir que vous faites partie de
                                    quelque chose de plus grand.
                                </p>
                                <h4>Junl Sarukh</h4>
                                {{-- <span>Designer of Boxass</span> --}}
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('frontend') }}/assets/img/team/5.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <p>
                                    Comparison dissimilar unpleasant six compliment two unpleasing any add. Ashamed my
                                    company thought wishing colonel it prevent he in. Pretended residence are something
                                    far engrossed old off.
                                </p>
                                <h4>Junl Sarukh</h4>
                                <span>Designer of Boxass</span>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('frontend') }}/assets/img/team/1.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <p>
                                    Comparison dissimilar unpleasant six compliment two unpleasing any add. Ashamed my
                                    company thought wishing colonel it prevent he in. Pretended residence are something
                                    far engrossed old off.
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
                        <h2>NOUVELLES RÉCENTES</h2>
                        <p>
                            Jetez un œil à nos dernières actualités et soyez au courant de nos dernières
                            histoires. Nous sommes toujours à la recherche de nouvelles façons de vous tenir informé.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">
                    @foreach ($posts as $post)
                        <!-- Single Item -->
                        <div class="col-md-4 single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{ url('detail') . '/' . $post->id }}"><img
                                            src="{{asset('/frontend/assets/img/blog/thumb').'/'.$post->thumb}}" alt="Thumb"></a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <div class="date">
                                        {{ $post->created_at->format('d M, Y') }}
                                    </div>
                                    <h4>
                                        <a
                                            href="{{ url('detail') . '/' . $post->id }}">{{ implode(' ', array_slice(explode(' ', $post->title), 0, 4)) }}...</a>
                                    </h4>
                                    <p>
                                        {{ implode(' ', array_slice(explode(' ', $post->detail), 0, 10)) }}...
                                    </p>
                                    <a href="{{ url('detail') . '/' . $post->id }}">Lire Plus <i
                                            class="fas fa-angle-right"></i></a>
                                </div>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('frontend') }}/assets/img/team/4.jpg" alt="Author">
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
                        <!-- Single Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End Blog Area -->
@endsection
