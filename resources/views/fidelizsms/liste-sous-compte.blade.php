@extends('layouts.datatable')

@section('is-active-compte')
active
@endsection

@section('is-active-listclient')
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
                                    <h4>Liste sous compte</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Gestion des sous comptes</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center m-l-0">
                                        <div class="col-auto">
                                            <i class="fas fa-users f-30" style="color: blue;"></i>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="text-muted m-b-10">Total sous comptes</h6>
                                            <h2 class="m-b-0">3</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center m-l-0">
                                        <div class="col-auto">
                                            <i class="fas fa-user-check f-30 text-c-green"></i>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="text-muted m-b-10">Actifs</h6>
                                            <h2 class="m-b-0">1</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center m-l-0">
                                        <div class="col-auto">
                                            <span style="font-size: 25px;"><i class="fas fa-user-times" style="color: red;"></i></span>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="text-muted m-b-10">Inactifs</h6>
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
                                <h5></h5>
                                <div class="card-header-right" style="margin-right: 11px;">
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus" style="color: white;"></i> Nouveau sous compte</a>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="basic-key-table" class="table table-striped table-bordered nowrap" style="font-size: 13px;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nom d'utilisateur</th>
                                                <th>Nom</th>
                                                <th>Prénom(s)</th>
                                                <th>Numéro mobile</th>
                                                <th>Statut</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>rmo145</td>
                                                <td>Ganita</td>
                                                <td>Mouloud</td>
                                                <td>+22545896532</td>
                                                <td><span class="badge badge-danger">inactif</span></td>
                                                <td>
                                                    <a href="" class="btn btn-danger btn-sm float-right"><i class="fa fa-trash"></i> supprimer</a>
                                                    <a href="" style="margin-right: 5px;" class="btn btn-success btn-sm float-right"><i class="fa fa-eye"></i> Détails</a>
                                                    <a href="{{ route('ajouter-clients') }}" style="margin-right: 5px;" class="btn btn-primary btn-sm float-right"><i class="fa fa-edit"></i> Modifier</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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

<script src="{{ asset('fidelizsms/files/assets/js/rocket-loader.min.js') }}" data-cf-settings="7a7fa98a142edbdad3e24ddf-|49" defer=""></script>

@endsection
