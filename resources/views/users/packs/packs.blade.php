@extends('layouts/ulayout')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Packs /</span> Mes Packs</h4>

        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Félicitations {{ auth()->user()->name }}! 🎉</h5>
                        <p class="mb-3">Vous avez actuellement <u><span class="fw-bold">{{ count($vPacks) }}
                                    packs</span> en cours de validité</u></p>
                        <p class="">Après expiration, vous ne pourriez plus accéder au module d'un pack !</p>
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
                                <th>Type d'examen</th>
                                <th>Pack</th>
                                <th>Date de fin</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vPacks as $index => $vpack)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        @foreach ($ePacks as $epack)
                                            {{-- selecting the current pack --}}
                                            @if ($epack->id == $vpack->examination_pack_id)
                                                @foreach ($exams as $exam)
                                                    @if ($exam->id == $epack->exam_id)
                                                        {{ $exam->name }}
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($ePacks as $epack)
                                            {{-- selecting the current pack --}}
                                            @if ($epack->id == $vpack->examination_pack_id)
                                                {{ $epack->type }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $vpack->end_date }}</td>
                                    <td><u><a href="#">Acceder</a></u></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Bordered Table -->

    </div>
    <!-- / Content -->
@endsection
