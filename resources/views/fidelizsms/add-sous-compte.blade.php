@extends('layouts.master')

@section('is-active-compte')
    active
@endsection

@section('is-active-addsous')
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
                                    <h4>Ajouter sous-compte</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Gestion des sous-comptes</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <form action="">
                        <div class="row">
                            <div class="col-xl-10 offset-1 col-md-12">
                                <div class="card user-activity-card">
                                    <div class="card-header text-center">
                                        <h5>Données du sous-compte</h5>
                                    </div>
                                    <div class="card-block" style="background-color: #f7fafc; padding: 25px;">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <label for="" style="font-weight: bold;">Compte principal (*)</label>
                                                <div class="input-group input-group-primary">
                                                <select class="selectpicker form-control" data-style="btn-info">
                                                      <option selected>COM&TIC</option>
                                                      <option>COMAFRIQUE</option>
                                                      <option>KIABI CI</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <label for="" style="font-weight: bold;">Nom (*)</label>
                                                <div class="input-group input-group-primary">
                                                    <input type="text" class="form-control" placeholder="saisir nom">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="" style="font-weight: bold;;">Prénom(s) (*)</label>
                                                <div class="input-group input-group-primary">
                                                    <input type="text" class="form-control" placeholder="saisir prénom(s)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <label for="" style="font-weight: bold;">Numéro mobile (*)</label>
                                                <div class="input-group input-group-primary">
                                                    <input type="text" class="form-control" placeholder="ex : +22549490022">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="" style="font-weight: bold;">Adresse Email (*)</label>
                                                <div class="input-group input-group-primary">
                                                    <input type="email" class="form-control" placeholder="ex : comtic@info.africa">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <label for="" style="font-weight: bold;">Pays (*)</label>
                                                <div class="input-group input-group-primary">
                                                <select class="selectpicker form-control" data-style="btn-info">
                                                      <option selected>Côte d'Ivoire</option>
                                                      <option>Mali</option>
                                                      <option>France</option>
                                                      <option>Belgique</option>
                                                      <option>Canada</option>
                                                      <option>Bénin</option>
                                                      <option>Togo</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <label for="" style="font-weight: bold;">Entreprise (*)</label>
                                                <div class="input-group input-group-primary">
                                                    <input type="text" class="form-control" placeholder="ex : COM&TIC">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <label for="" style="font-weight: bold;">Nom d'utilisateur (*)</label>
                                                <div class="input-group input-group-primary">
                                                    <input type="text" class="form-control" placeholder="ex : africa225">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <label for="" style="font-weight: bold;">Mot de passe (*)</label>
                                                <div class="input-group input-group-primary">
                                                    <input type="password" class="form-control" placeholder="***********">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="" style="font-weight: bold;">Confirmer mot de passe (*)</label>
                                                <div class="input-group input-group-primary">
                                                    <input type="password" class="form-control" placeholder="***********">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-xl-4"></div>
                                            <div class="col-xl-4">
                                                <div class="input-group input-group-primary">
                                                    <button type="submit" style="width:100%;"  class="btn btn-md btn-success float-right" class="btn btn-primary"><i class="fa fa-save"></i> Enregistrer sous-compte</button>
                                                </div>
                                            </div>
                                            <div class="col-xl-4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('loader')

    <script src="{{ asset('fidelizsms/files/assets/js/rocket-loader.min.js') }}" data-cf-settings="5aaa5f89c516d98bbdd768cf-|49" defer=""></script>

@endsection
