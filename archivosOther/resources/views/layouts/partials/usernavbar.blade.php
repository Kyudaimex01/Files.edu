<!-- Main CSS-->
<link href="{{ asset('css/cs/theme.css') }}" rel="stylesheet" media="all">

<!-- Main JS-->
<script src="{{ asset('js/main.js') }}"></script>

<!-- Jquery JS-->
<script src="{{ asset('css/vendor/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('css/vendor/bootstrap-4.1/popper.min.js') }}"></script>
<script src="{{ asset('css/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
<!-- Vendor JS       -->
<script src="{{ asset('css/vendor/slick/slick.min.js') }}">
</script>
<script src="{{ asset('css/vendor/wow/wow.min.js') }}"></script>
<script src="{{ asset('css/vendor/animsition/animsition.min.js') }}"></script>
<script src="{{ asset('css/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
</script>
<script src="{{ asset('css/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('css/vendor/counter-up/jquery.counterup.min.js') }}">
</script>
<script src="{{ asset('css/vendor/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('css/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('css/vendor/chartjs/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('css/vendor/select2/select2.min.js') }}">
</script>


<!-- Fontfaces CSS-->
<link href="{{ asset('css/cs/font-face.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('css/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('css/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('css/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

<!-- Bootstrap CSS-->
<link href="{{ asset('css/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">


@section('navbar')
    <div class="title-area">
        <h1 class="site-title" itemprop="headline">
            <a class="menu-top" href="http://www.archivos.umss.edu.bo/">Universidad Mayor de San Simon</a></h1>
        <span class="site-description" itemprop="description">Portal de la Universidad Mayor de San Simon</span>
    </div>

    <div class="header-wrap2">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search..." />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                @if(auth::guest())
                    <li id="menu-item-8122"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8121"><a
                                href="{{ asset('login')}}" itemprop="url"><span
                                    itemprop="name">Iniciar Sesion</span></a></li>
                @else
                    @if(auth()->user()->type=='1')
                        <li class="menu-item menu-item-type-custom" href="#" >
                            <a class="menu-top">   Hi Admin</a>

                        </li>
                    @endif

                    <div class="header-button">
                        <div class="noti-wrap">
                            <script type="text/javascript">
                                function showMessages() {
                                    if (document.getElementById("mess-g").className == "noti__item js-item-menu"){
                                        document.getElementById("mess-g").classList.add("show-dropdown");
                                    }else{
                                        document.getElementById("mess-g").classList.remove("show-dropdown");
                                    }
                                }

                                function showMails() {
                                    if (document.getElementById("mail-g").className == "noti__item js-item-menu"){
                                        document.getElementById("mail-g").classList.add("show-dropdown");
                                    }else{
                                        document.getElementById("mail-g").classList.remove("show-dropdown");
                                    }
                                }

                                function showNews() {
                                    if (document.getElementById("new-g").className == "noti__item js-item-menu"){
                                        document.getElementById("new-g").classList.add("show-dropdown");
                                    }else{
                                        document.getElementById("new-g").classList.remove("show-dropdown");
                                    }
                                }

                                function showUserMenu() {
                                    if (document.getElementById("user-g").className == "account-item clearfix js-item-menu"){
                                        document.getElementById("user-g").classList.add("show-dropdown");
                                    }else{
                                        document.getElementById("user-g").classList.remove("show-dropdown");
                                    }
                                }
                            </script>

                            <div id="mess-g" class="noti__item js-item-menu">
                                <a onclick="showMessages()"><i class="zmdi zmdi-comment-more"></i></a>
                                <span class="quantity">1</span>
                                <div class="mess-dropdown js-dropdown">
                                    <div class="mess__title">
                                        <p>You have 2 news message</p>
                                    </div>
                                    <div class="mess__item">
                                        <div class="image img-cir img-40">
                                            <img src="{{ asset('images/icon/avatar-06.jpg')}}" alt="Michelle Moreno" />
                                        </div>
                                        <div class="content">
                                            <h6>Michelle Moreno</h6>
                                            <p>Have sent a photo</p>
                                            <span class="time">3 min ago</span>
                                        </div>
                                    </div>
                                    <div class="mess__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                        </div>
                                        <div class="content">
                                            <h6>Diane Myers</h6>
                                            <p>You are now connected on message</p>
                                            <span class="time">Yesterday</span>
                                        </div>
                                    </div>
                                    <div class="mess__footer">
                                        <a href="#">View all messages</a>
                                    </div>
                                </div>
                            </div>
                            <div id="mail-g" class="noti__item js-item-menu">
                                <a onclick="showMails()"><i class="zmdi zmdi-email"></i></a>
                                <span class="quantity">1</span>
                                <div class="email-dropdown js-dropdown">
                                    <div class="email__title">
                                        <p>You have 3 New Emails</p>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, 3 min ago</span>
                                        </div>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, Yesterday</span>
                                        </div>
                                    </div>
                                    <div class="email__footer">
                                        <a href="#">See all emails</a>
                                    </div>
                                </div>
                            </div>
                            <div id="new-g" class="noti__item js-item-menu">
                                <a onclick="showNews()"><i class="zmdi zmdi-notifications"></i></a>
                                <span class="quantity">3</span>
                                <div class="notifi-dropdown js-dropdown">
                                    <div class="notifi__title">
                                        <p>You have 3 Notifications</p>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c1 img-cir img-40">
                                            <i class="zmdi zmdi-email-open"></i>
                                        </div>
                                        <div class="content">
                                            <p>You got a email notification</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c2 img-cir img-40">
                                            <i class="zmdi zmdi-account-box"></i>
                                        </div>
                                        <div class="content">
                                            <p>Your account has been blocked</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__footer">
                                        <a href="#">All notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div id="user-g" class="account-item clearfix js-item-menu">
                                <div class="image">
                                    <a onclick="showUserMenu()"><img src="images/icon/avatar-01.jpg" alt="John Doe" /></a>
                                </div>
                                <div class="content">
                                    {{ Auth::user()->name }}
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{ Auth::user()->name }}</a>
                                            </h5>
                                            <span class="email">{{ Auth::user()->email }}</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i>Salir</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('saved')
    <!-- Vendor CSS-->
    <link href="{{ asset('css/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <nav class="nav-primary" aria-label="Main" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
        <div class="wrap">
            <ul id="menu-menucomercial" class="menu genesis-nav-menu"><!-- menu-primary -->

    <li id="menu-item-8120" class="menu menu-item menu-item-8120">
        <form class="form-inline" action="">
            <input class="form-control mr-sm-2" type="text" placeholder="search" name="search">
            <button class="" type="submit" style=""><i ></i></button>
        </form>
    </li>
    <li id="menu-item-8121"
        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8121"><a
                href="http://www.umss.edu.bo/index.php/eventos/" itemprop="url"><span
                    itemprop="name">Eventos</span></a></li>
    @if (auth::guest())
        <li id="menu-item-8122"
            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8121"><a
                    href="{{ asset('login')}}" itemprop="url"><span
                        itemprop="name">Iniciar Sesion</span></a></li>
    @else

        @if(auth()->user()->type=='1')
            <li class="menu-item menu-item-type-custom" href="#" >
                <a >   Hi Admin</a>

            </li>
        @endif
        <li class="menu-item menu-item-type-custom dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                <img src="{{ asset('img/avatars/6.jpg') }}" alt="admin@archivos.umss.edu.bo">
                {{ Auth::user()->name }} <span class="role"></span>
            </a>

            <ul class="sub-menu" role="menu">
                <li>
                    <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">Salir</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>

        @endif
        </ul>
        </div>
        </nav>
    <script>
        document.getElementsByClassName("noti__item js-item-menu").addEventListener("click", showNoti);
        function showNoti() {
            document.getElementsByClassName("mess-dropdown js-dropdown").classList.add("show-dropdown");
        }
    </script>
@endsection
