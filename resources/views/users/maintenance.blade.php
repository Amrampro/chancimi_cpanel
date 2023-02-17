@extends('layouts/ulayout')
@section('content')
    <!-- Content -->

    <!--Under Maintenance -->
    <div style="text-align: center">
        <div class="container-xxl container-p-y">
            <div class="misc-wrapper">
                <h2 class="mb-2 mx-2">Sous Maintenance!</h2>
                <p class="mb-4 mx-2">
                    Désolé pour la gêne occasionnée mais nous effectuons une maintenance dans cette section en ce moment.
                </p>
                <div class="mt-4">
                    <img src="{{ asset('userend') }}/img/illustrations/girl-doing-yoga-light.png" alt="girl-doing-yoga-light"
                        width="500" class="img-fluid" data-app-dark-img="illustrations/girl-doing-yoga-dark.png"
                        data-app-light-img="illustrations/girl-doing-yoga-light.png">
                </div>
            </div>
        </div>
    </div>
    <!-- /Under Maintenance -->

    <!-- / Content -->
@endsection
