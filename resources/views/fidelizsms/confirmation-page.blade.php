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
                                    <h4>Confirmation campagne</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Campagne</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card user-activity-card">
                                <div class="card-header text-center">
                                    <h5></h5>
                                </div>
                                <div class="card-block">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-xl-12 text-center">
                                                <label for="" style="font-weight: bold; font-size: 20px;">Résumé de la campagne</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 text-center">
                                                <div class="card user-activity-card">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                             <label for="" style="font-weight:bold;">Destinataires</label><br>
                                                             <span>150</span>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <label style="font-weight:bold;" for="">Messages</label><br>
                                                                <span>1</span>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <label style="font-weight:bold;" for="">Coûts</label><br>
                                                                <span>250€</span>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <label style="font-weight:bold;" for="">Caractères</label><br>
                                                                <span>459</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 text-center">
                                                <label for="" style="font-weight: bold; font-size: 20px;">Informations complémentaires</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="card user-activity-card">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-xl-4">
                                                                <label style="font-weight:bold;" for="">Vitesse de livraison :</label>&nbsp;&nbsp;&nbsp;
                                                                <span>Illimitée</span>
                                                            </div>
                                                            <div class="col-xl-4 text-center">
                                                                <label style="font-weight:bold;" for="">Fuseau horaire :</label><br>
                                                                <span>(GMT+00:00) Casablanca, Monrovia, Reykjavik)</span>
                                                            </div>
                                                            <div class="col-xl-4 text-center">
                                                                <label style="font-weight:bold;" for="">Délai de livraison :</label><br>
                                                                <span>Tous les jours - 8h - 20h</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4"></div>
                                            <div class="col-xl-4">
                                                <a style="width:100%;" href="" type="button" class="btn btn-md btn-danger float-right"><i class="fas fa-arrow-left"></i> Précédent</a>
                                            </div>
                                            <div class="col-xl-4">
                                                <button style="width:100%;" type="button" class="btn btn-md btn-success float-right" id="btnsend"><i class="fas fa-paper-plane"></i> Démarrer campagne</button>
                                            </div>
                                        </div>
                                    </form>
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



                                                    