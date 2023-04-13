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
                                <h5 class="card-title text-primary">Vous êtes dans l'epreuve "Comprehenssion Orale"
                                </h5>
                                <?php
                                $date_now = date('Y-m-d H:i:s');
                                // 1 our for exam
                                $date = date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s')) + 60 * 60 + 60 * 60); // 60 * 60 * 24 = 1 day
                                // echo $date . ' vs <br> ' .$date_now ;
                                ?>
                                <p>L'épreuve s'achève dans : <i><u>{{ $date }}</u></i>
                                </p>
                                <input type="hidden" id="date" value="{{ $date }}">
                                <p>Fin dans : <span class="fw-bold text-danger">
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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Examination /</span> TCF Canada</h4>
        <div class="row mb-5">
            {{-- @foreach ($tcfcs as $tcfc) --}}
            <div class="col-md-12 col-lg-12 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <form action="{{ url('/user/tcfc_co/' . $tcfc_id . '/correct' . '/' . $exam_id) }}" method="post">
                            @csrf
                            @foreach ($getExams as $index => $getExam)
                            <div class="mt-4"></div>
                                <p>Question: {{ $index + 1 }}</p>
                                <figure>
                                    <audio controls src="{{ asset('global/audio/tcf_canada/co') . '/' . $getExam->file }}">
                                        {{-- <a href="#">
                                            Download audio
                                        </a> --}}
                                    </audio>
                                </figure>
                                <h6 class="card-subtitle text-muted">{!! $getExam->details !!}</h6>
                                <small>Sélectionner la bonne reponse</small>
                                <select name="q{{ $index + 1 }}" id="" class="form-control">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            @endforeach
                            {{-- @dd($getExams) --}}
                            <input type="submit" class="btn btn-primary mt-3" value="Terminer">
                        </form>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </div>
    <!-- / Content -->
@endsection
