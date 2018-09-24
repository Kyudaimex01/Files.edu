
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

                                                        <h1 style="text-align: center; " id="SombraTitulo">Unidad de Archivos UMSS</h1>

                                                    <!--finrow-->
                                                    </div>
                                                </div>
                                                <div>
                                                    @include('layouts.partials.notices1')
                                                    @yield('notice')
                                                </div>
                                                    <br>
                                                <div>
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

                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
@endsection

@section('pictur')
    <div class="col-md-6">
        <h1>Hi</h1>
    </div>

    <div class="col-md-6">
        <div class="col-md-3" style="padding-top:1%">
            <a href="https://www.facebook.com/UmssBolOficial/">
                <img class="ImgZoom"
                     src="./Portal Oficial de la Universidad Mayor de San Simón_files/Aviso-Reincorporaciones-2-2-2018.jpg"
                     width="100%">
            </a>
        </div>

        <div class="col-md-3" style="padding-top:1%">
            <a href="https://www.facebook.com/UmssBolOficial/">
                <img class="ImgZoom"
                     src="./Portal Oficial de la Universidad Mayor de San Simón_files/Aviso-Facultad-de-Economia.jpg"
                     width="100%">
            </a>
        </div>
    </div>
@endsection
