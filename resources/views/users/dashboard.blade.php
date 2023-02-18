@extends('layouts/ulayout')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Bienvenu(e) {{ auth()->user()->name }}! 🎉</h5>
                                <p class="mb-4">La santé de votre compte est de <span class="fw-bold">82%</span>.
                                    Vérifiez votre nouveau badge dans votre profil.</p>
                                <a href="javascript:;" class="btn btn-sm btn-outline-primary">Mon Badge</a>
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
            <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('userend') }}/img/icons/unicons/chart-success.png"
                                            alt="chart success" class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                            <a class="dropdown-item" href="{{ url('/user/use_points') }}">Utiliser</a>
                                            <a class="dropdown-item" href="{{ url('/user/my_points') }}">Historique</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Points</span>
                                <h3 class="card-title text-nowrap mb-1">{{ auth()->user()->points }}</h3>
                                <small class="text-success fw-semibold">Utilisable</small>
                                {{-- <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +28.42%</small> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('userend') }}/img/icons/unicons/wallet-info.png"
                                            alt="Credit Card" class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                            <a class="dropdown-item" href="#">Faire un retrait</a>
                                            <a class="dropdown-item" href="#">Détails</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <span>Sales</span> --}}
                                <span class="fw-semibold d-block mb-1">Revenus</span>
                                <h3 class="card-title text-nowrap mb-1">0</h3>
                                {{-- <small class="text-success fw-semibold"> ( Monnaie )</small> --}}
                                <small class="text-danger fw-semibold"> ( Indisponible )</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- / Content -->
@endsection
