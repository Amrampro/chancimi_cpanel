@extends('layouts/layout')
@section('content')
    <!-- Start Breadcrumb
        ============================================= -->
    {{-- <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url({{asset('frontend')}}/assets/img/banner/12.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Error Page</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">404</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Breadcrumb -->

    <!-- Start 404
        ============================================= -->
    <div class="error-page-area bg-gray text-center default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="content">
                        <h1>4<span>0</span>4</h1>
                        <h2>Page non trouvée !</h2>
                        <p>
                            Nous avons cherché partout mais nous n'avons pas trouvé ce que vous cherchiez. Trouvons un meilleur endroit où aller
                        </p>
                        <a class="btn btn-theme border btn-md" href="{{url('/')}}">Retour à l'Accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 -->
@endsection
