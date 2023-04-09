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
                                <h1>Nos <span>Services</span> de qualité</h1>
                                <p>
                                    Vous souhaitez connaitre nos différents services offerts et le tarifaire, vous êtes au
                                    bon endroit.
                                    Ici nous allons vous présenter nos différentes prestations et les prix y afférents.
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
                                            <h2>Développement site web et logiciels</h2>
                                        </div>
                                        <p>
                                            L'un des objectifs d'une entreprise c'est la visibilité. A l'ère du numérique,
                                            internet est un atout non négligeable; C'est la raison pour laquelle pour vous,
                                            entreprises ou particuliers, nous développons vos sites web sur mesure
                                            pour faciliter votre installation sur l'echelle globale.
                                        </p>
                                        <p>
                                            Par ailleurs, nous sommes conscients du fait que la structure pourrait
                                            rencontrer
                                            des difficultés en interne. Pour cela, nous proposons également la création des
                                            logiciels de gestion d'entreprise (logiciel de gestion du personnel,
                                            meeting, vente, rappel en structure...).
                                        </p>
                                        <ul>
                                            <li>Site web (Vitrine et autre)</li>
                                            <li>Logiciel de gestion</li>
                                            <li>E-commerce, E-learning,...</li>
                                            {{-- <li>Middleton principle</li> --}}
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
                                            Comme le précédent, celui-ci peut être pour un particulier ou une entreprise, un
                                            projet ou un évenement personnel ou professionnel. Nous fournissons des Flyers,
                                            Bannières,
                                            CVs, Cartes de visites, Roll-up, Sticker commerciaux,...
                                        </p>
                                        <p>
                                            Vous pouvez consulter nos différentes réalisations à partir de la section blog
                                            et sur
                                            nos différentes plateformes numériques.
                                        </p>
                                        <ul>
                                            <li>Cartes de visites</li>
                                            <li>Flyers</li>
                                            <li>Roll-up</li>
                                            <li>Bannières,...</li>
                                        </ul>
                                        {{-- <a class="btn btn-theme border btn-md" href="#">Get Started</a> --}}
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
                                            <h2>Formations en TICs</h2>
                                        </div>
                                        <p>
                                            {{-- Dans le soucis de transmettre les connaissances et augmenter le potentiel humain
                                            dans le domaine des TICs,
                                            Notre entreprise oeuvre pour la formation dans les différents angles de
                                            l'informatique
                                            tels que... --}}

                                            Nous avons été actif dans la transmission
                                            de notre savoir-faire car pour nous, la connaissance ne se donne pas
                                            simplement mais se multiplie.
                                        </p>
                                        <p>
                                            Notre équipe constituée principalement d'ingénieurs dans leurs domaines offre
                                            des
                                            formations en programmation informatique, montage visuel (Adobe Photoshop,...),
                                            sécretariat bureautique (suite office,...), etc.
                                        </p>
                                        <ul>
                                            <li>Programmation informatique</li>
                                            <li>Infographie</li>
                                            <li>Sécretariat bureatique</li>
                                            {{-- <li>Middleton principle</li> --}}
                                        </ul>
                                        {{-- <a class="btn btn-theme border btn-md" href="#">Get Started</a> --}}
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
                        <h2>Nos offres</h2>
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
                                <h4>Site web</h4>
                                <p>
                                    Vitrine, dynamique, ONG, e-commerce, e-learning,...
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
                                <h4>Dévéloppement de logiciels</h4>
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
                                    Maintenance des logiciels, analyse et reparation des systèmes,...
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
                                <h4>Marketing digital</h4>
                                <p>
                                    Promotion de votre activité sur des plateformes telles que Facebook, Twitter,...
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
                            <b>Wow! vous commandez un service et nous vous payons pour avoir commandé ce service !</b>
                            En étant un client, chaque travail que vous commandez chez nous vous donne droit à un certain
                            nombre de
                            points. Ainsi, chaque nombre de point correspond à un palier et les différents paliers
                            présentent des
                            bonus divers à savoir : service gratuit, réduction des prix et bien d'autres.
                        </p>
                        <h4>Pour ceux qui nous recommandent</h4>
                        <p>
                            Une toute autre façon et assez simple d'ailleurs de gagner de l'argent avec nous est de diriger
                            des clients vers nous. Vous recevez une commission sur chaque projet que vous dirigez vers nous;
                            Pour chaque redirection vous obtenez automatiquement <b>10%</b> par projet.
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
                    <img src="{{ asset('frontend') }}/assets/img/illustrations/2.svg" alt="Thumb">
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
                                            Quels sont les Documents remis au client pour un service ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>
                                            Le client a droit aux documents suivants tout au long du travail :
                                            Questionnaire, Dévis, proforma, contrat, facture, reçu, un disque contenant
                                            le code source/noyau du projet, Une fiche de nos différentes prestations,
                                            une fiche informative du projet.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                            Comment assurez-vous l'intégrité des données clients ?
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
                            </div> --}}

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac3">
                                            Quel est votre processus complet de travail ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Nous effectuons nos travaux par étape: <br>
                                            <b><u>Etape 1:</u></b> Le client remplis un questionnaire informative sur ses
                                            attentes par rapport au service voulu.
                                            Après étude du questionnaire, un dévis lui est remis. Suite à un accord avec le
                                            client, une proforma
                                            lui est envoyé après vérification et approbation, il est tenu de verser un
                                            pourcentage du montant total. <br>
                                            <b><u>Etape 2:</u></b> Début du travail et notification constante sur
                                            l'évolution du projet afin que le client
                                            y apporte progressivement des modifications. <br>
                                            <b><u>Etape 3:</u></b> A la fin du projet, le client s'acquitte de la totalité
                                            de son paiement.
                                            Le projet lui est livré avec les documents relatifs tels que la facture,
                                            un CD contenant le code source/noyau du projet, une fiche de nos différentes
                                            prestations et
                                            une fiche informative du projet.
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
                        <h2>AVIS DES CLIENTS</h2>
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
