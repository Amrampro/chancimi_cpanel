@extends('layouts/ulayout')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Support /</span> Ecrivez-nous</h4>


        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Signalez un problème/Donner une suggestion</h5>
                    <small class="text-muted float-end">Temps maximum de réponse: 24hrs</small>
                </div>
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
                    <form method="post" action="{{url('/user/support')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-2 mb-3">
                            <div class="col mb-0">
                                <label for="nameWithTitle" class="form-label">Nom</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input value=" {{ auth()->user()->name }}" disabled type="text" class="form-control"
                                        id="basic-icon-default-fullname" placeholder="Nom" aria-label="Nom"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <div class="col mb-0">
                                <label for="emailWithTitle" class="form-label">Email</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                    <input type="text" id="basic-icon-default-email" class="form-control"
                                        value=" {{ auth()->user()->email }}" disabled aria-label="email"
                                        aria-describedby="basic-icon-default-email2" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-phone">Tel</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"><i
                                        class="bx bx-phone"></i></span>
                                <input type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                                    placeholder="658 799 8941" aria-label="658 799 8941"
                                    aria-describedby="basic-icon-default-phone2" name="tel" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-message">Message <small
                                    class="text-danger">*</small></label>
                            <div class="input-group input-group-merge speech-to-text">
                                <textarea name="message" id="messageWrite" class="form-control" placeholder="Ecrivez ou faites un voice" rows="5"></textarea>
                                <span class="input-group-text">
                                    <i class='bx bx-microphone cursor-pointer text-to-speech-toggle'></i>
                                </span>
                            </div>
                            <div class="form-text"> <strong class="text-danger">Important : </strong> L'écriture par voice
                                marche uniquement dans la langue anglaise! </div>
                        </div>
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <input type="hidden" name="name" value="{{ auth()->user()->name }}">
                        <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>


        <div class="card">
            <h5 class="card-header">Ecrivez-nous sur whatsapp</h5>
            <div class="card-body">
                <div class="mb-3 col-12 mb-0">
                    <div class="alert alert-info">
                        <h6 class="alert-heading fw-bold mb-1">Vous aimeriez avoir une reponse plus rapide ?</h6>
                        <p class="mb-0">Ecrivez-nous directement sur whatsapp en cliquand sur ce bouton et causez avec un agent...</p>
                    </div>
                </div>
                <a href="#" class="btn btn-success">Ecrire sur whatsapp</a>
            </div>
        </div>

    </div>
    <!-- / Content -->
@endsection
