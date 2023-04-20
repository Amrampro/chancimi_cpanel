@extends('layouts/ulayout')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Packs /</span> Mes Packs</h4>

        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary"> {{ auth()->user()->name }}! 🎉</h5>
                        <p class="mb-3">Ici est la liste des Packs disponibles</p>
                        <a href="{{ url('user/emp/cm/packs/create') }}" class="btn btn-primary">Ajouter un pack</a>
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
        <h5 class="pb-1 mb-4">Différents Packs</h5>
        @foreach ($exams as $exam)
            <div class="card mb-4">
                <h5 class="card-header">{{ $exam->name }} (<small>{{ $exam->meaning }}</small>)</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Prix</th>
                                    <th>Caractéristiques</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ePacks as $index => $ePack)
                                    @if ($ePack->exam_id == $exam->id)
                                        <tr>
                                            {{-- <td>{{ $index + 1 }}</td> --}}
                                            <td>&#x2022; {{ $exam->name }}</td>
                                            <td>{{ $ePack->type }}</td>
                                            <td>{{ $ePack->price }}</td>
                                            <td>{{ $ePack->features }}</td>
                                            <td>
                                                <u><a
                                                        href="{{ url('user/emp/cm/packs/' . $ePack->id . '/edit') }}">Modifier</a></u>
                                                ||
                                                <u><a onclick="return confirm('Voulez-vous vraiment supprimer ce pack ?')"
                                                        href="{{ url('user/emp/cm/packs/' . $ePack->id . '/delete') }}">Supprimer</a></u>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
        <!--/ Bordered Table -->

    </div>
    <!-- / Content -->
@endsection
