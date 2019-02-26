@section('picture')
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
                    <img src="{{ asset('img/index/bienvenido-archivos-1.jpg') }}" alt="Bienvenidos">
                </div><br>
                <div style="margin-bottom: 7%">
                    <h3 class="description__title" style="background-color: none; color:#002a80">BIENVENIDOS</h3>
                    <p class="description_text" style="margin-right:4%;margin-left:4%;color: black">Al Sitio Web de la Secci&oacute;n Archivos de la Universidad Mayor de San Sim&oacute;n (UMSS), secci&oacute;n responsable del resguardo y </p>
                    <p><button class="link" onclick="showWelcome()">ver mas</button></p>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="item">
                <div >
                    <img src="{{ asset('img/index/bienvenido-archivos-2.jpg') }}" alt="Visi&oacute;n">
                </div><br>
                <div style="margin-bottom: 7%">
                    <h3 style="background-color: none; color:#002a80">VISI&Oacute;N</h3>
                    <p style="margin-right:4%;margin-left:4%;color: black">La Secci&oacute;n Archivos de la UMSS pretende constituirse en una instancia estrat&eacute;gica de manejo de la Informaci&oacute;n </p>
                    <p><button class="link" onclick="showVision()">ver mas</button></p>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="item">
                <div >
                    <img src="{{ asset('img/index/bienvenido-archivos-3.jpg') }}" alt="Misi&oacute;n">
                </div><br>
                <div style="margin-bottom: 7%">
                    <h3 class="description__title c-green" style="background-color: none; color:#002a80">MISI&Oacute;N</h3>
                    <p class="description_text" style="margin-right:4%;margin-left:4%;color: black">La Secci&oacute;n Archivos de la UMSS es la instancia encargada del resguardo y custodia permanente e indefinida de </p>
                    <p><button class="link" onclick="showMission()">ver mas</button></p>
                </div>
            </div>
            <!-- Slide 4 -->
            <div class="item">
                <div >
                    <img src="{{ asset('img/index/bienvenido-archivos-4.jpg') }}" alt="Actividad Principal">
                </div><br>
                <div style="margin-bottom: 7%">
                    <h3 class="description__title c-green" style="background-color: none; color:#002a80">ACTIVIDAD PRINCIPAL</h3>
                    <p class="description_text" style="margin-right:4%;margin-left:4%;color: black">Realizar procesos de recepci&oacute;n, depuraci&oacute;n, codificaci&oacute;n, ordenamiento y sistematizaci&oacute;n del </p>
                    <p><button class="link" onclick="showActivity()">ver mas</button></p>
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

@endsection
<!-- jQuery library -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

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

<div id="welcome-g" class="modal fade" style="margin-top: 0;padding-top: 0; background: rgba(0,0,0,0.8)" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" style="color:blue">
        <div class="modal-content">
            <div class="col-md-10">
                <div style="margin-left:0px; padding-left:0px" class="col-md-2">
                    <a onclick="showWelcome()" style="font-size: 35px; color: #002a80">&times;</a>
                </div>
                <div style="margin-left:20%; padding-left:20%" class="col-md-8">
                    <h3>Bienvenidos</h3>
                </div>
            </div><br>
            <div style="margin-left: 3%; margin-right: 3%">
                <img src="{{ asset('img/index/bienvenido-archivos-1.jpg') }}" alt="Bienvenidos">
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <p class="description_text" style="margin-right:4%;margin-left:4%;color: black">Al Sitio Web de la Secci&oacute;n
                        Archivos de la Universidad Mayor de San Sim&oacute;n (UMSS), secci&oacute;n responsable del resguardo y custodia
                        de toda la documentaci&oacute;n acad&eacute;mica e institucional. Aqu&iacute; encontar&aacute; informaci&oacute;n
                        relevante y de utilidad en lo que respecta a Legalizaci&oacute;n y Certificaci&oacute;n de documentos emitidos por
                        esta casa superior de estudios, y otros Tr&aacute;mites similares. La Secci&oacute;n Archivos de la UMSS trabaja
                        al servicio de la Comunidad Universitaria de San Sim&oacute;n y p&uacute;blico en general.</p>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div id="vision-g" class="modal fade" style="margin-top: 0;padding-top: 0; background: rgba(0,0,0,0.8) " tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="col-md-10">
                <div style="margin-left:0px; padding-left:0px" class="col-md-2">
                    <a onclick="showVision()" style="font-size: 35px; color: #002a80">&times;</a>
                </div>
                <div style="margin-left:20%; padding-left:20%" class="col-md-8">
                    <h4>Vision</h4>
                </div>
            </div><br>
            <div style="margin-left: 3%; margin-right: 3%">
                <img src="{{ asset('img/index/bienvenido-archivos-2.jpg') }}" alt="Visi&oacute;n">
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <p style="margin-right:4%;margin-left:4%;color: black">La Secci&oacute;n Archivos de la UMSS pretende constituirse
                        en una instancia estrat&eacute;gica de manejo de la Informaci&oacute;n Documental Oficial de esta Universidad,
                        a partir de mantener una relaci&oacute;n estrecha con todas las Unidades, Carreras y Facultades de la misma y
                        ser reconocida dentro la Comunidad Universitaria por su aporte al Desarrollo Administrativo de la UMSS.</p>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div id="mission-g" class="modal fade" style="margin-top: 0;padding-top: 0; background: rgba(0,0,0,0.8) " tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="col-md-10">
                <div style="margin-left:0px; padding-left:0px" class="col-md-2">
                    <a onclick="showMission()" style="font-size: 35px; color: #002a80">&times;</a>
                </div>
                <div style="margin-left:20%; padding-left:20%" class="col-md-8">
                    <h4>Mision</h4>
                </div>
            </div><br>
            <div style="margin-left: 3%; margin-right: 3%">
                <img src="{{ asset('img/index/bienvenido-archivos-3.jpg') }}" alt="Misi&oacute;n">
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <p class="description_text" style="margin-right:4%;margin-left:4%;color: black">La Secci&oacute;n Archivos de la UMSS
                        es la instancia encargada del resguardo y custodia permanente e indefinida de toda Documentaci&oacute;n Oficial e
                        Hist&oacute;rica: Diplomas, T&iacute;tulos de Pre y Post-Grado, y de la Normativa que rige para una buena marcha
                        Institucional, generada por el Rectorado y la Secretaria General de la UMSS en su Inter-Relación con las diferentes
                        Unidades Acad&eacute;micas y Administrativas.</p>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div id="activity-g" class="modal fade" style="margin-top: 0;padding-top: 0; background: rgba(0,0,0,0.8) " tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="col-md-10">
                <div style="margin-left:0px; padding-left:0px" class="col-md-2">
                    <a onclick="showActivity()" style="font-size: 35px; color: #002a80">&times;</a>
                </div>
                <div style="margin-left:20%; padding-left:20%" class="col-md-8">
                    <h4>Actividad Principal</h4>
                </div>
            </div><br>
            <div style="margin-left: 3%; margin-right: 3%">
                <img src="{{ asset('img/index/bienvenido-archivos-4.jpg') }}" alt="Actividad Principal">
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <p class="description_text" style="margin-right:4%;margin-left:4%;color: black">Realizar procesos de recepci&oacute;n,
                        depuraci&oacute;n, codificaci&oacute;n, ordenamiento y sistematizaci&oacute;n del archivo y resguardo de la documentación
                        universitaria generada en cada gesti&oacute;n rectoral, expedientes de Diplomas y Ti&iacute;tulos de Pre y Post-Grado
                        emitidos por la Universidad que se hallan en custodia de esta Unidad, disponer de informaci&oacute;n fidedigna, aut&eacute;ntica
                        y confiable que permita la legalizaci&oacute;n de documentaci&oacute;n y coadyuvar en los procesos de sistemas de
                        informaci&oacute;n administrativa y acad&eacute;mica.</p>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function showWelcome() {
        if (document.getElementById("welcome-g").className == "modal fade"){
            document.getElementById("welcome-g").classList.add("show");
            document.getElementById("welcome-g").classList.add("in");
        }else{
            document.getElementById("welcome-g").classList.remove("in");
            document.getElementById("welcome-g").classList.remove("show");
        }
    }

    function showVision() {
        if (document.getElementById("vision-g").className == "modal fade"){
            document.getElementById("vision-g").classList.add("show");
            document.getElementById("vision-g").classList.add("in");
        }else{
            document.getElementById("vision-g").classList.remove("in");
            document.getElementById("vision-g").classList.remove("show");
        }
    }

    function showMission() {
        if (document.getElementById("mission-g").className == "modal fade"){
            document.getElementById("mission-g").classList.add("show");
            document.getElementById("mission-g").classList.add("in");
        }else{
            document.getElementById("mission-g").classList.remove("in");
            document.getElementById("mission-g").classList.remove("show");
        }
    }

    function showActivity() {
        if (document.getElementById("activity-g").className == "modal fade"){
            document.getElementById("activity-g").classList.add("show");
            document.getElementById("activity-g").classList.add("in");
        }else{
            document.getElementById("activity-g").classList.remove("in");
            document.getElementById("activity-g").classList.remove("show");
        }
    }

    // Get the modal
    var modalW = document.getElementById("welcome-g");
    var modalV = document.getElementById("vision-g");
    var modalM = document.getElementById("mission-g");
    var modalA = document.getElementById("activity-g");
    var modalL = document.getElementById("login-g");

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if(event.target == modalW){
            document.getElementById("welcome-g").classList.remove("in");
            document.getElementById("welcome-g").classList.remove("show");
        }else{
            if(event.target == modalV){
                document.getElementById("vision-g").classList.remove("in");
                document.getElementById("vision-g").classList.remove("show");
            }else{
                if(event.target == modalM){
                    document.getElementById("mission-g").classList.remove("in");
                    document.getElementById("mission-g").classList.remove("show");
                }else{
                    if(event.target == modalA){
                        document.getElementById("activity-g").classList.remove("in");
                        document.getElementById("activity-g").classList.remove("show");
                    }else{
                        if(event.target == modalL){
                            document.getElementById("login-g").classList.remove("in");
                            document.getElementById("login-g").classList.remove("show");
                        }
                    }
                }
            }
        }
    }

</script>
<style>
.modalpic-close{

}
.modalpic-name{

}
</style>
