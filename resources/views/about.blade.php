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
                        Nous sommes une startup du domaine informatique qui, depuis sa création, a pour but principal de
                        contribuer dans l'innovation numérique notament en apportant des solutions informatiques aux
                        entreprises, quelque soit leur domaine d'activité.
                    </p>
                    </p>
                    Depuis sa création en 2019, la structure a été en mesure de fournir une large gamme de
                    services et de produits informatiques pour les clients. De nos jours, la structure est en majeure partie
                    composée des ingénieurs de travaux informatiques et d'autres professionnels dans leurs
                    différents domaines. Nous comptons à ce jour de multiples projets d'informatisation(numérisation,
                    digitalisation) d'entreprise déployées jusqu'en Occident. Nous nous occupons principalement des
                    prestations de services informatiques tels que des sites Web, des logiciels de gestion,
                    des applications Web et mobiles, d'autres outils Web,
                    de la conception graphique (dépliants, cartes de visite, Flyers,...) et plus encore.
                    Notre objectif principal est de vous fournir le meilleur service possible qui
                    répond à vos besoins et à vos exigences.
                    </p>
                    <p>
                        Par allieurs, nous offrons aussi des formations telles que programmation
                        informatique, bureautique, montage des visuels graphiques.
                    </p>
                    <ul>
                        <li>Site web, logiciels, etc.</li>
                        <li>Créations de visuels graphiques</li>
                        <li>Formation en informatique (programmation informatique, bureautique,etc.)</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 thumb">
                    <img src="{{ asset('frontend') }}/assets/img/illustrations/1.png" alt="Thumb">
                </div>
                <div class="col-md-12 col-lg-12 fun-facts">
                    <h3>Outstanding annual results from our awesome Team</h3>
                    <div class="row">
                        <div class="col-md-3 col-sm-3 item">
                            <div class="fun-fact clients">
                                <div class="timer" data-to="30" data-speed="5000">30</div>
                                <span class="medium">Clients</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 item">
                            <div class="fun-fact clients">
                                <div class="timer" data-to="45" data-speed="5000">5</div>
                                <span class="medium">Projets</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 item">
                            <div class="fun-fact">
                                <div class="timer" data-to="98" data-speed="5000">98</div>
                                <span class="medium">Taux de satisfaction</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 item">
                            <div class="fun-fact clients">
                                <div class="timer" data-to="4200" data-speed="5000">4200</div>
                                <span class="medium">Followers</span>
                            </div>
                        </div>
                        {{-- <div class="col-md-3 col-sm-3 item">
                            <div class="fun-fact clients">
                                <div class="timer" data-to="100" data-speed="5000">100</div>
                                <span class="medium">Followers</span>
                            </div>
                        </div> --}}
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
                        <h2>NOS SERVICES</h2>
                        <p>
                            Nous fournissons des services de qualité à nos clients et
                            nous travaillons avec une grande passion.
                            Ne vous souciez plus de vos problèmes en TIC, faites nous
                            confiance nous vous facilitons la vie. Allez-y, Jetez un coup d'œil !
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
                                    Nous conçevons vos sites web et logiciels (de gestion ou autres...) et les gérons pour
                                    vous sur la base d'un contrat.
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
                                    Dans le soucis de transmettre les connaissances et augmenter le potentiel humain dans
                                    le domaine des TICs,
                                    Notre entreprise oeuvre pour la formation dans les différents angles de l'informatique
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
                                    Il s'agit ici de la confection des Flyers, Cartes de visites, CVs, Bannières, brochures,
                                    Stickers(Auto-collants), Roll-up, Charte graphique, affiches publicitaires...
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
                                    Votre visibilité sur le Web: Grand atout stratégique à ne pas négliger.
                                    Nous dévéloppons des stratégies sur vos plateformes en ligne: Des posts
                                    sponsorisés pour plus de clients(locaux ou internationaux) et ventes,...
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

    <!-- Start Work Process Area
                                                                                                        ============================================= -->
    <div id="process" class="work-process-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Processus De Travail</h2>
                        <p>
                            Nous utilisons la méthode SCRUM car cela permet au client d'être informé de l'évolution de son
                            projet
                            étape après étape. Cette méthode facilite la détection des erreurs
                            ou zones d'ombres à temps et permet de corriger et adapter selon les besoins du client pour un
                            gain de temps optimal. <i><u><a href="#">En savoir plus sur cette méthode...</a></u></i>
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
                                        Le client est notifié de l'évolution en temps réel de son projet. Il peut donc y
                                        apporter des modifications ou changements dans cette étape avant la validation.
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
                                        Après avoir terminé avec les vérifications et modifications, l'étape en cours est
                                        fermée et nous passons à une nouvelle étape en utilisant le même processus.
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
                    @foreach ($teams as $team)
                        <div class="col-md-4 equal-height single-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('frontend') }}/assets/img/team/{{$team->photo}}" alt="Thumb">
                                    {{-- <ul>
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
                                    </ul> --}}
                                </div>
                                <div class="info">
                                    <h4>{{$team->nom}}</h4>
                                    <span>{{$team->role}}</span>
                                    <h5><i class="fas fa-envelope"></i> {{$team->email}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                    @foreach ($posts as $post)
                        <!-- Single Item -->
                        <div class="col-md-4 single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{  url('detail/'.Str::slug($post->title).'/'.$post->id) }}"><img
                                            src="{{ asset('/frontend/assets/img/blog/thumb') . '/' . $post->thumb }}"
                                            alt="Thumb"></a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <div class="date">
                                        {{ $post->created_at->format('d M, Y') }}
                                    </div>
                                    <h4>
                                        <a
                                            href="{{  url('detail/'.Str::slug($post->title).'/'.$post->id) }}">{{ implode(' ', array_slice(explode(' ', $post->title), 0, 4)) }}...</a>
                                    </h4>
                                    <p>
                                        {{ implode(' ', array_slice(explode(' ', $post->detail), 0, 10)) }}...
                                    </p>
                                    <a href="{{  url('detail/'.Str::slug($post->title).'/'.$post->id) }}">Lire Plus <i
                                            class="fas fa-angle-right"></i></a>
                                </div>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('frontend') }}/assets/img/team/gounbam.jpg"
                                                    alt="Author">
                                                <span>Admin</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-comments"></i>
                                                <span>{{ count($post->comments) }}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-eye"></i>
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
    <!-- End Blog Area -->
@endsection
