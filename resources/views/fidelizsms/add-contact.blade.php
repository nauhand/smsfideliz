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
                                    <h4>Ajouter contacts</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Contacts</a> </li>
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
                                    <h5>A l'unité</h5>
                                    <span>Ajouter un contact unique</span>
                                </div>
                                <div class="card-block">
                                    <form action="">
                                        <div class="col-xl-12">
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <label for="">Téléphone</label>
                                                </div>
                                                <div class="col-xl-8">
                                                    <div class="input-group input-group-primary">
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <label for="">Nom</label>
                                                </div>
                                                <div class="col-xl-8">
                                                    <div class="input-group input-group-primary">
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <label for="">Prénom</label>
                                                </div>
                                                <div class="col-xl-8">
                                                    <div class="input-group input-group-primary">
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <label for="">E-mail</label>
                                                </div>
                                                <div class="col-xl-8">
                                                    <div class="input-group input-group-primary">
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <label for="">Entreprise</label>
                                                </div>
                                                <div class="col-xl-8">
                                                    <div class="input-group input-group-primary">
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <button class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> ajouter contact</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                            <div class="card user-activity-card">
                                <div class="card-header text-center">
                                    <h5>Depuis un fichier</h5>
                                    <span>
                                        Importez vos contacts depuis un fichier Excel ou CSV
                                    </span>
                                </div>
                                <div class="card-block">
                                    <form action="">
                                        <div class="col-xl-12 text-center">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <input type="file" id="real-file" hidden="hidden" />
                                                    <button type="button" id="custom-button"><i class="fas fa-file-excel"></i>&nbsp;&nbsp;Fichier excel</button>
                                                </div>
                                                <div class="col-xl-12 text-center">
                                                    <div class="input-group input-group-primary">
                                                        <span id="custom-text"></span>
                                                    </div>
                                                    <span style="font-size: 12px; color: red;">
                                                        Taille maximum : 50 mb <br>
                                                        Formats acceptés : xls, csv, txt, xlsx, vcf
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-xl-12 text-center" style="margin-top: 120px;">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> ajouter fichier</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                            <div class="card user-activity-card">
                                <div class="card-header text-center">
                                    <h5>Liste</h5>
                                    <span>
                                        Collez une liste de numéros dans le cadre<br>
                                        (1 contact par ligne)
                                    </span>
                                </div>
                                <div class="card-block">
                                    <form action="">
                                        <div class="col-xl-12">
                                            <div class="input-group input-group-primary">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="12"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <button class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> ajouter liste</button>
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
