@extends('layouts.master')

@section('is-active-camp')
active
@endsection

@section('content')

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Rapport campagne</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Campagnes</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center m-l-0">
                                        <div class="col-auto">
                                            <i class="fas fa-layer-group f-30" style="color: blue;"></i>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="text-muted m-b-10">Destinataires</h6>
                                            <h2 class="m-b-0">3</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center m-l-0">
                                        <div class="col-auto">
                                            <i class="fas fa-check-circle f-30 text-c-green"></i>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="text-muted m-b-10">Validés</h6>
                                            <h2 class="m-b-0">1</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center m-l-0">
                                        <div class="col-auto">
                                            <i class="fas fa-times f-30" style="color: red;"></i>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="text-muted m-b-10">Echouées</h6>
                                            <h2 class="m-b-0">1</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center m-l-0">
                                        <div class="col-auto">
                                            <span style="font-size: 25px;"><i class="fas fa-pause" style="color: orange;"></i></span>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="text-muted m-b-10">En attente</h6>
                                            <h2 class="m-b-0">1</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card" style="width: 100%;">
                            <div class="card-header">
                                <h5>Informations de campagne</h5>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-xl-4 col-md-12">
                                        <div class="">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-7"><label for="">Campagne ID :</label></div>
                                                    <div class="col-5"><span>20</span></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-7"><label for="">Status de campagne :</label></div>
                                                    <div class="col-5"><span>Terminé</span></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-7"><label for="">Date de création :</label></div>
                                                    <div class="col-5"><span>20/01/2020</span></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-7"><label for="">Date de livraison :</label></div>
                                                    <div class="col-5"><span>25/01/2020</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-md-6">
                                        <div class="">
                                            <div class="">
                                                <div id="detdiv" style="height: 240px;"></div>
                                            </div>
                                            <div class="card-footer ">
                                                <div class="row text-center b-t-default">
                                                    <div class="col-4 b-r-default m-t-15">
                                                        <h5>850</h5>
                                                        <p class="text-muted m-b-0">Envoyés</p>
                                                    </div>
                                                    <div class="col-4 b-r-default m-t-15">
                                                        <h5>225</h5>
                                                        <p class="text-muted m-b-0">Echoués</p>
                                                    </div>
                                                    <div class="col-4 b-r-default m-t-15">
                                                        <h5>115</h5>
                                                        <p class="text-muted m-b-0">En Attente</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('loader')

    <script src="{{ asset('fidelizsms/files/assets/js/rocket-loader.min.js') }}" data-cf-settings="5aaa5f89c516d98bbdd768cf-|49" defer=""></script>

@endsection
