@extends('layouts.login-tp')

@section('content')

    @include('layouts.loader')

    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material">
                        <div class="text-center">
                            <img src="{{ asset('fidelizsms/files/assets/images/fideliz2sms.png') }}" width="150" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Connectez vous</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="email" name="email" class="form-control" required="" placeholder="adresse e-mail">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" required="" placeholder="************">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary d-">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Se souvenir de moi ?</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right f-right">
                                            <a href="auth-reset-password.html" class="text-right f-w-600">Mot de passe oublié ?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Connexion</button>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-10">
                                        <a href=""><p class="text-inverse text-left m-b-0">Voir les CGU.</p></a>
                                        <p class="text-inverse text-left"><a href=""><b class="f-w-600">Revenir</b></a></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{ asset('fidelizsms/files/assets/images/fideliz1sms.png') }}" alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
