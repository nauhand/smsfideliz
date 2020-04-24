<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu"></i>
            </a>
            <a href="index.html">
                <img class="img-fluid" src="{{ asset('fidelizsms/files/assets/images/Fideliz2sms.png') }}" width="140" alt="Theme-Logo" />
            </a>
            <a class="mobile-options">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li>
                    <a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" data-cf-modified-5aaa5f89c516d98bbdd768cf-="">
                        <i class="feather icon-maximize full-screen"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                            Solde <i class="fas fa-euro-sign"></i>
                        </div>
                    </div>
                </li>
                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ URL::asset('ClientsImages/'.Auth::user()->image) }}" class="img-radius" alt="User-Profile-Image">
                            <span>
                                @if(Auth::guard()->check())
                                  {{ 
                                    Auth::guard()->user()->nom.' '.Auth::guard()->user()->prenoms 
                                  }}
                                @elseif(Auth::guard('admin')->check())
                                    {{ 
                                      Auth::guard('admin')->user()->nom.' '.Auth::guard('admin')->user()->prenoms 
                                    }}
                                @elseif(Auth::guard('subuser')->check())
                                  {{ 
                                    Auth::guard('subuser')->user()->nom.' '.Auth::guard('subuser')->user()->prenoms 
                                  }}
                                @endif
                            </span>
                            <i class="feather icon-chevron-down"></i>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                                <a href="{{ route('profile-clients') }}">
                                    <i class="feather icon-user"></i> Profil
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('liste-sous-compte') }}">
                                    <i class="fa fa-user-tie"></i> Mes sous comptes
                                </a>
                            </li>
                            <br>
                            <li>
                                <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="feather icon-log-out" style="color: red"></i> Déconnexion
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="sidebar" class="users p-chat-user showChat">
    <div class="had-container">
        <div class="card card_main p-fixed users-main">
            <div class="user-box"><br>
                <div class="main-friend-list">
                    <div class="media userlist-box" data-id="1" data-status="online" data-toggle="tooltip" data-placement="left" >
                        <div class="media-body">
                            <div class="f-13 chat-header">Crédit rechargé : 200</div>
                        </div>
                    </div>
                    <div class="media userlist-box" data-id="2" data-status="online" data-toggle="tooltip" data-placement="left" >
                        <div class="media-body">
                            <div class="f-13 chat-header">Crédit restant : 125</div>
                        </div>
                    </div>
                    <div class="media userlist-box" data-id="2" data-status="online" data-toggle="tooltip" data-placement="left" >
                        <div class="media-body">
                            <div class="f-13 chat-header">Conso du mois : 325</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>