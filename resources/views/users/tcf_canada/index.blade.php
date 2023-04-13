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
                                <h5 class="card-title text-primary">Pack
                                    {{$exam_pack->type}}
                                    du {{$examination->name}} 🎉
                                </h5>
                                <p>Votre pack est valide jusqu'au : <i><u>{{ $vpack->end_date }}</u></i>
                                </p>
                                <input type="hidden" id="date" value="{{ $vpack->end_date }}">
                                <p>Ce pack expire dans : <span class="fw-bold text-danger">
                                        <span id="days">-</span>Jrs
                                        <span id="hours">-</span>Hrs
                                        <span id="minutes">-</span>Mins
                                        <span id="seconds">-</span>Secs
                                    </span>
                                </p>
                                <a href="javascript:;" class="btn btn-sm btn-outline-primary">Retirer ma certification </a>
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
        <div class="row mb-5">
        @foreach ($tcfcs as $tcfc)
            <div class="col-md-3 col-lg-3 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{$tcfc->name}}</h5>
                        <h6 class="card-subtitle text-muted">65 points</h6><br>
                        <a href="{{url('user/tcfc/' . $tcfc->id)}}" class="btn btn-outline-primary">Voir</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    <!-- / Content -->
@endsection
