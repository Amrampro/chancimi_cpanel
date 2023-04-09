@extends('layouts/ulayout')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Mon Compte /</span> Paramètres
        </h4>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>
                            Compte</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/user/notifications') }}"><i
                                class="bx bx-bell me-1"></i> Notifications</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="/user/connections"><i class="bx bx-link-alt me-1"></i>
                            Connexions</a></li> --}}
                </ul>
                <div class="card mb-4">
                    <h5 class="card-header">Informations Personnelles</h5>
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
                        <form action="{{ url('user/settings/' . auth()->user()->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <img src="{{ asset('userend/img/avatars') . '/' . auth()->user()->photo }}"
                                        alt="{{ auth()->user()->name }}-avatar" class="d-block rounded" height="100"
                                        width="100" id="uploadedAvatar" />
                                    <div class="button-wrapper">
                                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                            <span class="d-none d-sm-block">Changer la photo</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="hidden" name="post_image" value="{{ auth()->user()->photo }}" />
                                            <input type="file" id="upload" class="account-file-input" hidden
                                                accept="image/png, image/jpeg" name="post_image" />
                                        </label>
                                        <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                            <i class="bx bx-reset d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Vider</span>
                                        </button>

                                        <p class="text-muted mb-0">Uniquement JPG, GIF ou PNG acceptés. Taille Max 800K
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0">
                            <div class="row">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input class="form-control" type="text" id="firstName" name="name"
                                        value="{{ auth()->user()->name }}" autofocus />
                                </div>
                                {{-- <div class="mb-3 col-md-6">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input class="form-control" type="text" name="lastName" id="lastName"
                                        value="Doe" />
                                </div> --}}
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="text" id="email" name="email"
                                        value="{{ auth()->user()->email }}" placeholder="john.doe@example.com" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="organization" class="form-label">Organization</label>
                                    <input type="text" class="form-control" id="organization" name="organization"
                                        placeholder="GoulBAM Enterprises" value="{{ auth()->user()->organisation }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">CMR (+237)</span>
                                        <input type="text" id="phoneNumber" name="tel" class="form-control"
                                            placeholder="698 85 47 52" value="{{ auth()->user()->tel }}" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">Adresse</label>
                                    <input type="text" class="form-control" id="address" name="adresse"
                                        placeholder="Address" value="{{ auth()->user()->adresse }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="state" class="form-label">Ville</label>
                                    <input class="form-control" type="text" id="state" name="ville"
                                        placeholder="Douala" value="{{ auth()->user()->ville }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="country">Pays de résidence</label>
                                    <select id="country" class="select2 form-select" name="pays">
                                        <option value="Cameroun">Cameroun</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                        <option value="China">China</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Russia">Russian Federation</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates
                                        </option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="language" class="form-label">Langue</label>
                                    <select id="language" class="select2 form-select" name="langue">
                                        <option value="1">Français</option>
                                        <option value="2">Anglais</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="currency" class="form-label">Monnaie préféré</label>
                                    <select id="currency" class="select2 form-select" name="monnaie">
                                        <option value="1">Euro</option>
                                        <option value="2">USD</option>
                                        <option value="3">Pound</option>
                                        <option value="bitcoin">Bitcoin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Enregistrer</button>
                                <button type="reset" class="btn btn-outline-secondary">Annuler</button>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>
                {{-- <div class="card">
                    <h5 class="card-header">Supprimer le compte</h5>
                    <div class="card-body">
                        <div class="mb-3 col-12 mb-0">
                            <div class="alert alert-warning">
                                <h6 class="alert-heading fw-bold mb-1">Voulez-vous vraiment supprimer
                                    votre compte?</h6>
                                <p class="mb-0">Une fois que vous avez supprimé votre compte, il n’y a pas de retour en
                                    arrière.</p>
                            </div>
                        </div>
                        <form id="formAccountDeactivation" onsubmit="return false">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="accountActivation"
                                    id="accountActivation" />
                                <label class="form-check-label" for="accountActivation">Je confirme la désactivation de
                                    mon compte</label>
                            </div>
                            <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                data-bs-placement="top" data-bs-html="true"
                                title="<span>Action impossible !</span>">
                                <i class='bx bx-trash bx-xs'></i> Désactivater
                            </button>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>



    </div>
    <!-- / Content -->
@endsection
