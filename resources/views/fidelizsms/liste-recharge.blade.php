@extends('layouts.datatable')

@section('is-active-rech')
active
@endsection

@section('is-active-listrech')
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
                                    <h4>Liste rechargement</h4>
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
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center m-l-0">
                                        <div class="col-auto">
                                            <i class="fas fa-coins f-30 text-c-green"></i>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="text-muted m-b-10">Solde du compte</h6>
                                            <h2 class="m-b-0">1500 €</h2>
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
                                            <span style="font-size: 25px;"><i class="fas fa-coins" style="color: yellow;"></i></span>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="text-muted m-b-10">Total dépense</h6>
                                            <h2 class="m-b-0">800 €</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card" style="width: 100%;">
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="basic-key-table" class="table table-striped table-bordered nowrap" style="font-size: 13px;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Montant</th>
                                                <th>Date de demande</th>
                                                <th>Statut</th>
                                                <th>Date de recharge</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>400 €</td>
                                                <td>15/02/2020</td>
                                                <td><span class="badge badge-success">rechargé</span></td>
                                                <td>16/02/2020</td>
                                                <td>
                                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> supprimer</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>200 €</td>
                                                <td>18/02/2020</td>
                                                <td><span class="badge badge-secondary">en attente</span></td>
                                                <td></td>
                                                <td>
                                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> supprimer</a>
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
