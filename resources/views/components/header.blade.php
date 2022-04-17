<div class="header user-{{ $a }} pos-rel">
    <div class="inner">
        <div class="brand">
            <i>
                <em>F</em>lower <em>S</em>pring
            </i>
        </div>
        <nav class="nav">
            <ul class="main-nav">
                <li>
                    <a href="/" class="li-link">
                        <i class="fas fa-home"></i> Accuil
                    </a>
                </li>
                <li class="drop-li">
                    <div class="drop niveau">
                        <div class="toggle">
                            <span>
                                <i class="fas fa-users"></i> Cours
                            </span>
                            <span>
                                <i class="fas fa-caret-down"></i>
                            </span>
                        </div>
                        <div class="list">
                            <ul>
                                <li>
                                    <a href="{{route('coursesView',['niv'=>2])}}">
                                        Deuxieme
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('coursesView',['niv'=>3])}}">
                                        troisieme
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Tous
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="drop-li">
                    <div class="drop categories">
                        <div class="toggle">
                            <span>
                                <i class="fas fa-atom"></i> Categorie
                            </span>
                            <span>
                                <i class="fas fa-caret-down"></i>
                            </span>
                        </div>
                        <div class="list">
                            <ul>
                                <li>
                                    <a href="#">
                                        Science
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        mathimatiques
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="/" class="li-link">
                        <i class="fas fa-envelope"></i> Contact us
                    </a>
                </li>
                <li>
                    <a href="#" class="li-link">
                        About us
                    </a>
                </li>
            </ul>
            <div class="sec-nav">
                <div class="auth">
                    @if(!auth()->check())
                    <button id="logDrop">
                        connexion or inscrire <i class="fas fa-caret-down"></i>
                    </button>
                    <div class="auth-menu">
                        <ul>
                            <li>
                                <a href="{{route('login')}}" class="log">
                                    Connexion
                                </a>
                            </li>
                            <li>
                                <a href="{{route('register')}}" class="log">
                                    s'inscrire
                                </a>
                            </li>
                        </ul>
                    </div>
                    @else
                    <div class="auth-info">
                        <div class="user-img">
                            <img src="https://www.attendit.net/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg" alt="/">
                        </div>
                        <span>
                            {{auth()->user()->name}}
                        </span>
                        <i class="fas fa-caret-down" id="logDrop" class="user menu"></i>
                    </div>
                    <div class="auth-menu">
                        <ul>
                            <li>
                                <a href="{{route('techDash')}}" class="log">
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{route('logout')}}" class="log">
                                    Deconnection
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </nav>
    </div>
</div>