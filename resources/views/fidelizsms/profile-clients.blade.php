@extends('layouts.profile-template')

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
                                    <h4>Profil utilisateur</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Gestion des comptes</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cover-profile">
                                <div class="profile-bg-img">
                                    <img class="profile-bg-img img-fluid" src="{{ asset('fidelizsms/files/assets/images/user-profile/fond.jpg') }}" style="height: 150px;" alt="bg-img">
                                    <div class="card-block user-info">
                                        <div class="col-md-12">
                                            <div class="media-left">
                                                <a href="#" class="profile-image">
                                                    <img class="user-img img-radius" src="{{ URL::asset('ClientsImages/'.$value->image) }}" width="150" alt="user-img">
                                                </a>
                                            </div>
                                            <div class="media-body row">
                                                <div class="col-lg-12">
                                                    <div class="user-title">
                                                        <h2 style="color: black;">{{ $value->nom }} {{ $value->prenoms }}</h2>
                                                        <span class="" style="color: black;">{{ $value->entreprise }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-header card">
                                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Infos personnelles</a>
                                        <div class="slide"></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="personal" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-header-text">Détails du compte</h5>
                                            <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                                <i class="icofont icofont-edit"></i> Modifier infos
                                            </button>
                                            <a href="" class="btn btn-primary btn-sm m-r-10 m-b-5 float-right"><i class="fa fa-edit"></i> Modifier mot de passe</a>
                                        </div>
                                        <div class="card-block">
                                            <div class="view-info">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="general-info">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="table-responsive">
                                                                        <table class="table m-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th scope="row">Nom</th>
                                                                                    <td>{{ $value->nom }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Prénom(s)</th>
                                                                                    <td>{{ $value->prenoms }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Numéro mobile</th>
                                                                                    <td>{{ $value->telephone }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Adresse email</th>
                                                                                    <td>{{ $value->email }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Pays</th>
                                                                                    <td>{{ $value->pays }}</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th scope="row">Entreprise</th>
                                                                                    <td>{{ $value->entreprise }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Nom d'utilisateur</th>
                                                                                    <td>{{ $value->username }}</td>
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
                                            <div class="edit-info">
                                                <form action="{{ route('editprofile.update', $value->id) }}" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="card user-activity-card">
                                                                <div class="card-header text-center">
                                                                </div>
                                                                <div class="card-block">
                                                                    <div class="row">
                                                                        <div class="col-xl-12 text-center">
                                                                            <img src="{{ URL::asset('ClientsImages/'.$value->image) }}" id="blah" alt="votre photo" class="m-auto">
                                                                        </div>
                                                                        <div class="col-xl-12 text-center" style="margin-top: 10px;">
                                                                            <div class="form-group">
                                                                                <div class="custom-file">
                                                                                    <div class="col-xl-12">
                                                                                            <label class="btn-bs-file btn btn-sm btn-primary">
                                                                                                Choisir photo &nbsp;&nbsp;<i class="fa fa-pencil-alt"></i>
                                                                                                <input type="file" class="form-control @error('image') is-invalid @enderror" onchange="readURL(this);" id="loadImg" accept="image/*" value="{{ $value->image }}" autocomplete="off" name="image"/>
                                                                                            </label>

                                                                                            @error('image')
                                                                                            <span class="invalid-feedback" role="alert" style="display: block;">
                                                                                                <strong style="font-weight:normal; font-size:13px;">{{ $message }}</strong>
                                                                                            </span>
                                                                                            @enderror
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
                                                        <div class="col-lg-8 ">
                                                            <div class="general-info">
                                                                    <div class="row">
                                                                        <div class="col-xl-10 offset-1">
                                                                            <div class="card user-activity-card">
                                                                                <div class="card-header text-center">
                                                                                </div>
                                                                                <div class="card-block" style="background-color: #f7fafc; padding: 25px;">
                                                                                    <div class="row">
                                                                                        <div class="col-xl-6">
                                                                                            <label for="" style="font-weight: bold;">Nom (*)</label>
                                                                                            <div class="input-group input-group-primary">
                                                                                                <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $value->nom }}" required autocomplete="off" placeholder="saisir nom">
                                                                                            </div>

                                                                                            @error('nom')
                                                                                            <span class="invalid-feedback" role="alert" style="display:block; margin-top:-15px;">
                                                                                                <strong style="font-weight:normal; font-size:13px;">{{ $message }}</strong>
                                                                                            </span>
                                                                                            @enderror
                                                                                        </div>
                                                                                        <div class="col-xl-6">
                                                                                            <label for="" style="font-weight: bold;;">Prénom(s) (*)</label>
                                                                                            <div class="input-group input-group-primary">
                                                                                                <input type="text" class="form-control @error('prenoms') is-invalid @enderror" name="prenoms" value="{{ $value->prenoms }}" required autocomplete="off" placeholder="saisir prénom(s)">
                                                                                            </div>

                                                                                            @error('prenoms')
                                                                                            <span class="invalid-feedback" role="alert" style="display:block; margin-top:-15px;">
                                                                                                <strong style="font-weight:normal; font-size:13px;">{{ $message }}</strong>
                                                                                            </span>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-xl-6">
                                                                                            <label for="" style="font-weight: bold;">Numéro mobile (*)</label>
                                                                                            <div class="input-group input-group-primary">
                                                                                                <input type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ $value->telephone }}" required autocomplete="off" placeholder="+22549490022">
                                                                                            </div>

                                                                                            @error('telephone')
                                                                                            <span class="invalid-feedback" role="alert" style="display:block; margin-top:-15px;">
                                                                                                <strong style="font-weight:normal; font-size:13px;">{{ $message }}</strong>
                                                                                            </span>
                                                                                            @enderror
                                                                                        </div>
                                                                                        <div class="col-xl-6">
                                                                                            <label for="" style="font-weight: bold;">Adresse Email (*)</label>
                                                                                            <div class="input-group input-group-primary">
                                                                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $value->email }}" required autocomplete="off" placeholder="ex: info@com-tic.africa">
                                                                                            </div>

                                                                                            @error('email')
                                                                                            <span class="invalid-feedback" role="alert" style="display:block; margin-top:-15px;">
                                                                                                <strong style="font-weight:normal; font-size:13px;">{{ $message }}</strong>
                                                                                            </span>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-xl-12">
                                                                                            <label for="" style="font-weight: bold;">Pays (*)</label>
                                                                                            <div class="input-group input-group-primary">
                                                                                            <select class="selectpicker form-control @error('pays') is-invalid @enderror" data-style="btn-info" name="pays" value="{{ $value->pays }}" required autocomplete="pays" id="pays" readonly>
                                                                                                  <option>Côte d'Ivoire</option>
                                                                                                  <option>Mali</option>
                                                                                                  <option>France</option>
                                                                                                  <option>Belgique</option>
                                                                                                  <option>Canada</option>
                                                                                                  <option>Bénin</option>
                                                                                                  <option>Gabon</option>
                                                                                                  <option>Guinée</option>
                                                                                                  <option>Congo</option>
                                                                                                  <option>Ghana</option>
                                                                                                  <option>Burkina Faso</option>
                                                                                                </select>
                                                                                            </div>

                                                                                            @error('pays')
                                                                                            <span class="invalid-feedback" role="alert" style="display:block; margin-top:-15px;">
                                                                                                <strong style="font-weight:normal; font-size:13px;">{{ $message }}</strong>
                                                                                            </span>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-xl-12">
                                                                                            <label for="" style="font-weight: bold;">Entreprise (*)</label>
                                                                                            <div class="input-group input-group-primary">
                                                                                                <input type="text" class="form-control @error('entreprise') is-invalid @enderror" name="entreprise" value="{{ $value->entreprise }}" required autocomplete="off" placeholder="ex: COM&TIC">
                                                                                            </div>

                                                                                            @error('entreprise')
                                                                                            <span class="invalid-feedback" role="alert" style="display:block; margin-top:-15px;">
                                                                                                <strong style="font-weight:normal; font-size:13px;">{{ $message }}</strong>
                                                                                            </span>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                    <hr>
                                                                                    <div class="row">
                                                                                        <div class="col-xl-12">
                                                                                            <label for="" style="font-weight: bold;">Nom d'utilisateur (*)</label>
                                                                                            <div class="input-group input-group-primary">
                                                                                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $value->username }}" required autocomplete="off" placeholder="saisir nom d'utilisateur">
                                                                                            </div>

                                                                                            @error('username')
                                                                                            <span class="invalid-feedback" role="alert" style="display:block; margin-top:-15px;">
                                                                                                <strong style="font-weight:normal; font-size:13px;">{{ $message }}</strong>
                                                                                            </span>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="row">
                                                                                        <div class="col-xl-3"></div>
                                                                                        <div class="col-xl-6">
                                                                                            <div class="input-group input-group-primary">
                                                                                                <button type="submit" style="width:100%;"  class="btn btn-md btn-success float-right" class="btn btn-primary"><i class="fa fa-save"></i> Mise à jour client</button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xl-3"></div>
                                                                                    </div>
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
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-header-text">Campagnes</h5>
                                                </div>
                                                <div class="card-block user-desc">
                                                    <div class="view-desc">
                                                        <div class="row text-center">
                                                            <div class="col-xl-3">
                                                                <label for="" style="font-weight: bold;">Campagnes éffectuées</label><br>
                                                                <span>0</span>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <label for="" style="font-weight: bold;">Total Contacts</label><br>
                                                                <span>0</span>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <label for="" style="font-weight: bold;">Total répertoires</label><br>
                                                                <span>0</span>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <label for="" style="font-weight: bold;">Rapports demandés</label><br>
                                                                <span>0</span>
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
    </div>
</div>

@endsection
