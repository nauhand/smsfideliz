<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            @if(Auth::guard('web')->check() or Auth::guard('subuser')->check())
            <li class="@yield('is-active-dash')">
                <a href="{{ route('dashboard') }}">
                    <span class="pcoded-micon"><i class="fas fa-tachometer-alt"></i></span>
                    <span class="pcoded-mtext">Tableau de bord</span>
                </a>
            </li>
            @endif
             @if(Auth::guard('admin')->check())
            <li class="@yield('is-active-dash-admin')">
                <a href="{{ route('admin-dash') }}">
                    <span class="pcoded-micon"><i class="fas fa-tachometer-alt"></i></span>
                    <span class="pcoded-mtext">Tableau de bord</span>
                </a>
            </li>
            @endif
            @if(Auth::guard('web')->check() or Auth::guard('subuser')->check())
            <li class="pcoded-hasmenu @yield('is-active-camp')">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                    <span class="pcoded-mtext">Campagnes</span>
                    <span class="badge badge-danger" style="margin-left: 80px;">5</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="@yield('is-active-newcamp')">
                        <a href="{{ route('nouvelle-campagne') }}">
                            <span class="pcoded-mtext" style="font-size: 13px;">Nouvelle campagne</span>
                        </a>
                    </li>
                    <li class="@yield('is-active-listcamp')">
                        <a href="{{ route('liste-campagnes') }}">
                            <span class="pcoded-mtext" style="font-size: 13px;">Liste des campagnes</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            @if(Auth::guard('web')->check() or Auth::guard('subuser')->check())
            <li class="@yield('is-active-rep')">
                <a href="{{ route('repertoire') }}">
                    <span class="pcoded-micon"><i class="far fa-address-book"></i></span>
                    <span class="pcoded-mtext">Répertoire</span>
                </a>
            </li>
            @endif
            <li class="pcoded-hasmenu @yield('is-active-compte')">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fas fa-user-tie"></i></span>
                    <span class="pcoded-mtext">Gestion de comptes</span>
                </a>
                <ul class="pcoded-submenu">
                    @if(Auth::guard('admin')->check())
                    <li class="@yield('is-active-addclient')">
                        <a href="{{ route('ajouter-clients') }}">
                            <span class="pcoded-mtext" style="font-size: 13px;">Ajouter client</span>
                        </a>
                    </li>
                    <li class="@yield('is-active-listclient')">
                        <a href="{{ route('liste-clients') }}">
                            <span class="pcoded-mtext" style="font-size: 13px;">Liste clients</span>
                        </a>
                    </li>
                    @endif
                    @if(Auth::guard('web')->check())
                    <li class="@yield('is-active-addsous')">
                        <a href="{{ route('ajouter-sous-compte') }}">
                            <span class="pcoded-mtext" style="font-size: 13px;">Ajouter un sous-compte</span>
                        </a>
                    </li>
                    <li class="@yield('is-active-listsous')">
                        <a href="{{ route('liste-sous-compte') }}">
                            <span class="pcoded-mtext" style="font-size: 13px;">Liste sous-comptes</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </li>
            <li class="pcoded-hasmenu @yield('is-active-rech')">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fas fa-coins"></i></span>
                    <span class="pcoded-mtext">Finances</span>
                </a>
                <ul class="pcoded-submenu">
                    @if(Auth::guard('web')->check())
                    <li class="@yield('is-active-listrech')">
                        <a href="{{ route('liste-recharge') }}">
                            <span class="pcoded-mtext" style="font-size: 13px;">Liste Rechargements</span>
                        </a>
                    </li>
                    @endif
                    @if(Auth::guard('admin')->check())
                    <li class="@yield('is-active-rechcompte')">
                        <a href="{{ route('recharger-compte') }}">
                            <span class="pcoded-mtext" style="font-size: 13px;">Recharger un compte</span>
                        </a>
                    </li>
                    <li class="@yield('is-active-rech-attente')">
                        <a href="{{ route('recharge-attente') }}">
                            <span class="pcoded-mtext" style="font-size: 13px;">Rechargement en attente</span>
                        </a>
                    </li>
                    @endif
                    @if(Auth::guard('web')->check())
                    <li class="@yield('is-active-rechsouscompte')">
                        <a href="{{ route('recharger-souscompte') }}">
                            <span class="pcoded-mtext" style="font-size: 13px;">Recharger un sous-compte</span>
                        </a>
                    </li>
                    @endif
                    @if(Auth::guard('web')->check())
                    <li class="@yield('is-active-demande')">
                        <a href="{{ route('demande-rechargement') }}">
                            <span class="pcoded-mtext" style="font-size: 13px;">Demande de rechargement</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </li>
            <li class="pcoded-hasmenu @yield('is-active-rap')">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-chart-pie"></i></span>
                    <span class="pcoded-mtext">Rapport & stats</span>
                </a>
                <ul class="pcoded-submenu">
                    @if(Auth::guard('web')->check() or Auth::guard('admin')->check())
                    <li class="@yield('is-active-createrap')">
                        <a href="{{ route('create-rapport') }}">
                            <span class="pcoded-mtext" style="font-size: 13px;">Créer un rapport</span>
                        </a>
                    </li>
                    <li class="@yield('is-active-listrap')">
                        <a href="{{ route('liste-rapports') }}">
                            <span class="pcoded-mtext" style="font-size: 13px;">Liste des rapports</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </li>
        </ul>
        <hr>
        <div class="pcoded-navigatio-lavel">Service support</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="@yield('is-active-support')">
                <a href="">
                    <span class="pcoded-micon"><i class="fas fa-question-circle"></i></span>
                    <span class="pcoded-mtext">Support</span>
                </a>
            </li>
        </ul>
    </div>
</nav>