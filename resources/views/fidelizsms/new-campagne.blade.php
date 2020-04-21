@extends('layouts.master')

@section('is-active-newcamp')
    active
@endsection

@section('is-active-camp')
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
                                        <h4>Nouvelle campagne</h4>
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
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h4>CREER UNE CAMPAGNE SMS</h4>
                                    </div>
                                    <div class="card-block" style="background-color: #f7fafc; padding: 25px;">
                                    <form action="">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <label for="" style="font-size: 18px; font-weight: bold;"><i class="fas fa-file-signature"></i> 1- Nom de la campagne</label>
                                                </div>
                                                <div class="col-xl-7">
                                                    <div class="input-group input-group-primary">
                                                        <input type="text" class="form-control" placeholder="Campagne des banques">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <label for="" style="font-size: 18px; font-weight: bold;" ><i class="fas fa-file-signature"></i> 2- Nom de l'expéditeur</label><br>
                                                    <div style="margin-top: -15px; color: red;">
                                                        <em style="font-size: 11px; font-weight: normal;"> (Ne pas dépasser 11 caractères alphanumériques)</em>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7">
                                                    <div class="input-group input-group-primary">
                                                        <input type="text" id="exped" class="form-control" placeholder="COM&TIC">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <label for="" style="font-size: 18px; font-weight: bold;"><i class="fas fa-user-friends"></i> 3- Choix des destinataires</label>
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="panel-group" id="accordion" style="width: 100%;">
                                                                <div class="panel panel-default">
                                                                  <div class="panel-heading">
                                                                    <h4 class="panel-title" style="font-weight: bold">
                                                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i class="far fa-check-circle"></i> Répertoire</a>
                                                                    </h4>
                                                                  </div>
                                                                  <div id="collapse1" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                        <div class="input-group input-group-primary">
                                                                        <select class="selectpicker form-control" multiple data-style="btn-info" id="select">
                                                                              <option selected>Repertoire banque</option>
                                                                              <option>Repertoire Assurance</option>
                                                                              <option>Repertoire Société</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                  <div class="panel-heading">
                                                                    <h4 class="panel-title" style="font-weight: bold">
                                                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><i class="far fa-check-circle"></i> Liste de contact</a>
                                                                    </h4>
                                                                  </div>
                                                                  <div id="collapse2" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                        <label for=""><em style="font-size: 11px; font-weight: normal;">(1 contact par ligne)</em></label>
                                                                        <div class="input-group input-group-primary">
                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                  <div class="panel-heading">
                                                                    <h4 class="panel-title" style="font-weight: bold">
                                                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><i class="far fa-check-circle"></i> Fichier Excel</a>
                                                                    </h4>
                                                                  </div>
                                                                  <div id="collapse3" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                        <div class="row text-center" style="padding: 15px;">
                                                                            <div class="col-xl-12">
                                                                                <input type="file" id="real-file" hidden="hidden" />
                                                                                <button type="button" id="custom-button"><i class="fas fa-file-excel"></i>&nbsp;&nbsp;Importer votre Fichier Excel</button>
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
                                                                  </div>
                                                                </div>
                                                              </div> 
                                                        </div>
                                                        <div class="col-xl-12 text-center"  style="padding: 5px; margin-top: 10px;">
                                                            <div class="row" style="margin-bottom: -10px;">
                                                                <div class="col-xl-7">
                                                                    <label for="" style="font-size: 18px; font-weight: bold;"><i class="fas fa-envelope"></i> 4- Rédiger votre message</label>
                                                                </div>
                                                                <div class="col-xl-5" class="float-right">
                                                                    <p class="float-right"><span id="remaining">160 caractères / </span> <span id="messages">1 SMS</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="input-group input-group-primary">
                                                                <textarea class="form-control" name="message" value="" id="message" rows="8"></textarea>
                                                            </div>
                                                            <div style="margin-top: -15px;">
                                                                <a class="btn btn-sm btn-secondary" id="show" style="font-size: 12px; color: white;"><span>Personnaliser votre SMS ?</span></a>
                                                                <p id="p" style="font-size: 13px;">
                                                                    Exemple : Bonjour {Prénom} {Nom}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="container iphone">
                                                      <img src="{{ asset('fidelizsms/images/iphone3.png') }}" alt="Snow" style="width:60%;">
                                                      <div class="centered"><h5 id="sender" style="font-size: 13px;">COM&TIC</h5></div>
                                                      <div class="centered2" style="background-color: #8080805e; width:180px; border-radius: 9px;">
                                                          <h5 style="font-size: 11px;" id="sms">Bonjour monsieur et bienvenue sur la nouvelle plateforme d'envoie de SMS de COM&TIC.</h5>
                                                      </div>
                                                      <div class="centered3" id="span">
                                                          <span style="font-size: 9px;" class="output"></span>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-xl-12">
                                                        <label for="" style="font-size: 18px; font-weight: bold;"><i class="fas fa-stopwatch"></i> 5- Planification
                                                        </label>
                                                    </div>
                                                    <div class="container">
                                                        <div class="row" style="width: 100%;">
                                                            <div class="col-xl-6">
                                                                <label for="" style="font-weight: bold;">Date de début</label>
                                                                <div class="input-group input-group-primary">
                                                                    <span class="input-group-addon">
                                                                        <i class="far fa-calendar-alt"></i>
                                                                    </span>
                                                                    <input type="date" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <label for="" style="font-weight: bold;">Heure de début</label>
                                                                <div class="input-group input-group-primary">
                                                                    <span class="input-group-addon">
                                                                        <i class="fas fa-stopwatch"></i>
                                                                    </span>
                                                                    <input type="time" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row" style="width: 100%;">
                                                            <div class="col-xl-6">
                                                                <label for="" style="font-weight: bold;">Date de Fin</label>
                                                                <div class="input-group input-group-primary">
                                                                    <span class="input-group-addon">
                                                                        <i class="far fa-calendar-alt"></i>
                                                                    </span>
                                                                    <input type="date" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <label for="" style="font-weight: bold;">Heure de fin</label>
                                                                <div class="input-group input-group-primary">
                                                                    <span class="input-group-addon">
                                                                        <i class="fas fa-stopwatch"></i>
                                                                    </span>
                                                                    <input type="time" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <label for="" style="font-weight: bold;">Jour de diffusion</label>
                                                                <div class="input-group input-group-primary">
                                                                <select class="selectpicker form-control" multiple data-style="btn-info">
                                                                      <option selected>Lundi</option>
                                                                      <option>Mardi</option>
                                                                      <option>Mercredi</option>
                                                                      <option>Jeudi</option>
                                                                      <option>Vendredi</option>
                                                                      <option>Samedi</option>
                                                                      <option>Dimanche</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row" style="width: 100%;">
                                                            <div class="col-xl-6">
                                                                <label for="" style="font-weight: bold;">Vitesse d'envoi du message</label>
                                                                <div class="input-group input-group-primary">
                                                                    <input type="number" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <label for="" style="font-weight: bold;">Unité d'envoi du message</label>
                                                                <div class="input-group input-group-primary">
                                                                    <select class="selectpicker form-control" data-style="btn-info">
                                                                          <option>Secondes</option>
                                                                          <option>Minutes</option>
                                                                          <option>Heures</option>
                                                                          <option>Jours</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-xl-4">
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <button type="button" style="width:100%;"  class="btn btn-md btn-success float-right" id="modal1" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-paper-plane"></i> Envoyer un SMS test</button>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <a href="{{ route('confirm-campagne') }}" class="btn btn-md btn-danger float-right" style="width:100%;"><i class="fas fa-arrow-right"></i> Suivant</a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">SMS de test</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
            	<div class="col-xl-12">
            		<div class="input-group input-group-primary">
            		    <span class="input-group-addon">
            		        <i class="fas fa-phone"></i>
            		    </span>
            		    <input type="text" class="form-control" placeholder="22507099032">
            		</div>
            	</div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Envoyer test</button>
          </div>
        </div>
      </div>
    </div>
    
@endsection

@section('loader')

    <script src="{{ asset('fidelizsms/files/assets/js/rocket-loader.min.js') }}" data-cf-settings="5aaa5f89c516d98bbdd768cf-|49" defer=""></script>

@endsection
