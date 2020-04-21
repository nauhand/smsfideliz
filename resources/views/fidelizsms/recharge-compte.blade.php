@extends('layouts.master')

@section('is-active-rech')
active
@endsection

@section('is-active-rechcompte')
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
                                    <h4>Recharger compte</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Finances</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-xl-2 col-md-12">
                        </div>
                        <div class="col-xl-8 col-md-12">
                            <div class="card user-activity-card">
                                <div class="card-header text-center">
                                    <h5>Recharger un compte principal</h5>
                                    <span>
                                        Saisissez les informations nécessaires pour le rechargement
                                    </span>
                                </div>
                                <div class="card-block">
                                    <form action="">
                                        <div class="col-xl-12">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <label for="" style="font-weight: bold;">Client à recharger (*)</label>
                                                    <div class="input-group input-group-primary">
                                                    <select class="selectpicker form-control" data-style="btn-info">
                                                          <option selected>COM&TIC</option>
                                                          <option>NSIA BANQUE</option>
                                                          <option>COMAFRIQUE</option>
                                                          <option>MSA CI</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <label for="" style="font-weight: bold;">Montant à recharger (*)</label>
                                                    <div class="input-group input-group-primary">
                                                        <input type="text" class="form-control" placeholder="">
                                                        <span class="input-group-addon">
                                                            <i class="fas fa-euro-sign"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-xl-8 offset-2">
                                                    <button type="submit" style="width:100%;"  class="btn btn-md btn-success" id="modal1" class="btn btn-primary"><i class="fas fa-coins"></i> Recharger le compte</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-12">
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
