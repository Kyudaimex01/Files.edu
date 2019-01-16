<!DOCTYPE html>
<!-- saved from url=(0023)http://www.archivos.umss.edu.bo/ -->
<html lang="es-ES">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Oficial de la Unidad de Archivos</title>

    <script type="text/javascript">
        $(document).on('ready', function(){
               setTimeout(autoloaded, 1000); //Se llamará cada 5 segundos y se refrescarán los datos de dicha tabla que se cargan mediante la función LOAD de JQuery.
        });

        function refrescarPagina(){
            $('#autoloaded').load('header', function(){
                   //Realizar las funciones pertinentes
            });
        }
    </script>

    <!--Bootrap_Imagenes-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--slider de galeria Imagenes-->
    <link rel="stylesheet" href="css/slider.css">

    <!--dropzone-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" type="text/css">

    @stack('styles')

    <!-- All in One SEO Pack 2.7.2 by Michael Torbert of Semper Fi Web Design[140,177] -->
    <meta name="description"
          content="Portal de la Unidad de Archvos de la Universidad Mayor de San Simón de Bolivia, para noticias, información HAZ CLIC AQUÍ">
    <link rel="next" href="{{asset('/')}}">

    <link rel="canonical" href="{{asset('/')}}">

    <!--dropzone-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script>
        $('#datepincker').datepicker({
            autoclose: true
        })

        $('.select').select();

        CKEDITOR.replace('editor');

        new Dropzone('.dropzone',{
            url: '/',
            dictDefaultMessage: 'Arrastra las imagenes aqui para subirlas'
        })

        Dropzone.autoDiscover = false;

    </script>

<!--1-->
    <script type="text/javascript" src="{{ asset('js/headscript.js') }}"></script>
    <!-- /all in one seo pack
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="http://s.w.org/">
    <link rel="alternate" type="application/rss+xml" title="Universidad Mayor de San Simon » Feed"
          href="http://www.umss.edu.bo/index.php/feed/">
    <link rel="alternate" type="application/rss+xml" title="Universidad Mayor de San Simon » RSS de los comentarios"
          href="http://www.umss.edu.bo/index.php/comments/feed/">
    <link rel="alternate" type="text/calendar" title="Universidad Mayor de San Simon » iCal Feed"
          href="http://www.umss.edu.bo/index.php/eventos/?ical=1">
    -->
    <link rel="stylesheet" id="altitude-pro-theme-css"
          href="{{ asset('css/style.css')}}" type="text/css" media="all">
    <style id="altitude-pro-theme-inline-css" type="text/css">
        .front-page-1 {
            background-image: url({{ asset('/img/Archivo_libros_1024x768.png') }} );
        }

        .front-page-3 {
            background-image: url(//www.umss.edu.bo/wp-content/uploads/2017/05/1_Img_opt.jpg);
        }

        .front-page-5 {
            background-image: url(//www.umss.edu.bo/wp-content/uploads/2017/05/5_Img_opt.jpg);
        }

        .front-page-7 {
            background-image: url(//www.umss.edu.bo/wp-content/uploads/2017/12/UmssFrontPage1_opt.jpg);
        }

        a,
        .entry-title a:hover,
        .image-section a:hover,
        .image-section .featured-content .entry-title a:hover,
        .site-footer a:hover {
            color: #003770;
        }

        button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"],
        .archive-pagination li a:hover,
        .archive-pagination .active a,
        .button,
        .footer-widgets,
        .widget .button {
            background-color: #003770;
        }

        button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"],
        .button,
        .front-page input:focus,
        .front-page textarea:focus,
        .widget .button {
            border-color: #003770;
        }

    </style>
<!-- 2 -->
    <!--[if IE]>
    <script type='text/javascript'
            src='http://www.umss.edu.bo/wp-content/plugins/wordpress-popup/assets/js/vendor/fitie/fitie.js?ver=3.0.4.2'></script>
    <![endif]--><!--[if lt IE 9]>
    <script type='text/javascript'
            src='http://www.umss.edu.bo/wp-content/themes/genesis/lib/js/html5shiv.min.js?ver=3.7.3'></script>
    <![endif]-->
    <style type="text/css">.site-title a {
            background: url({{ asset('img/logo-archivos-web.png')}}) no-repeat !important;
        }</style>
<!-- 3 -->
    <style>@-webkit-keyframes insQ_100 {
               from {
                   outline: 1px solid transparent
               }
               to {
                   outline: 0px solid transparent
               }
           }

        #menufication-top {
            animation-duration: 0.001s;
            animation-name: insQ_100;
            -webkit-animation-duration: 0.001s;
            -webkit-animation-name: insQ_100;
        } </style>

<!--    <link href="{{ asset('css/stylehead.css') }}" rel="stylesheet">-->
    <link href="{{ asset('css/styleheadaux.css') }}" rel="stylesheet" id="wp-custom-css">
<!--<script src="{{ asset('js/jquery.jscroll.min.js') }}"></script> -->
    <link href="{{ asset('css/search-form.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
    <link href="{{ asset('css/front.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.min.css')}}"/>
    <script type="text/javascript" src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script type="text/javascript" class="init">
        $(document).ready(function(){
            $('#data').DataTable({
                "order":[[1, "asc"]],
                "language":{
                    "lengthMenu": "Mostrar _MENU_ registros por pagina",
                    "info": "Mostrando pagina _PAGE_ de _PAGES_",
                        "infoEmpty": "No hay registros disponibles",
                        "infoFiltered": "( Filtrado de _MAX_ registros)",
                        "loadingRecords": "Cargando...",
                        "processing": "procesando...",
                        "search": "Buscar:",
                        "zeroRecords": "No se encontraron registros coincidentes",
                        "paginate": {
                            "next": "Siguiente",
                            "previous": "Anterior"
                        },

                }
            })
        });
    </script>
    <style type="text/css">
        /* Button */
        button,
        .button {
            -moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            -ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            background-color: #FFFFFF;
            border-radius: 0.375em;
            border: 0;
            box-shadow: inset 0 0 0 2px #003770;
            color: #003770 !important;
            cursor: pointer;
            display: inline-block;
            font-family: UNI SANS REGULAR;
            font-size: 0.8em;

            height: 3.5em;
            letter-spacing: 0.075em;
            line-height: 3.5em;
            padding: 0 2.25em;
        }

        button:hover,
        .button:hover {
            background-color: rgb(237, 28, 36);
        }

        /* a */
        a.menu-top {
            -moz-transition: color 0.2s ease-in-out, border-bottom-color 0.2s ease-in-out;
            -webkit-transition: color 0.2s ease-in-out, border-bottom-color 0.2s ease-in-out;
            -ms-transition: color 0.2s ease-in-out, border-bottom-color 0.2s ease-in-out;
            transition: color 0.2s ease-in-out, border-bottom-color 0.2s ease-in-out;
            color: none;
            text-decoration: none;
        }

        a.menu-top:hover {
            border-bottom-color: #E30613;
            color: #E30613;
            text-decoration: none;
        }

    </style>

</head>
<body class="home blog tribe-js wp-featherlight-captions custom-header header-image header-full-width full-width-content secondary-nav front-page featured-section"
      itemscope="" style=""><!--itemtype="https://schema.org/WebPage" -->
<div class="site-container" id="autoloaded">
    <header class="site-header" itemscope=""> <!-- itemtype="https://schema.org/WPHeader" -->
        <div class="wrap">
            <nav class="nav-secondary" aria-label="Secondary" itemscope="">
                <!-- itemtype="https://schema.org/SiteNavigationElement" -->
                <div class="wrap">
                    <ul id="menu-menuinstitucionaltop" class="menu genesis-nav-menu menu-secondary">
                        <li id="menu-item-5137"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-5137">
                            <a class="menu-top" href="{{ '/' }}" itemprop="url"><span itemprop="name"><i
                                            class="fa fa-bars"></i><span class="fontawesome-text"> Inicio</span></span></a>
                        </li>
                        <li id="menu-item-859"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-859">
                            <a class="menu-top" href=" " itemprop="url"><span itemprop="name"><i class="fa fa-university"></i><span
                                            class="fontawesome-text"> Servicios</span></span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-860"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-860">
                                    <a class="menu-top" href="{{ 'legalization' }}" itemprop="url"><span itemprop="name">Legalizaciones</span></a>

                                </li>
                                <li id="menu-item-2017  "
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2017">
                                    <a class="menu-top" href="{{ 'certification' }}" itemprop="url"><span itemprop="name">Certificaciones</span></a>

                                </li>
                                <li id="menu-item-3589"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3589">
                                    <a class="menu-top" href="{{ 'apostille' }}" href="{{ 'apostille' }}" itemprop="url"><span
                                                itemprop="name">Apostilla</span></a></li>
                                <li id="menu-item-1156"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1156">
                                    <a class="menu-top" href="{{ 'guide' }}" itemprop="url"><span itemprop="name"><i class="fa fa-user"></i><span
                                                    class="fontawesome-text"> Guia Tramite</span></span></a>

                                </li>
                            </ul>
                        </li>

                        <li id="menu-item-1182"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1182"><a
                                    class="menu-top" target="_blank" href="http://www.posgrado.umss.edu.bo/" itemprop="url"><span
                                        itemprop="name"><i class="fa fa-graduation-cap"></i><span
                                            class="fontawesome-text"> Calendario de Fechas</span></span></a></li>
                        <li id="menu-item-7"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8117">
                            <a class="menu-top" href=" " itemprop="url"><span itemprop="name"><i class="fa fa-flask"></i><span
                                            class="fontawesome-text"> Galeria</span></span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-8"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8118">
                                    <a class="menu-top" href="{{ 'audios' }}" itemprop="url"><span itemprop="name">Audios</span></a>
                                </li>
                                <li id="menu-item-9"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8119">
                                    <a class="menu-top" href="{{ 'imagen' }}" itemprop="url"><span itemprop="name">Imagenes</span></a>
                                </li>
                                <li id="menu-item-10"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8200">
                                    <a class="menu-top" href="{{ 'videos' }}" itemprop="url"><span itemprop="name">Videos</span></a></li>
                            </ul>

                            </li>
                        <li id="menu-item-8147"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8147">
                            <a class="menu-top" href="http://www.umss.edu.bo/index.php/contacto/" itemprop="url"><span
                                itemprop="name"><i class="fa fa-comments"></i><span class="fontawesome-text"> Contacto</span></span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-1196"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1196">
                                    <a class="menu-top" target="_blank" href="http://www.umss.edu.bo/index.php/blog/" itemprop="url">
                                        <span itemprop="name"><i class="fa fa-users"></i><span class="fontawesome-text"> Consultas</span></span></a></li>
                                <li id="menu-item-8148"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8148"><a
                                            class="menu-top" target="_blank" href="http://www.sitra.umss.edu.bo/consulta/consulta"
                                            itemprop="url"><span itemprop="name"><i class="fa fa-folder-open"></i><span
                                                    class="fontawesome-text"> SItra</span></span></a></li>
                            </ul>
                        </li>

                            <ul class="sub-menu">
                                <li id="menu-item-8118"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8118">
                                    <a class="menu-top" href="{{ 'imagen' }}" itemprop="url"><span itemprop="name">Imagenes</span></a>
                                </li>
                                <li id="menu-item-8119"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8119">
                                    <a class="menu-top" href="{{ 'videos' }}" itemprop="url"><span itemprop="name">Videos</span></a>
                                </li>
                                <li id="menu-item-8200"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8200">
                                    <a class="menu-top" href="{{ 'audios' }}" href="http://www.umss.edu.bo/index.php/auditoria/" itemprop="url"><span
                                                itemprop="name">Audios</span></a></li>
                            </ul>
                        </li>

                        <li id="menu-item-1196"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1196"><a
                                    class="menu-top" target="_blank" href="http://www.umss.edu.bo/index.php/blog/" itemprop="url"><span
                                        itemprop="name"><i class="fa fa-users"></i><span
                                            class="fontawesome-text"> Consultas</span></span></a></li>

                        <li id="menu-item-8147"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8147">
                            <a class="menu-top" itemprop="url"><span itemprop="name"><i class="fa fa-cogs"></i><span
                                            class="fontawesome-text"> Servicios en linea</span></span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-8144"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8144"><a
                                            class="menu-top" target="_blank" href="https://correo.umss.edu.bo/" itemprop="url"><span
                                                itemprop="name"><i class="fa fa-envelope-open"></i><span
                                                    class="fontawesome-text"> Correo</span></span></a></li>
                                <li id="menu-item-8148"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8148"><a
                                            class="menu-top" target="_blank" href="http://www.sitra.umss.edu.bo/consulta/consulta"
                                            itemprop="url"><span itemprop="name"><i class="fa fa-folder-open"></i><span
                                                    class="fontawesome-text"> SItra</span></span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
        @include('layouts.partials.usernavbar')
        @yield('navbar')
    </header>

</div>

@yield('content')



@stack('scripts')

</body>
<footer class="site-footer" itemscope="" itemtype="https://schema.org/WPFooter">
    <div class="wrap">
        <p>Síguenos en
            <a href="https://www.facebook.com/UmssBolOficial/">
                <img src="./Portal Oficial de la Universidad Mayor de San Simón_files/facebook.png"
                     alt="" width="30" height="30"></a>
            <a href="https://twitter.com/UmssBolOficial">
                <img src="./Portal Oficial de la Universidad Mayor de San Simón_files/Twitter.png"
                     alt="" width="30" height="30"></a>
            <a href="https://www.instagram.com/umssboloficial/">
                <img src="./Portal Oficial de la Universidad Mayor de San Simón_files/instagram.png"
                     alt="" width="30" height="30"></a>
            <a href="https://www.linkedin.com/school/universidad-mayor-de-san-simon/">
                <img src="./Portal Oficial de la Universidad Mayor de San Simón_files/linkedin.png"
                     alt="" width="30" height="30"></a>
            <a href="https://www.youtube.com/universidadmayordesansimon">
                <img src="./Portal Oficial de la Universidad Mayor de San Simón_files/youtube2-300x300.png"
                     alt="" width="30" height="30"></a>
            <br>    Dir: Av. Oquendo y Jordan, Casilla - 992
            <br>   Tel: (591-4) 4232541 - 44 (Int. 358); Fax: (591-4) 4115900
            <br>    Email: archivos@umss.edu.bo - ml.bald@umss.edu.bo - lucyargote@umss.edu.bo
            <br>  Derechos Reservados  ©&nbsp;2018 · Seccion Archivos - UMSS  ·
            <a target="_blank" href="http://websis.umss.edu.bo/acercade.asp?codser=INIC&amp;idcat=38">
                UPSI</a>
            <br>    Cochabamba - Bolivia
        </p>
    </div>
</footer>
