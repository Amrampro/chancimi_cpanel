@extends('layouts/ulayout')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">
                                    Vous êtes dans "<u>{{ $tcfc->name }}</u>"
                                </h5>
                                </p>
                                <p>Ce pack expire dans : <span class="fw-bold text-danger">
                                        <span id="days">-</span>Jrs
                                        <span id="hours">-</span>Hrs
                                        <span id="minutes">-</span>Mins
                                        <span id="seconds">-</span>Secs
                                    </span>
                                </p>
                                <a href="javascript:;" class="btn btn-sm btn-outline-primary">Débuter la composition</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('userend') }}/img/illustrations/man-with-laptop-light.png" height="140"
                                    alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.html">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">TCF Canada /</span> Sessions</h4>
        <div class="row">
            <div class="col-md-3 col-lg-3 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Compréhension Ecrite</h5>
                        <h6 class="card-subtitle text-muted">39 Questions</h6>
                        <span class="text-info">Durée de l'épreuve: <u>1 Heure</u></span>
                        mark if wrote
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Compréhension Orale</h5>
                        <h6 class="card-subtitle text-muted">39 Questions</h6>
                        <span class="text-info">Durée de l'épreuve: <u>1 Heure</u></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Expression Ecrite</h5>
                        <h6 class="card-subtitle text-muted">3 Sujets</h6>
                        <span class="text-info">Durée de l'épreuve: <u>1 Heure</u></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Expression Orale</h5>
                        <h6 class="card-subtitle text-muted">3 Sujets</h6>
                        <span class="text-info">Durée de l'épreuve: <u>15 Mins</u></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <h4 class="card-header">A propos de la session "<u>{{ $tcfc->name }}</u>"</h4>
            <div class="row g-0">
                {{-- <div class="col-md-6 p-4">
                    {!! $tcfc->details !!}
                </div> --}}
                <h5 class="card-body">{!! $tcfc->details !!}</h5>
                <div class="col-lg-4 col-md-6 p-4">
                    <div class="mt-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalToggle">
                            Débuter/Continuer l'epreuve
                        </button>

                        <!-- Modal 1-->
                        <div class="modal fade" id="modalToggle" aria-labelledby="modalToggleLabel" tabindex="-1"
                            style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-danger" id="modalToggleLabel">Lisez attentivement</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul>
                                            <li>Si vous avez au préalable une épreuve inachevé, vous serez automatiquement redirigé vers cette epreuve</li>
                                            <li>Veuillez pendant l'examen ne pas quitter la session car cela peut entrainer une perte de donné sur l'epreuve en cours</li>
                                            <li>Lors de l'examen veuillez prendre en compte le temps imparti car au dela de ce delai depassé, vous serez attribué 0 aux questions non repondu</li>
                                            <li>Si vous avez un pack standard, à la fin de cet examen vous sera accordé un certificat !</li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ url('user/tcfc/' . $tcfc->id . '/write') }}" class="btn btn-primary">Débuter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- / Content -->
@endsection
