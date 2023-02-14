@extends('layouts/layout')
@section('content')
    <!-- Start Pricing Area
                                                ============================================= -->
    <div id="pricing" class="pricing-area default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Site Internet (Application web)</h2>
                        <p>
                            Le meilleur moyen pour une entreprise de se faire connaître est par le biais d'un site Internet.
                            Il ne s'agit pas seulement d'avoir un bon site web, c'est aussi être visible auprès de votre
                            public cible !
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="pricing-navs col-md-12">
                    <!-- Tab Nav -->
                    <ul class="nav nav-pills">
                        <li class="active">
                            <a data-toggle="tab" href="#simpleweb" aria-expanded="true">
                                Simple
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#annualweb" aria-expanded="false">
                                Contrat Annuel
                            </a>
                        </li>
                    </ul>
                    <!-- End Tab Nav -->
                </div>

                <div class="pricing-content col-md-12">
                    <div class="row">
                        <!-- Start Tab Content -->
                        <div class="tab-content">
                            <!-- Tab Single Item -->
                            <div id="simpleweb" class="tab-pane fade active in">
                                <div class="col-md-12">
                                    <div class="pricing-items">
                                        <div class="col-lg-4 col-md-4 single-item">
                                            <div class="pricing-item">
                                                <ul>
                                                    <li class="pricing-header">
                                                        <h4>Statique</h4>
                                                        <h2><sup>XAF</sup>45.000</h2>
                                                        <span>30 points</span>
                                                    </li>
                                                    <li><i class="fas fa-check"></i> 4 pages (Max)</li>
                                                    <li><i class="fas fa-times"></i> Base de données</li>
                                                    <li><i class="fas fa-times"></i> Page d'Actualité (Blog page)</li>
                                                    <li><i class="fas fa-times"></i> Support</li>
                                                    <li><i class="fas fa-times"></i> Compte admin</li>
                                                    <li><i class="fas fa-times"></i> Section utilisateur</li>
                                                    <li><i class="fas fa-check"></i> Documetation</li>
                                                    <li><i class="fas fa-check"></i> Fichier compressé</li>
                                                    <li class="footer">
                                                        <a class="btn circle btn-theme border btn-sm" href="#">Choisir
                                                            ce plan</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 single-item">
                                            <div class="pricing-item active">
                                                <ul>
                                                    <li class="pricing-header">
                                                        <h4>Standard</h4>
                                                        <h2><sup>XAF</sup>60.000+</h2>
                                                        <span>45 points</span>
                                                    </li>
                                                    <li><i class="fas fa-check"></i> 6 pages +</li>
                                                    <li><i class="fas fa-check"></i> Base de données</li>
                                                    <li><i class="fas fa-check"></i> Page d'Actualité (Blog page)</li>
                                                    <li><i class="fas fa-times"></i> Support</li>
                                                    <li><i class="fas fa-check"></i> Compte admin</li>
                                                    <li><i class="fas fa-times"></i> Section utilisateur</li>
                                                    <li><i class="fas fa-check"></i> Documetation</li>
                                                    <li><i class="fas fa-check"></i> Fichier compressé</li>
                                                    <li class="footer">
                                                        <a class="btn circle btn-theme effect btn-sm" href="#">Choisir
                                                            ce plan</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 single-item">
                                            <div class="pricing-item">
                                                <ul>
                                                    <li class="pricing-header">
                                                        <h4>Avancé</h4>
                                                        <h2><sup>XAF</sup>90.000+</h2>
                                                        <span>60 points</span>
                                                    </li>
                                                    <li><i class="fas fa-check"></i> 6 pages +</li>
                                                    <li><i class="fas fa-check"></i> Base de données</li>
                                                    <li><i class="fas fa-check"></i> Page d'Actualité (Blog page)</li>
                                                    <li><i class="fas fa-check"></i> Support</li>
                                                    <li><i class="fas fa-check"></i> Compte admin</li>
                                                    <li><i class="fas fa-check"></i> Section utilisateur</li>
                                                    <li><i class="fas fa-check"></i> Documetation</li>
                                                    <li><i class="fas fa-check"></i> Fichier compressé</li>
                                                    <li class="footer">
                                                        <a class="btn circle btn-theme border btn-sm" href="#">Choisir
                                                            ce plan</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab Single Item -->

                            <!-- Tab Single Item -->
                            <div id="annualweb" class="tab-pane fade">
                                <div class="col-md-12">
                                    <div class="pricing-items">
                                        <div class="col-lg-4 col-md-4 single-item">
                                            <div class="pricing-item">
                                                <ul>
                                                    <li class="pricing-header">
                                                        <h4>Basique</h4>
                                                        <h2><sup>XAF</sup>5.500</h2>
                                                        <span>/Mois</span>
                                                    </li>
                                                    <li><i class="fas fa-check"></i> 4 pages (Max)</li>
                                                    <li><i class="fas fa-check"></i> Maintenance</li>
                                                    <li><i class="fas fa-check"></i> Mise à jour</li>
                                                    <li><i class="fas fa-check"></i> Support</li>
                                                    <li><i class="fas fa-check"></i> Documetation</li>
                                                    <li><i class="fas fa-times"></i> Page d'Actualité (Blog page)</li>
                                                    <li><i class="fas fa-times"></i> Compte admin</li>
                                                    <li><i class="fas fa-times"></i> Section utilisateur</li>
                                                    <li>
                                                        <h2><sup>Bonus</sup></h2>
                                                    </li>
                                                    <li><i class="fas fa-check"></i> 45 pts</li>
                                                    <li><i class="fas fa-times"></i> Flyer</li>
                                                    <li><i class="fas fa-times"></i> Publicité sur Facebook</li>
                                                    <li class="footer">
                                                        <a class="btn circle btn-theme border btn-sm" href="#">Choisir
                                                            ce plan</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 single-item">
                                            <div class="pricing-item active">
                                                <ul>
                                                    <li class="pricing-header">
                                                        <h4>Standard</h4>
                                                        <h2><sup>XAF</sup>8.500+</h2>
                                                        <span>/Mois</span>
                                                    </li>
                                                    <li><i class="fas fa-check"></i> 6 pages +</li>
                                                    <li><i class="fas fa-check"></i> Maintenance</li>
                                                    <li><i class="fas fa-check"></i> Mise à jour</li>
                                                    <li><i class="fas fa-check"></i> Support</li>
                                                    <li><i class="fas fa-check"></i> Documetation</li>
                                                    <li><i class="fas fa-check"></i> Page d'Actualité (Blog page)</li>
                                                    <li><i class="fas fa-check"></i> Compte admin</li>
                                                    <li><i class="fas fa-times"></i> Section utilisateur</li>
                                                    <li>
                                                        <h2><sup>Bonus</sup></h2>
                                                    </li>
                                                    <li><i class="fas fa-check"></i> 60 pts</li>
                                                    <li><i class="fas fa-check"></i> Flyer</li>
                                                    <li><i class="fas fa-times"></i> Publicité sur Facebook</li>
                                                    <li class="footer">
                                                        <a class="btn circle btn-theme border btn-sm"
                                                            href="#">Choisir ce plan</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 single-item">
                                            <div class="pricing-item">
                                                <ul>
                                                    <li class="pricing-header">
                                                        <h4>Avancé</h4>
                                                        <h2><sup>XAF</sup>12.500</h2>
                                                        <span>/Mois</span>
                                                    </li>
                                                    <li><i class="fas fa-check"></i> 6 pages +</li>
                                                    <li><i class="fas fa-check"></i> Maintenance</li>
                                                    <li><i class="fas fa-check"></i> Mise à jour</li>
                                                    <li><i class="fas fa-check"></i> Support</li>
                                                    <li><i class="fas fa-check"></i> Documetation</li>
                                                    <li><i class="fas fa-check"></i> Page d'Actualité (Blog page)</li>
                                                    <li><i class="fas fa-check"></i> Compte admin</li>
                                                    <li><i class="fas fa-check"></i> Section utilisateur</li>
                                                    <li>
                                                        <h2><sup>Bonus</sup></h2>
                                                    </li>
                                                    <li><i class="fas fa-check"></i> 90 pts</li>
                                                    <li><i class="fas fa-check"></i> Flyer</li>
                                                    <li><i class="fas fa-check"></i> Publicité sur Facebook</li>
                                                    <li class="footer">
                                                        <a class="btn circle btn-theme border btn-sm"
                                                            href="#">Choisir ce plan</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab Single Item -->

                        </div>
                        <!-- End Tab Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Area -->
@endsection
