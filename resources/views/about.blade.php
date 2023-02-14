@extends('layouts/layout')
@section('content')
    <!-- Start Breadcrumb
                                                                                            ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url({{ asset('frontend') }}/assets/img/banner/6.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>A propos</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li class="active">A propos</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About
                                                                                                ============================================= -->
    <div id="about" class="about-area border-top default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 info">
                    <h2>A propos de GoulBAM Enterprises</h2>
                    <p>
                        Nous sommes une startup du domaine informatique qui depuis sa création, a pour but principale de
                        contribuer dans l'innovation numérique notament en apportant des solutions informatiques aux
                        entreprises quelqu'en soit le domaine de leur activité.
                    </p>
                    </p>
                    Depuis sa création en 2019, la structure a été en mesure de fournir une large gamme de
                    services et de produits informatiques pour les clients. De nos jours, la structures est en majeur partie
                    composée des ingénieurs de travaux informatiques et d'autres personnels professionnels dans leurs
                    différents domaines. Nous comptons à ce jour des multiples projets déployé pour informatiser(numériser,
                    digitaliser) des entreprises même en occcident. Nous nous occupons principalement de
                    la fourniture de services informatiques tels que des sites Web, des logiciels de gestion,
                    des applications Web, des applications mobiles et d'autres outils Web, puis
                    de la conception graphique (dépliants, cartes de visite, Flyers,...) et plus encore.
                    Notre objectif principal est de vous fournir le meilleur service possible qui
                    répond à vos besoins et à vos exigences.
                    </p>
                    <p>
                        Par allieurs, nous offronts aussi des formations tels que La formation en programmation
                        informatique,formation en bureautique, formation en montage des visuels graphique.
                    </p>
                    <ul>
                        <li>Digitaliser, numériser les entreprises</li>
                        <li>Créations de visuels graphique</li>
                        <li>Formation en informatique(programmation informatique, bureautique, )</li>
                    </ul>
                    {{-- <div class="fun-facts">
                        <h3>Outstanding annual results from our awesome Team</h3>
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
                            <div class="col-md-4 col-sm-4 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="75" data-speed="5000">75</div>
                                    <span class="medium">Higher Profits</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="100" data-speed="5000">100</div>
                                    <span class="medium">Satisfied</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="98" data-speed="5000">98</div>
                                    <span class="medium">Success Rate</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-6 col-md-6 thumb">
                    <img src="{{ asset('frontend') }}/assets/img/illustrations/1.png" alt="Thumb">
                </div>
                <div class="col-md-12 col-lg-12 fun-facts">
                    <h3>Outstanding annual results from our awesome Team</h3>
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
                        
                <div class="col-lg-12 col-md-12 fun-facts"></div>
                        <div class="col-md-4 col-sm-4 item">
                            <div class="fun-fact">
                                <div class="timer" data-to="75" data-speed="5000">75</div>
                                <span class="medium">Higher Profits</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 item">
                            <div class="fun-fact">
                                <div class="timer" data-to="100" data-speed="5000">100</div>
                                <span class="medium">Satisfied</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 item">
                            <div class="fun-fact">
                                <div class="timer" data-to="98" data-speed="5000">98</div>
                                <span class="medium">Success Rate</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 fun-facts"></div>
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
                        <h2>Our Features</h2>
                        <p>
                            Learning day desirous informed expenses material returned six the. She enabled invited exposed
                            him another. Reasonably conviction solicitude me mr at discretion reasonable. Age out full gate
                            bed day lose.
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
                                <h4>Drag And Drop</h4>
                                <p>
                                    Situation perpetual allowance offending as principle.
                                </p>
                                <div class="bottom">
                                    <a href="#">View Details <i class="fas fa-angle-right"></i></a>
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
                                <h4>App Integration</h4>
                                <p>
                                    Situation perpetual allowance offending as principle.
                                </p>
                                <div class="bottom">
                                    <a href="#">View Details <i class="fas fa-angle-right"></i></a>
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
                                <h4>Color Schemes</h4>
                                <p>
                                    Situation perpetual allowance offending as principle.
                                </p>
                                <div class="bottom">
                                    <a href="#">View Details <i class="fas fa-angle-right"></i></a>
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
                                <h4>High Resolution</h4>
                                <p>
                                    Situation perpetual allowance offending as principle.
                                </p>
                                <div class="bottom">
                                    <a href="#">View Details <i class="fas fa-angle-right"></i></a>
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

    <!-- Start Work Process Area
                                                                                                ============================================= -->
    <div id="process" class="work-process-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Processus De Travail</h2>
                        <p>
                            Nous utilisons la méthode SCRUM car cela permet au client d'être informé à chaque étape sur
                            l'evolution de son projet. Ainsi, avec cette méthode, il y'a la facilité de detecter les erreurs
                            ou zones d'ombres à temps et rapidement corriger et adapter selon ses besoins à lui ce qui
                            resulte à un gain de temps considérable. <i><u><a href="#">En savoir plus sur cette
                                        méthode...</a></u></i>
                        </p>
                        {{-- <p>
                            La méthode Scrum fonctionne sur le principe des sprints : des cycles de travail de deux semaines
                            à l’issue desquels un livrable est attendu. Outre le sprint, il existe deux autres événements
                            Scrum : les réunions debout quotidiennes et les rétrospectives de sprint. Les réunions debout
                            quotidiennes ont lieu tous les jours, comme leur nom le suggère. En 15 minutes, elles permettent
                            à l’équipe Scrum d’interagir et de coordonner ses tâches pour la journée. Quant aux
                            rétrospectives de sprint, elles sont organisées par le Scrum master à chaque fin de sprint.
                            C’est l’occasion pour l’équipe de faire le point sur son travail et de mettre en place des
                            changements pour les prochains sprints.
                        </p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="process-items">
                    <div class="col-md-6 thumb">
                        <img src="{{ asset('frontend') }}/assets/img/illustrations/4.svg" alt="Thumb">
                    </div>
                    <div class="col-md-6 info">
                        <ul>
                            <li>
                                <div class="list">
                                    <h3><i class="fas fa-chart-line"></i></h3>
                                </div>
                                <div class="content">
                                    <h4>Début des travaux</h4>
                                    <p>
                                        Dans cette premiere phase, il est question de l'analyse du projet et lancement des
                                        travaux pour le nouveau processus en cours de dévéloppement.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <h3><i class="fas fa-crosshairs"></i></h3>
                                </div>
                                <div class="content">
                                    <h4>Vérification de l'evolution</h4>
                                    <p>
                                        Ici, le client est notifié de l'évolution en temps réel de son projet. Il peut donc
                                        apporter des modifications ou changement dans cette étape avant la validation.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <h3><i class="fas fa-check"></i></h3>
                                </div>
                                <div class="content">
                                    <h4>Fermeture de l'étape</h4>
                                    <p>
                                        Après avoir terminé avec les vérifications et modification, l'étape en cours est
                                        fermé et nous passons à une nouvelle étape en utilisant le même processus.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Process Area -->



    <!-- Start Team Area
                                                                                                ============================================= -->
    <div id="team" class="team-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>NOTRE ÉQUIPE INNOVANTE</h2>
                        {{-- <p>
                            Learning day desirous informed expenses material returned six the. She enabled invited exposed
                            him another. Reasonably conviction solicitude me mr at discretion reasonable. Age out full gate
                            bed day lose.
                        </p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-items text-center">
                    <!-- Single Item -->
                    <div class="col-md-4 equal-height single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{asset('frontend')}}/assets/img/team/1.jpg" alt="Thumb">
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
                                <h4>Ahmed Kamal</h4>
                                <span>Co-Founder</span>
                                <h5><i class="fas fa-envelope"></i> kamal@admin.com</h5>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 equal-height single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{asset('frontend')}}/assets/img/team/2.jpg" alt="Thumb">
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
                                <h5><i class="fas fa-envelope"></i> munia@admin.com</h5>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 equal-height single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{asset('frontend')}}/assets/img/team/3.jpg" alt="Thumb">
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
                                <h5><i class="fas fa-envelope"></i> natasha@admin.com</h5>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

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
                        <!-- Single Item -->
                        <div class="col-md-4 single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="single.html"><img src="{{ asset('frontend') }}/assets/img/blog/1.jpg"
                                            alt="Thumb"></a>
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
                                            Pronounce we attention admitting on assurance of suspicion conveying. That his
                                            west quit had met till.
                                        </p>
                                        <a href="single.html">Read More <i class="fas fa-angle-right"></i></a>
                                    </div>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('frontend') }}/assets/img/team/4.jpg" alt="Author">
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
                                    <a href="single.html"><img src="{{ asset('frontend') }}/assets/img/blog/2.jpg"
                                            alt="Thumb"></a>
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
                                            Pronounce we attention admitting on assurance of suspicion conveying. That his
                                            west quit had met till.
                                        </p>
                                        <a href="single.html">Read More <i class="fas fa-angle-right"></i></a>
                                    </div>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('frontend') }}/assets/img/team/2.jpg" alt="Author">
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
                                    <a href="single.html"><img src="{{ asset('frontend') }}/assets/img/blog/3.jpg"
                                            alt="Thumb"></a>
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
                                            Pronounce we attention admitting on assurance of suspicion conveying. That his
                                            west quit had met till.
                                        </p>
                                        <a href="single.html">Read More <i class="fas fa-angle-right"></i></a>
                                    </div>
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
