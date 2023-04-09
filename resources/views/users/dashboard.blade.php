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
                                <a href="javascript:;" class="btn btn-sm btn-outline-primary">Retirer ma certification  </a>
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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Packs /</span> Mes Packs</h4>

        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                @foreach ($vPacks as $index => $vpack)
                    <input type="hidden" id="date" value="{{ $vpack->end_date }}">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('userend') }}/img/icons/unicons/chart-success.png"
                                            alt="chart success" class="rounded">
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">
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
                                </span>
                                <h3 class="card-title text-nowrap mb-1">
                                    @foreach ($ePacks as $epack)
                                    {{-- selecting the current pack --}}
                                    @if ($epack->id == $vpack->examination_pack_id)
                                        {{ $epack->type }}
                                    @endif
                                @endforeach    
                                </h3>
                                <p>{{ $vpack->end_date }}</p>
                                <small class="text-success fw-semibold">Utilisables</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    <!-- / Content -->
@endsection
