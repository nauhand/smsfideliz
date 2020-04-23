@extends('layouts.login-tp')

@section('content')

    @include('layouts.loader')

    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @isset($url)
                        <form method="POST" action='{{ url("login/$url") }}' class="md-float-material form-material">
                    @else
                        <form method="POST" action="{{ route('login') }}" class="md-float-material form-material">
                    @endisset
                        @csrf
                        <div class="text-center">
                            <img src="{{ asset('fidelizsms/files/assets/images/fideliz2sms.png') }}" width="150" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Connectez vous</h3><br>
                                        <h6 class="text-center">{{ isset($url) ? ucwords($url) : "Compte client"}}</h6>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" required="" placeholder="Nom d'utilisateur" value="{{ old('username') }}" id="username">
                                    <span class="form-bar"></span>

                                    @error('username')
                                    <span class="invalid-feedback" role="alert" style="font-weight: normal;">
                                        <strong style="font-weight: normal; font-size: 13px;">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" required="" placeholder="************" autocomplete="current-password" id="password">
                                    <span class="form-bar"></span>

                                    @error('password')
                                     <span class="invalid-feedback" role="alert" style="font-weight: normal;">
                                        <strong style="font-weight: normal; font-size: 13px;">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary d-">
                                            <label>
                                                <input type="checkbox" id="remenber" name="remenber" {{ old('remember') ? 'checked' : '' }}>
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <label class="text-inverse" for="remenber">Se souvenir de moi ?</label>
                                            </label>
                                        </div>

                                        @if (Route::has('password.request'))
                                            <div class="forgot-phone text-right f-right">
                                                <a href="{{ route('password.request') }}" class="text-right f-w-600">Mot de passe oublié ?</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Connexion</button>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-10">
                                        <a href="{{ url('/login/sous-compte') }}"><p class="text-inverse text-left m-b-0">Je suis un sous-compte !</p></a>
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
