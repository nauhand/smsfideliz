@extends('layouts.master')

@section('is-active-compte')
    active
@endsection

@section('is-active-addclient')
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
                                    <h4>Ajouter clients</h4>
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
                    <form action="">
                        <div class="row">
                            <div class="col-xl-4 col-md-12">
                                <div class="card user-activity-card">
                                    <div class="card-header text-center">
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-xl-12 text-center">
                                                <img src="{{ asset('fidelizsms/images/user.png') }}" id="blah" alt="votre photo" class="m-auto">
                                            </div>
                                            <div class="col-xl-12 text-center" style="margin-top: 10px;">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <div class="col-xl-12">
                                                                <label class="btn-bs-file btn btn-sm btn-primary">
                                                                    Choisir photo &nbsp;&nbsp;<i class="fa fa-pencil-alt"></i>
                                                                    <input type="file" class="form-control" id="inputGroupFile01" onchange="readURL(this);" accept="image/*" value="" autocomplete="off" name="image"/>
                                                                </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span style="font-size: 12px; color: red;">
                                                    Taille maximum : 10 mb <br>
                                                    Formats acceptés : jpg, jpeg, png
                                                </span>
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
                                    <div class="card-block" style="background-color: #f7fafc; padding: 25px;">
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
                                            <div class="col-xl-6"></div>
                                            <div class="col-xl-6">
                                                <div class="input-group input-group-primary">
                                                    <button type="submit" style="width:100%;"  class="btn btn-md btn-success float-right" class="btn btn-primary"><i class="fa fa-save"></i> Enregistrer client</button>
                                                </div>
                                            </div>
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
