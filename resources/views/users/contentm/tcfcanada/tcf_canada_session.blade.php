@extends('layouts/ulayout')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">TCF Canada /</span> {{ $tcfc->name }}</h4>

        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Détails sur l'examen</h5>
                        <hr>
                        {!! $tcfc->details !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- Bordered Table -->
        <h5 class="pb-1 mb-4">A propos</h5>
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4">
                    <h5 class="card-header">Comprehenssion Ecrite</h5>
                    <div class="card-body">
                        Nombre de questions: {{ count($tcfc_ces) }}
                    </div>
                    <div class="card-footer">
                        @if (count($tcfc_ces) == 0)
                            <a href="{{ url('user/emp/cm/tcfc_ce/'.$tcfc->id.'/add') }}"
                                class="btn btn-sm btn-outline-primary">Ajouter</a>
                        @else
                            <a href="{{ url('user/emp/cm/' . $tcfc->id . '/tcfcanada') }}"
                                class="btn btn-sm btn-outline-primary">Accéder</a> ||
                            <a href="" class="btn btn-sm btn-outline-danger">Vider les questions</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <h5 class="card-header">Comprehenssion Orale</h5>
                    <div class="card-body">
                        Nombre de questions: {{ count($tcfc_cos) }}
                    </div>
                    <div class="card-footer">
                        @if (count($tcfc_cos) == 0)
                            <a href="{{ url('user/emp/cm/' . $tcfc->id . '/tcfcanada') }}"
                                class="btn btn-sm btn-outline-primary">Ajouter</a>
                        @else
                            <a href="{{ url('user/emp/cm/' . $tcfc->id . '/tcfcanada') }}"
                                class="btn btn-sm btn-outline-primary">Accéder</a> ||
                            <a href="" class="btn btn-sm btn-outline-danger">Vider les questions</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <h5 class="card-header">Expression Ecrite</h5>
                    <div class="card-body">
                        Nombre de questions: {{ count($tcfc_ees) }}
                    </div>
                    <div class="card-footer">
                        @if (count($tcfc_ees) == 0)
                            <a href="{{ url('user/emp/cm/' . $tcfc->id . '/tcfcanada') }}"
                                class="btn btn-sm btn-outline-primary">Ajouter</a>
                        @else
                            <a href="{{ url('user/emp/cm/' . $tcfc->id . '/tcfcanada') }}"
                                class="btn btn-sm btn-outline-primary">Accéder</a> ||
                            <a href="" class="btn btn-sm btn-outline-danger">Vider les questions</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <h5 class="card-header">Expression Orale</h5>
                    <div class="card-body">
                        Nombre de questions: RAS
                    </div>
                    <div class="card-footer">
                            <a href="#" class="btn btn-sm btn-outline-primary disabled">Ajouter</a>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Bordered Table -->

    </div>
    <!-- / Content -->
@endsection
