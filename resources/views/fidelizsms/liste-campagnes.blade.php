@extends('layouts.datatable')

@section('is-active-camp')
active
@endsection

@section('is-active-listcamp')
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
                                    <h4>Liste campagnes</h4>
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
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center m-l-0">
                                        <div class="col-auto">
                                            <i class="fas fa-layer-group f-30 text-c-green"></i>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="text-muted m-b-10">Total campagnes</h6>
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
                                            <i class="fas fa-times f-30" style="color: red;"></i>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="text-muted m-b-10">Campagnes échouées</h6>
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
                                            <span style="font-size: 25px;"><i class="fas fa-pause" style="color: orange;"></i></span>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="text-muted m-b-10">Campagnes en attente</h6>
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
                                    <a href="" class="btn btn-primary btn-sm" style="background-color: #0086fb; border-color: #0086fb;"><i class="fa fa-plus" style="color: white;"></i> Nouvelle campagne</a>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="basic-key-table" class="table table-striped table-bordered nowrap" style="font-size: 13px;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nom de la campagne</th>
                                                <th>Date</th>
                                                <th>Statut</th>
                                                <th>Taux de livraison</th>
                                                <th>Coût Total</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Campagne test</td>
                                                <td>15/02/2020</td>
                                                <td><span class="badge badge-secondary">en attente</span></td>
                                                <td>0%</td>
                                                <td>€ 320,800</td>
                                                <td>
                                                    <a href="" class="btn btn-danger btn-sm float-right"><i class="fa fa-trash"></i> supprimer</a>
                                                    <a href="{{ route('details-campagne') }}" style="margin-right: 15px;" class="btn btn-success btn-sm float-right"><i class="fa fa-eye"></i> voir</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Campagne maj</td>
                                                <td>15/02/2020</td>
                                                <td><span class="badge badge-success">validé</span></td>
                                                <td>100%</td>
                                                <td>€ 800</td>
                                                <td>
                                                    <a href="" class="btn btn-danger btn-sm float-right"><i class="fa fa-trash"></i> supprimer</a>
                                                    <a href="{{ route('details-campagne') }}" style="margin-right: 15px;" class="btn btn-success btn-sm float-right"><i class="fa fa-eye"></i> voir</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Campagne nul</td>
                                                <td>15/02/2020</td>
                                                <td><span class="badge badge-danger">échoué</span></td>
                                                <td>0%</td>
                                                <td>€ 100</td>
                                                <td>
                                                    <a href="" class="btn btn-danger btn-sm float-right"><i class="fa fa-trash"></i> supprimer</a>
                                                    <a href="{{ route('details-campagne') }}" style="margin-right: 15px;" class="btn btn-success btn-sm float-right"><i class="fa fa-eye"></i> voir</a>
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
