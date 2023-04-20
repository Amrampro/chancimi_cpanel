@extends('layouts/ulayout')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Packs /</span> Ajouter un pack
        </h4>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Informations Sur la pack</h5>
                    <div class="card-body">
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
                        <form action="{{ url('user/emp/cm/packs/' . $ePack->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3 col-md-12">
                                <label for="language" class="form-label">Examens</label>
                                <select id="language" class="select2 form-select" name="exam">
                                    @foreach ($exams as $exam)
                                        {{-- selecting the current category --}}
                                        @if ($exam->id == $ePack->exam_id)
                                            <option selected value="{{ $exam->id }}">{{ $exam->name }}</option>
                                        @else
                                            <option value="{{ $exam->id }}">{{ $exam->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="type" class="form-label">Type</label>
                                <input class="form-control" type="text" id="type" name="type"
                                    value="{{ $ePack->type }}" autofocus />
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="prix" class="form-label">Prix</label>
                                <input class="form-control" type="number" id="prix" name="price"
                                    value="{{ $ePack->price }}" />
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="carac" class="form-label">Caractéristique </label>
                                <p><small>(N/B: SEPARER AVEC UNE VIRGULE ",". Ex: caractéristique1, caractéristique2,
                                        caractéristique3)</small></p>
                                <input class="form-control" type="text" id="carac" name="carac"
                                    value="{{ $ePack->features }}"
                                    placeholder="Ex: caractéristique1, caractéristique2, caractéristique3" />
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="details" class="form-label">Détails du pack</label>
                                <textarea class="form-control" name="detail" id="mytextarea" cols="30" rows="10">{!! $ePack->details !!}</textarea>
                            </div>
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
