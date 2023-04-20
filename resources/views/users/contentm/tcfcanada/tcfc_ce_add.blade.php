@extends('layouts/ulayout')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">TCF Canada /</span> {{ $tcfc->name }}
        </h4>

        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <h5 class="card-header">Informations Sur la pack</h5>
                    <div class="card-body">
                        <p class="text-danger" role="alert">
                            Remplissez la totalité des champs avant de valider. Un champ vide annulera tout l'opération !
                        </p>
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (Session::has('errors'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('errors') }}
                            </div>
                        @endif
                        <form action="{{ url('user/emp/cm/tcfc_ce/'.$tcfc->id.'/addq') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="tcfc_id" value="{{ $tcfc->id }}">
                            @for ($i = 1; $i <= 39; $i++)
                                <input type="hidden" name="q{{ $i }}" value="q{{ $i }}">
                                <div class="mb-3 col-md-12">
                                    <label for="details" class="form-label">Question {{ $i }}</label>
                                    <textarea class="form-control" name="question{{$i}}" id="mytextarea" cols="20" rows="10"></textarea>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="type" class="form-label">Reponse Juste</label>
                                    <select id="answer" class="select2 form-select" name="answer{{$i}}">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                                </div>
                            @endfor
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Enregistrer</button>
                                <button type="reset" class="btn btn-outline-secondary">Annuler</button>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>
            </div>
        </div>



    </div>
    <!-- / Content -->
@endsection
