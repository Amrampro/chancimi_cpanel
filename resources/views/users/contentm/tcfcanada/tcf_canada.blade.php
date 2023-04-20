@extends('layouts/ulayout')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">TCF Canada /</span> Examens</h4>

        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Félicitations {{ auth()->user()->name }}! 🎉</h5>
                        <p class="mb-3">Vous avez actuellement en cours de validité</u></p>
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
        <div class="row">
            @foreach ($tcfcs as $tcfc)
                <div class="col-md-3">
                    <div class="card mb-4">
                        <h5 class="card-header">{{ $tcfc->name }}</h5>
                        <div class="card-body">
                            <?php
                                // substr()
                                ?>
                            {!! substr($tcfc->details, 0, 90). '...' !!}

                        </div>
                        <div class="card-footer">
                            <a href="{{url('user/emp/cm/'.$tcfc->id.'/tcfcanada')}}" class="btn btn-sm btn-outline-primary">Accéder</a> || 
                            <a href="" class="btn btn-sm btn-outline-info">Modifier</a> || 
                            <a href="" class="btn btn-sm btn-outline-danger">Supprimer</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!--/ Bordered Table -->

    </div>
    <!-- / Content -->
@endsection
