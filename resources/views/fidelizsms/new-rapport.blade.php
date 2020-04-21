@extends('layouts.master')

@section('is-active-rap')
active
@endsection

@section('is-active-createrap')
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
                                    <h4>Creer un rapport</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Rapports & stats</a> </li>
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
                                    <h5>Filtre de recherche personnalisé</h5>
                                </div>
                                <div class="card-block" style="background-color: #f7fafc; padding: 25px;">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-12">
                                            <div class="card user-activity-card">
                                                <div class="card-header text-center">
                                                    <h5>Choix d'un nom</h5>
                                                </div>
                                                <div class="card-block">
                                                    <form action="">
                                                        <div class="col-xl-12">
                                                            <label for="" style="">Nom de campagne</label>
                                                            <div class="input-group input-group-primary">
                                                                <select class="NameCamp" name="state">
                                                                  <option value="AL">Campagne test</option>
                                                                  <option value="WY">Campagne assurance</option>
                                                                  <option value="WY">Campagne banque</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <button class="btn btn-primary btn-sm float-right"><i class="fa fa-search"></i> Rechercher</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8">
                                            <div class="card user-activity-card">
                                                <div class="card-header text-center">
                                                    <h5>Choix d'une période</h5>
                                                </div>
                                                <div class="card-block">
                                                    <form action="">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <label for="" style="">Date de début</label>
                                                                <div class="input-group input-group-primary">
                                                                    <span class="input-group-addon">
                                                                        <i class="far fa-calendar-alt"></i>
                                                                    </span>
                                                                    <input type="date" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <label for="" style="">Date de fin</label>
                                                                <div class="input-group input-group-primary">
                                                                    <span class="input-group-addon">
                                                                        <i class="far fa-calendar-alt"></i>
                                                                    </span>
                                                                    <input type="date" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <button class="btn btn-primary btn-sm float-right"><i class="fa fa-search"></i> Rechercher</button>
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
            </div>
        </div>
    </div>
</div>

@endsection

@section('loader')

<script src="{{ asset('fidelizsms/files/assets/js/rocket-loader.min.js') }}" data-cf-settings="5aaa5f89c516d98bbdd768cf-|49" defer=""></script>

@endsection
