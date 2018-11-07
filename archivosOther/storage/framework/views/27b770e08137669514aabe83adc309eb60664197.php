<?php $__env->startSection('content'); ?>

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
                                                    <?php echo $__env->make('layouts.partials.pictures', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                                    <?php echo $__env->yieldContent('picture'); ?>
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
                                                    <?php echo $__env->make('layouts.partials.notices1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                                    <?php echo $__env->yieldContent('notice'); ?>
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
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>