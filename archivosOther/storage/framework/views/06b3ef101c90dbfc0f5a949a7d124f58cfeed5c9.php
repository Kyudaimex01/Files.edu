<?php $__env->startSection('picture'); ?>
<div class="container-fluid col-md-12" style="padding-top:1%;padding-bottom:1%; background-color:whitesmoke; width: 99%; height: fit-content;">

    <!-- Carousel container -->
    <div id="my-pics" class="carousel slide" data-ride="carousel"
    style="width:99%;margin-left: 0.4%;margin-right: 0.4%;background-color: none;">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li style="border-color: #1b6d85" data-target="#my-pics" data-slide-to="0" class="active"></li>
            <li style="border-color: #1b6d85" data-target="#my-pics" data-slide-to="1"></li>
            <li style="border-color: #1b6d85" data-target="#my-pics" data-slide-to="2"></li>
            <li style="border-color: #1b6d85" data-target="#my-pics" data-slide-to="3"></li>
        </ol>

        <!-- Content -->
        <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="item active">
                <div>
                    <img src="<?php echo e(asset('img/index/bienvenido-archivos-1.jpg')); ?>" alt="Bienvenidos">
                </div>
                <div style="margin-bottom: 7%">
                    <h2 class="description__title" style="background-color: none; color:#002a80">BIENVENIDOS</h2>
                    <P class="description_text" style="margin-right:4%;margin-left:4%;color: black">Al Sitio Web de la Secci&oacute;n Archivos de la Universidad Mayor de San Sim&oacute;n (UMSS), secci&oacute;n responsable del resguardo y custodia de toda la documentaci&oacute;n acad&eacute;mica e institucional. Aqu&iacute; encontar&aacute; informaci&oacute;n relevante y de utilidad en lo que respecta a Legalizaci&oacute;n y Certificaci&oacute;n de documentos emitidos por esta casa superior de estudios, y otros Tr&aacute;mites similares. La Secci&oacute;n Archivos de la UMSS trabaja al servicio de la Comunidad Universitaria de San Sim&oacute;n y p&uacute;blico en general<a href="#" >ver mas</a></P>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="item">
                <div>
                    <img src="<?php echo e(asset('img/index/bienvenido-archivos-2.jpg')); ?>" alt="Visi&oacute;n">
                </div>
                <div style="margin-bottom: 7%">
                    <h2 style="background-color: none; color:#002a80">VISI&Oacute;N</h2>
                    <P style="margin-right:4%;margin-left:4%;color: black">La Secci&oacute;n Archivos de la UMSS pretende constituirse en una instancia estrat&eacute;gica de manejo de la Informaci&oacute;n Documental Oficial de esta Universidad, a partir de mantener una relaci&oacute;n estrecha con todas las Unidades, Carreras y Facultades de la misma y ser reconocida dentro la Comunidad Universitaria por su aporte al Desarrollo Administrativo de la UMSS.<a href="#" >ver mas</a></P>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="item">
                <div>
                    <img src="<?php echo e(asset('img/index/bienvenido-archivos-3.jpg')); ?>" alt="Misi&oacute;n">
                </div>
                <div style="margin-bottom: 7%">
                    <h2 class="description__title c-green" style="background-color: none; color:#002a80">MISI&Oacute;N</h2>
                    <P class="description_text" style="margin-right:4%;margin-left:4%;color: black">La Secci&oacute;n Archivos de la UMSS es la instancia encargada del resguardo y custodia permanente e indefinida de toda Documentaci&oacute;n Oficial e Hist&oacute;rica: Diplomas, T&iacute;tulos de Pre y Post-Grado, y de la Normativa que rige para una buena marcha Institucional, generada por el Rectorado y la Secretaria General de la UMSS en su Inter-Relación con las diferentes Unidades Acad&eacute;micas y Administrativas.<a href="#" >ver mas</a></P>
                </div>
            </div>
            <!-- Slide 4 -->
            <div class="item">
                <div>
                    <img src="<?php echo e(asset('img/index/bienvenido-archivos-4.jpg')); ?>" alt="Actividad Principal">
                </div>
                <div style="margin-bottom: 7%">
                    <h2 class="description__title c-green" style="background-color: none; color:#002a80">ACTIVIDAD PRINCIPAL</h2>
                    <P class="description_text" style="margin-right:4%;margin-left:4%;color: black">Realizar procesos de recepci&oacute;n, depuraci&oacute;n, codificaci&oacute;n, ordenamiento y sistematizaci&oacute;n del archivo y resguardo de la documentación universitaria generada en cada gesti&oacute;n rectoral, expedientes de Diplomas y Ti&iacute;tulos de Pre y Post-Grado emitidos por la Universidad que se hallan en custodia de esta Unidad, disponer de informaci&oacute;n fidedigna, aut&eacute;ntica y confiable que permita la legalizaci&oacute;n de documentaci&oacute;n y coadyuvar en los procesos de sistemas de informaci&oacute;n administrativa y acad&eacute;mica.<a href="#" >ver mas</a></P>
                </div>
            </div>
        </div>

        <!-- Previous/Next controls -->
        <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<!-- jQuery library -->
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<!-- Bootstrap JS -->
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

<!-- Initialize Bootstrap functionality -->
<script>
    // Initialize tooltip component
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    // Initialize popover component
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>
<style>
        .carousel-indicators .active{
            background-color: darkred;
        }
</style>
