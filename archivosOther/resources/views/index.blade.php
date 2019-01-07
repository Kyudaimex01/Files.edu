
@extends('layouts.header')
@section('content')

        <div class="site-inner">
            <div class="content-sidebar-wrap">
                <main class="content">
                    <div id="front-page-1" class="front-page-1">
                        <div class="image-section">
                            <div class="flexible-widgets widget-area widget-full">
                                <div class="wrap">
                                    <section id="custom_html-11" class="widget_text widget widget_custom_html">
                                        <div class="widget_text widget-wrap">
                                            <div class="textwidget custom-html-widget">
                                                <div id="letra">
                                                    <div class="row" align="center">
                                                        <h1 style="margin-rigth:30%;margin-left:30%" id="SombraTitulo">Unidad de Archivos UMSS</h1>
                                                    <!--finrow-->
                                                    </div>
                                                </div>
                                                <div >
                                                    @include('layouts.partials.pictures')
                                                    @yield('picture')
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div id="front-page-3" class="front-page-3">
                        <div class="image-section">
                            <div class="flexible-widgets widget-area widget-full">
                                <div class="wrap">
                                    <section id="custom_html-11" class="widget_text widget widget_custom_html">
                                        <div class="widget_text widget-wrap">
                                            <div class="textwidget custom-html-widget">
                                                <div id="letra">
                                                        <div class="row" align="center">
                                                        <h1 style="margin-rigth:30%;margin-left:30%" id="SombraTitulo">Noticias de la Pagina</h1>
                                                        <!--finrow-->
                                                    </div>
                                                </div>
                                                <div >
                                                    @include('layouts.partials.notices1')
                                                    @yield('notice')
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--           <hr>seccion donde se añadira el slider o carrusel. Fer:aun esta en progreso                                                                                                                                                                                                                                                                                                                                                                                             -->
         <!--           <div id="front-page-3" class="front-page-3">
                        <div class="image-section">
                            <div class="flexible-widgets widget-area widget-full">
                                <div class="wrap">
                                    <section id="custom_html-11" class="widget_text widget widget_custom_html">
                                        <div class="widget_text widget-wrap">
                                            <div class="textwidget custom-html-widget">
                                                <div id="letra">
                                                    <div class="row" align="center">
                                                        <h1 style="margin-rigth:30%;margin-left:30%" id="SombraTitulo">Seccion Archivos</h1>
                                                        <!--finrow-->
         <!--                                           </div>
                                                </div>
                                                <div >

                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>  -->
@endsection
