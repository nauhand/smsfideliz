@extends('layouts.master')

@section('is-active-dash')
    active
@endsection

@section('content')

    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h4 class="text-c-yellow f-w-600">5</h4>
                                                <h6 class="text-muted m-b-0">Campagnes du mois</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="fas fa-calendar-day f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-yellow">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <p class="text-white m-b-0">% change</p>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="feather icon-trending-up text-white f-16"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h4 class="text-c-green f-w-600">290+</h4>
                                                <h6 class="text-muted m-b-0">Total SMS envoyés</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="feather icon-file-text f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-green">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <p class="text-white m-b-0">% change</p>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="feather icon-trending-up text-white f-16"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h4 class="text-c-pink f-w-600">14%</h4>
                                                <h6 class="text-muted m-b-0">Taux de livraison SMS</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="fas fa-percentage f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-pink">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <p class="text-white m-b-0">% change</p>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="feather icon-trending-up text-white f-16"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h4 class="text-c-blue f-w-600">500</h4>
                                                <h6 class="text-muted m-b-0">Coût de SMS envoyés</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="fas fa-euro-sign f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-blue">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <p class="text-white m-b-0">% change</p>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="feather icon-trending-up text-white f-16"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Campagnes</h5>
                                    </div>
                                    <div class="card-block">
                                        <div id="chartdiv" style="height:500px"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <div class="card table-card">
                                    <div class="card-header">
                                        <h5>Envois par pays de destinations</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Pays</th>
                                                        <th>Envoyés</th>
                                                        <th class="text-right">Taux</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><img src="{{ asset('fidelizsms/files/assets/images/widget/GERMANY.jpg') }}" alt="" class="img-fluid img-30"></td>
                                                        <td>Germany</td>
                                                        <td>3,562</td>
                                                        <td class="text-right">56.23%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="{{ asset('fidelizsms/files/assets/images/widget/USA.jpg') }}" alt="" class="img-fluid img-30"></td>
                                                        <td>USA</td>
                                                        <td>2,650</td>
                                                        <td class="text-right">25.23%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="{{ asset('fidelizsms/files/assets/images/widget/AUSTRALIA.jpg') }}" alt="" class="img-fluid img-30"></td>
                                                        <td>Australia</td>
                                                        <td>956</td>
                                                        <td class="text-right">12.45%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="{{ asset('fidelizsms/files/assets/images/widget/UK.jpg') }}" alt="" class="img-fluid img-30"></td>
                                                        <td>United Kingdom</td>
                                                        <td>689</td>
                                                        <td class="text-right">8.65%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="{{ asset('fidelizsms/files/assets/images/widget/BRAZIL.jpg') }}" alt="" class="img-fluid img-30"></td>
                                                        <td>Brazil</td>
                                                        <td>560</td>
                                                        <td class="text-right">3.56%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-right  m-r-20">
                                            <a href="#!" class="b-b-primary text-primary">Voir plus de détails </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Répertoire</h5>
                                    </div>
                                    <div class="card-block">
                                        <div id="piediv" style="height: 240px;"></div>
                                    </div>
                                    <div class="card-footer ">
                                        <div class="row text-center b-t-default">
                                            <div class="col-6 b-r-default m-t-15">
                                                <h5>850</h5>
                                                <p class="text-muted m-b-0">Enregistrés</p>
                                            </div>
                                            <div class="col-6 b-r-default m-t-15">
                                                <h5>225</h5>
                                                <p class="text-muted m-b-0">Supprimés</p>
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

@section('loader')

    <script src="{{ asset('fidelizsms/files/assets/js/rocket-loader.min.js') }}" data-cf-settings="5aaa5f89c516d98bbdd768cf-|49" defer=""></script>

@endsection
