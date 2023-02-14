@extends('layouts/layout')
@section('content')
    <!-- Start Contact
        ============================================= -->
    <div id="contact" class="contact-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Contactez nous</h2>
                        <p>
                            Contactez le principal fournisseur d'assistance et de services informatiques des
                            entreprises.Nous offrons les meilleures solutions et services informatiques pour vous aider.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="contact-items">

                    <!-- End Thumb -->
                    <div class="col-md-4 thumb">
                        <img src="{{ asset('frontend') }}/assets/img/illustrations/5.png" alt="Thumb">
                    </div>
                    <!-- End Thumb -->

                    <!-- Contact Form -->
                    <div class="col-md-7 col-md-offset-1 contact-form">
                        <form action="#" method="POST" class="contact-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Nom"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*"
                                            type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Tel"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Message *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit">
                                        Envoyer Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                        <h3>Pour toute question contactez notre <br>centre d'info 24/7
                            <span>+237 696 89 67 58</span></h3>
                    </div>
                    <!-- End Contact Form -->
                </div>

                <!-- Address List -->
                <div class="address-list text-center col-md-12">
                    <div class="item-box">
                        <!-- Single Item -->
                        <div class="col-md-4 equal-height single-item">
                            <div class="item">
                                <i class="fas fa-map-marked-alt"></i>
                                <h4>Localisation</h4>
                                <p>
                                    22 Baker Street,London, United Kingdom, W1U 3BW
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 equal-height single-item">
                            <div class="item">
                                <i class="fas fa-phone"></i>
                                <h4>Emergency Case</h4>
                                <h2>+237 696 89 67 58</h2>
                                <h2>+237 696 89 67 58</h2>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 equal-height single-item">
                            <div class="item">
                                <i class="fas fa-envelope-open"></i>
                                <h4>Email</h4>
                                <p>
                                    info@yourdomain.com<br>admin@yourdomain.com
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
                <!-- End Address List -->

            </div>
        </div>
    </div>
    <!-- End Contact -->
@endsection
