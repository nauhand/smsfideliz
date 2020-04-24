@extends('layouts.master')

@section('is-active-compte')
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
                                    <h4>Détails clients</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Gestion des clients</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                        <div class="row">
                            <div class="col-xl-4 col-md-12">
                                <div class="card user-activity-card">
                                    <div class="card-header text-center">
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-xl-12 text-center">
                                                <img src="{{ URL::asset('ClientsImages/'.$value->image) }}" id="blah" alt="votre photo" class="m-auto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-12">
                                <div class="card user-activity-card">
                                    <div class="card-header text-center">
                                        <h5>Données de l'utilisateur</h5>
                                    </div>
                                    <div class="card-block" style="padding: 25px;">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <label for="" style="font-weight: bold;">Nom</label>
                                                <div class="input-group input-group-primary">
                                                    <input type="text" class="form-control" value="{{ $value->nom }}" required autocomplete="off" readonly="readonly" style="cursor: default;">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="" style="font-weight: bold;;">Prénom(s)</label>
                                                <div class="input-group input-group-primary">
                                                    <input type="text" class="form-control @error('prenoms') is-invalid @enderror" name="prenoms" value="{{ $value->prenoms }}" required autocomplete="off" readonly="readonly" style="cursor: default;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <label for="" style="font-weight: bold;">Numéro mobile</label>
                                                <div class="input-group input-group-primary">
                                                    <input type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ $value->telephone }}" required autocomplete="off" readonly="" style="cursor: default;">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="" style="font-weight: bold;">Adresse Email</label>
                                                <div class="input-group input-group-primary">
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $value->email }}" required autocomplete="off" readonly="" style="cursor: default;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <label for="" style="font-weight: bold;">Pays</label>
                                                <div class="input-group input-group-primary">
                                                    <input type="text" class="form-control" value="{{ $value->pays }}" required autocomplete="off" readonly="" style="cursor: default;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <label for="" style="font-weight: bold;">Entreprise</label>
                                                <div class="input-group input-group-primary">
                                                    <input type="text" class="form-control @error('entreprise') is-invalid @enderror" name="entreprise" value="{{ $value->entreprise }}" required autocomplete="off" readonly="" style="cursor: default;">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <label for="" style="font-weight: bold;">Nom d'utilisateur</label>
                                                <div class="input-group input-group-primary">
                                                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $value->username}}" required autocomplete="off" readonly="" style="cursor: default;">
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
