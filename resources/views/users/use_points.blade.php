@extends('layouts/ulayout')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Mes Points /</span> Utiliser Les Points</h4>

        <!-- Sites Web -->
        <h5 class="pb-1 mb-4">Sites Internet</h5>
        <div class="row mb-5">
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Statique</h5>
                        <h6 class="card-subtitle text-muted">50 points</h6>
                    </div>
                    <img class="img-fluid" src="{{ asset('userend') }}/img/elements/2.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">Site vitrine/présentation, meilleur pour les entreprises qui sont dans leur
                            debuts.</p>
                        <a href="javascript:void(0)" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalToggle">Commander</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Semi-dynamique</h5>
                        <h6 class="card-subtitle text-muted">65 points</h6>
                    </div>
                    <img class="img-fluid" src="{{ asset('userend') }}/img/elements/2.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">Site avec un blog et partie admin. Parfait pour les ONGs,...</p>
                        <a href="javascript:void(0)" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalToggle">Commander</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Dynamique</h5>
                        <h6 class="card-subtitle text-muted">100 points</h6>
                    </div>
                    <img class="img-fluid" src="{{ asset('userend') }}/img/elements/2.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">Avec une section utilisateur. Parfait pour les sites de e-commerce,
                            e-learning,...</p>
                        <a href="javascript:void(0)" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalToggle">Commander</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sites Web -->

        <!-- Logiciels -->
        <h5 class="pb-1 mb-4">Logiciels</h5>
        <div class="col-md mb-5 mb-md-0">
            <div class="card">
                <h5 class="card-header">Logiciels de gestion,...</h5>
                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        Bientôt Disponible
                    </div>
                </div>
            </div>
        </div>
        <!-- Logiciels -->

        <!-- Graphique -->
        <h5 class="pb-1 mb-4 mt-5">Médias graphique</h5>
        <div class="row mb-5">
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Cartes de visites</h5>
                        <h6 class="card-subtitle text-muted">100 pour 5 points</h6>
                    </div>
                    <img class="img-fluid" src="{{ asset('userend') }}/img/elements/2.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <a href="javascript:void(0)" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalToggle">Commander</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Flyers</h5>
                        <h6 class="card-subtitle text-muted">5 points</h6>
                    </div>
                    <img class="img-fluid" src="{{ asset('userend') }}/img/elements/2.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <a href="javascript:void(0)" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalToggle">Commander</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">CVs</h5>
                        <h6 class="card-subtitle text-muted">5 points</h6>
                    </div>
                    <img class="img-fluid" src="{{ asset('userend') }}/img/elements/2.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <a href="javascript:void(0)" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalToggle">Commander</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Graphique -->

        <!-- Message Modal d'indisponibilité -->
        <div class="col-lg-4 col-md-6">
            {{-- <small class="text-light fw-semibold">Toggle Between Modals</small>
            <div class="mt-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalToggle">
                    Launch modal
                </button> --}}

                <!-- Modal 1-->
                <div class="modal fade" id="modalToggle" aria-labelledby="modalToggleLabel" tabindex="-1"
                    style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalToggleLabel">Acheter ce service avec mes points</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Bientôt disponible ! Contacter nous sur notre page de contact pour ce service. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Message Modal d'indisponibilité -->

    </div>
    <!-- / Content -->
@endsection
