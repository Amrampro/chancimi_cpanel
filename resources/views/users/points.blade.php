@extends('layouts/ulayout')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Points /</span> Mes Points</h4>

        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Félicitations {{ auth()->user()->name }}! 🎉</h5>
                        <p class="mb-3">Vous avez actuellement <u><span class="fw-bold">{{ auth()->user()->points }}
                                    points</span>.</u></p>
                        <p class="">Augmentez ce nombre en commandant plus de services chez nous !</p>
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

        <!-- Bordered Table -->
        <h5 class="pb-1 mb-4">Historique</h5>
        <div class="card mb-4">
            <h5 class="card-header">Points Gagnés</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Projet</th>
                                <th>Paiement</th>
                                <th>Points</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            {{-- <tr>
                                <td>1</td>
                                <td><strong>Site vitrine</strong></td>
                                <td>Points</td>
                                <td class="text-danger fw-semibold"><i class='bx bx-down-arrow-alt'></i> - 40 pts</td>
                                <td><span class="badge bg-label-success me-1">Terminé</span></td>
                                <td><u><a href="#">Voir</a></u></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><strong>Cartes de visites</strong></td>
                                <td>Cash</td>
                                <td class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> + 7 pts</td>
                                <td><span class="badge bg-label-warning me-1">En cours</span></td>
                                <td><u><a href="#">Voir</a></u></td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Bordered Table -->

    </div>
    <!-- / Content -->
@endsection
