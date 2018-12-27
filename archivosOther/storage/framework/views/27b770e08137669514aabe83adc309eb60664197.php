<?php $__env->startSection('content'); ?>
<div style="margin-top:0px;padding-top:0px; margin-left:2%;margin-right:1%">
    <div class="content-sidebar-wrap" style="margin-top:0px;padding-top:0px">
        <div class="content" style="margin-top:0px;padding-top:0px">
            <div id="front-page-1" class="front-page-1" style="margin-top:0px;padding-top:0px">
                <div class="image-section" style="margin-top:0px;padding-top:0px">
                    <div class="flexible-widgets widget-area widget-full">
                        <div class="wrap">
                            <section id="custom_html-11" class="widget_text widget widget_custom_html">
                                <div class="widget_text widget-wrap">
                                    <div class="textwidget custom-html-widget">
                                    <!--    <div id="letra">
                                            <div class="row" align="center">
                                                <h1 style="margin-rigth:30%;margin-left:30%" id="SombraTitulo">Unidad de Archivos UMSS</h1>
                                            </div>
                                        </div>
                                    -->
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
            <br>
            <div class="container">
                <h3 style="text-align: center; text-transform: uppercase; color: #003770">Historia del Archivo</h3>
                <br>
                <img style="display: block; margin-left: auto; margin-right: auto; width: 95%" src="images/Historia-Archivos-604x270.jpg" alt="Historia de la Unidad de Archivos" >
                <br>
                p>La Sección Archivos de la Universidad Mayor de San Simón (UMSS),
                    dependiente de la Secretaria General, fue creada en fecha 25 de marzo de 1955.
                    En dicha fecha, el Dr. José Francisco Lora, Secretario del Rectorado,
                    por encargo del Secretario General de la Universidad Enrique Levy Meruvia,
                    resuelve la urgente necesidad de crear un ítem para el cargo de Archivero que
                    proceda a elevar un informe completo de los documentos del Archivo General de
                    la UMSS, documentos que constan en archivos. Esta Sección cumple hasta el presente
                    59 años al servicio de esta casa superior de estudios.</p>
                <p>Desde su fundación y durante su vida institucional se identifican cuatro periodos de
                    importantes cambios en su estructura interna: <a href="history">ver m&aacute;s</a></p>
            </div>
            <br>
            <div style="margin-bottom: 0; padding-bottom: 0">
                <h3 style="text-align: center; text-transform: uppercase; color: #003770">Noticias de la Pagina</h3><!--; margin-rigth:30%;margin-left:30%;color:blue-->
                <br>
            </div>
            <div style="margin-top: 0; padding-top: 0; margin-bottom: 0px; padding-bottom: 0px">
                <div class="image-section" style="margin-top: 0; padding-top: 0; background:none">
                    <div style="margin-top: 0; padding-top: 0" class="flexible-widgets widget-area widget-full">
                        <div class="wrap">
                            <section id="custom_html-11" class="widget_text widget widget_custom_html">
                                <div class="widget_text widget-wrap">
                                    <div class="textwidget custom-html-widget">
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
            <div style="width: 60%; height: 60%; margin-top: 0px; padding-top: 0px; margin-bottom: 0px; padding-bottom: 0px; display: block; margin-left: auto; margin-right: auto">
                <?php echo $__env->make('layouts.fullcalendar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->yieldContent('calendar'); ?>
            </div>
            <br>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('index.save'); ?>
<div class="site-inner">
    <div class="content-sidebar-wrap">
        <div class="content">
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
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>