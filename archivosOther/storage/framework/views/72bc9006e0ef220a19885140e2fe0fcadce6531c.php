<!-- Fontfaces CSS-->
<link href="<?php echo e(asset('css/cs/font-face.css')); ?>" rel="stylesheet" media="all">
<link href="<?php echo e(asset('css/vendor/font-awesome-4.7/css/font-awesome.min.css')); ?>" rel="stylesheet" media="all">
<link href="<?php echo e(asset('css/vendor/font-awesome-5/css/fontawesome-all.min.css')); ?>" rel="stylesheet" media="all">
<link href="<?php echo e(asset('css/vendor/mdi-font/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet" media="all">

<!-- Bootstrap CSS-->
<link href="<?php echo e(asset('css/vendor/bootstrap-4.1/bootstrap.min.css')); ?>" rel="stylesheet" media="all">

<!-- Vendor CSS-->
<link href="<?php echo e(asset('css/vendor/animsition/animsition.min.css')); ?>" rel="stylesheet" media="all">
<link href="<?php echo e(asset('css/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet" media="all">
<link href="<?php echo e(asset('css/vendor/wow/animate.css')); ?>" rel="stylesheet" media="all">
<link href="<?php echo e(asset('css/vendor/css-hamburgers/hamburgers.min.css')); ?>" rel="stylesheet" media="all">
<link href="<?php echo e(asset('css/vendor/slick/slick.css')); ?>" rel="stylesheet" media="all">
<link href="<?php echo e(asset('css/vendor/select2/select2.min.css')); ?>" rel="stylesheet" media="all">
<link href="<?php echo e(asset('css/vendor/perfect-scrollbar/perfect-scrollbar.css')); ?>" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="<?php echo e(asset('css/cs/theme.css')); ?>" rel="stylesheet" media="all">

<!-- Jquery JS-->
<script src="<?php echo e(asset('css/vendor/jquery-3.2.1.min.js')); ?>"></script>
<!-- Bootstrap JS-->
<script src="<?php echo e(asset('css/vendor/bootstrap-4.1/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('css/vendor/bootstrap-4.1/bootstrap.min.js')); ?>"></script>
<!-- Vendor JS       -->
<script src="<?php echo e(asset('css/vendor/slick/slick.min.js')); ?>">
</script>
<script src="<?php echo e(asset('css/vendor/wow/wow.min.js')); ?>"></script>
<script src="<?php echo e(asset('css/vendor/animsition/animsition.min.js')); ?>"></script>
<script src="<?php echo e(asset('css/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')); ?>">
</script>
<script src="<?php echo e(asset('css/vendor/counter-up/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('css/vendor/counter-up/jquery.counterup.min.js')); ?>">
</script>
<script src="<?php echo e(asset('css/vendor/circle-progress/circle-progress.min.js')); ?>"></script>
<script src="<?php echo e(asset('css/vendor/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>
<script src="<?php echo e(asset('css/vendor/chartjs/Chart.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('css/vendor/select2/select2.min.js')); ?>">
</script>

<!-- Main JS-->
<script src="<?php echo e(asset('js/main.js')); ?>"></script>


<?php $__env->startSection('navbar'); ?>
    <link href="<?php echo e(asset('css/cs/collapsible.css')); ?>" rel="stylesheet" media="all">
    <script src="<?php echo e(asset('css/cs/collapsible.js')); ?>" type="text/javascript"></script>

    <div class="title-area">
        <h1 class="site-title" itemprop="headline">
            <a class="menu-top" href="<?php echo e(asset('/')); ?>">Unidad de Archivos</a></h1>
        <p class="site-description" itemprop="description">Portal de la Unidad de Archivos</p>
    </div>

    <nav class="nav-primary" aria-label="Main" itemscope="">
        <div class="wrap">
            <ul id="menu-menucomercial" class="menu genesis-nav-menu menu-primary">
                <li id="menu-item-8121" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8121">
                    <form class="form-header" action="">
                        <input id="text" style="width: 200px" class="au-input" type="text" name="search" placeholder="Search..." />
                        <a class="au-btn--submit" style="height: 43px;" type="button" onclick="showSearchBox()">
                            <i class="zmdi zmdi-search"></i>
                        </a>
                    </form>
                </li>
                <?php if(auth::guest()): ?>
                    <li id="menu-item-8122"
                        class="menu-item">
                            <a onclick="showLoginForm()"><i class="btn au-btn--submit">Iniciar Sesion</i></a>
                            <div id="login-g" class="modal fade" style="margin-top: 0;padding-top: 0; background: rgba(0,0,0,0.8) " tabindex="-1" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="col-md-10">
                                            <div style="margin-left:0px; padding-left:0px" class="col-md-2">
                                                <a onclick="showLoginForm()" style="font-size: 35px; color: #002a80">&times;</a>
                                            </div>
                                            <div style="margin-left:20%; padding-left:20%" class="col-md-8">
                                                <h4>Iniciar Sesion</h4>
                                            </div>
                                        </div><br>
                                        <div class="modal-body">
                                            <form method="POST" action="<?php echo e(route('login')); ?>" aria-label="<?php echo e(__('Login')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <div class="form-group row">
                                                    <label for="email" class="col-sm-4 col-form-label text-md-right" style="color: #002a80"><?php echo e(__('E-Mail Address')); ?></label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                                        <?php if($errors->has('email')): ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right" style="color: #002a80"><?php echo e(__('Password')); ?></label>

                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                                        <?php if($errors->has('password')): ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-6 offset-md-1">
                                                        <div class="form-check">
                                                                <label class="form-check-label" style="color: #002a80" for="remember">
                                                                        Recordar cuenta ?&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </label>
                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-0">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            <?php echo e(__('Login')); ?>

                                                        </button>

                                                        <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                                            <?php echo e(__('Olvidaste tu cuenta ?')); ?>

                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </li>
                <?php else: ?>
                    <?php if(auth()->user()->type=='1'): ?>
                        <li class="menu-item menu-item-type-custom" href="#" >
                            <a class="menu-top">   Hi Admin</a>

                        </li>
                    <?php endif; ?>
                    <li class="menu-item">
                    <div >
                        <div class="container-fluid">
                            <div >
                                <div class="header-button">
                                    <div class="noti-wrap">
                                            <div id="mess-g" class="noti__item js-item-menu"
                                                 data-collapsible-hover="exclusive"><!-- class="noti__item js-item-menu"-->
                                                <a onclick="showMessages()"><i class="zmdi zmdi-comment-more"></i></a>
                                                <span class="quantity">1</span>
                                                <div class="mess-dropdown js-dropdown">
                                                    <div class="mess__title">
                                                        <p>You have 2 news message</p>
                                                    </div>
                                                    <div class="mess__item">
                                                        <div class="image img-cir img-40">
                                                            <img src="<?php echo e(asset('images/icon/avatar-06.jpg')); ?>" alt="Michelle Moreno" />
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


                                        <div class="account-wrap">
                                            <div id="user-g" class="account-item clearfix js-item-menu">
                                                <div>
                                                    <a onclick="showUserMenu()"><img src="images/icon/avatar-01.jpg" alt="John Doe" style="width: 50px;border-radius: 50%" /></a>
                                                    <?php echo e(Auth::user()->name); ?>

                                                </div>
                                                <div class="account-dropdown js-dropdown">
                                                    <div class="info clearfix">
                                                        <div class="image col-md-25" style="padding: 0;border: 0;">
                                                            <a href="#">
                                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" style="width: 70px;border-radius: 50%"/>
                                                            </a>
                                                        </div>
                                                        <div class="content col-md-1 " style="padding: 0;border: 0;">
                                                            <h5 class="name">
                                                                <a href="#"><?php echo e(Auth::user()->name); ?></a>
                                                            </h5>
                                                            <span class="email"><?php echo e(Auth::user()->email); ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="account-dropdown__body">
                                                        <div class="account-dropdown__item">
                                                            <a href="#">
                                                                <i class="zmdi zmdi-account"></i>Account</a>
                                                        </div>
                                                    </div>
                                                    <div class="account-dropdown__footer">
                                                        <a class="" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i>Salir</a>

                                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                            <?php echo e(csrf_field()); ?>

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
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <div class="container-fluid" ><h1 style="visibility: hidden">HOLA</h1></div>
    <script type="text/javascript">
        function showSearchBox() {
            if (document.getElementById("text").className == "au-input"){
                document.getElementById("text").classList.add("myhidden");
            }else{
                document.getElementById("text").classList.remove("myhidden");
            }
        }

        function showLoginForm() {
            if (document.getElementById("login-g").className == "modal fade"){
                document.getElementById("login-g").classList.add("show");
                document.getElementById("login-g").classList.add("in");
            }else{
                document.getElementById("login-g").classList.remove("in");
                document.getElementById("login-g").classList.remove("show");
            }
        }

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
<?php $__env->stopSection(); ?>
