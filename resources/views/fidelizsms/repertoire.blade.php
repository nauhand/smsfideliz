@extends('layouts.master')

@section('is-active-rep')
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
                                    <h4>Répertoire</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Contact</a> </li>
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
                                            <i class="fas fa-address-book f-30 text-c-green"></i>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="text-muted m-b-10">Répertoire</h6>
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
                                            <i class="fas fa-users f-30 text-c-green"></i>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="text-muted m-b-10">Contacts</h6>
                                            <h2 class="m-b-0">205</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-md-12">
                            <div class="card user-activity-card">
                                <div class="card-header">
                                    <h5>Nom du groupe</h5>
                                </div>
                                <div class="card-block">
                                    <form action="">
                                        <div class="col-sm-12">
                                            <div class="input-group input-group-primary">
                                                <span class="input-group-addon">
                                                    <i class="fas fa-address-book"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> ajouter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>Liste de vos répertoires</h5>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nom du répertoire</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Répertoire 1</td>
                                                    <td>
                                                    <a href="" class="btn btn-danger btn-sm float-right"><i class="fa fa-trash"></i> supprimer</a>
                                                    <a href="{{ route('ajouter-contact') }}" style="margin-right: 15px;" class="btn btn-info btn-sm float-right"><i class="fa fa-plus"></i> ajouter contact</a>
                                                    <a href="{{ route('liste-contact') }}" style="margin-right: 15px;" class="btn btn-success btn-sm float-right"><i class="fa fa-eye"></i> voir contact</a>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Répertoire assurance</td>
                                                    <td>
                                                    <a href="" class="btn btn-danger btn-sm float-right"><i class="fa fa-trash"></i> supprimer</a>
                                                    <a href="{{ route('ajouter-contact') }}" style="margin-right: 15px;" class="btn btn-info btn-sm float-right"><i class="fa fa-plus"></i> ajouter contact</a>
                                                    <a href="{{ route('liste-contact') }}" style="margin-right: 15px;" class="btn btn-success btn-sm float-right"><i class="fa fa-eye"></i> voir contact</a>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Répertoire test</td>
                                                    <td>
                                                    <a href="" class="btn btn-danger btn-sm float-right"><i class="fa fa-trash"></i> supprimer</a>
                                                    <a href="{{ route('ajouter-contact') }}" style="margin-right: 15px;" class="btn btn-info btn-sm float-right"><i class="fa fa-plus"></i> ajouter contact</a>
                                                    <a href="{{ route('liste-contact') }}" style="margin-right: 15px;" class="btn btn-success btn-sm float-right"><i class="fa fa-eye"></i> voir contact</a>
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
</div>

<div class="col-xl-12">
    <button id="btnsend" type="button" class="btn btn-sm btn-success"><i class="fas fa-paper-plane"></i> Envoyer campagne</button>
</div>
<br>
<div class="col-xl-12">
 <button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-paper-plane"></i> Envoyer SMS d'essai</button>
</div>

@endsection

@section('loader')

<script src="{{ asset('fidelizsms/files/assets/js/rocket-loader.min.js') }}" data-cf-settings="5aaa5f89c516d98bbdd768cf-|49" defer=""></script>

@endsection
