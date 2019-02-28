@extends('layouts.header')
@section('content')
<style>
    div.container>div>div.history >p>strong{
        color: none;
    }

    div.container>div>div.history >p>strong{
        color: #003770;
    }
</style>
    <div class="container">
        <h4 style="text-align: center; text-transform: uppercase; color: #003770">Historia de la Unidad de Archivos</h4><br>
        <!--<h5>Gu&iacute;a r&aacute;pida de tr&aacute;mite</h5><br>-->
        <div>
            <div class="history" style="padding-left: 1.8em">
                <img style="display: block; margin-left: auto; margin-right: auto; width: 95%" src="images/Historia-Archivos-604x270.jpg" alt="Organigrama de la Unidad de Archivos de la Umss" >
                <br>
                {!! $history->intro !!}
                <!--
                <p>La Sección Archivos de la Universidad Mayor de San Simón (UMSS), dependiente de la Secretaria General, fue
                    creada en fecha 25 de marzo de 1955. En dicha fecha, el Dr. José Francisco Lora, Secretario del Rectorado,
                    por encargo del Secretario General de la Universidad Enrique Levy Meruvia,resuelve la urgente necesidad
                    de crear un ítem para el cargo de Archivero que proceda a elevar un informe completo de los documentos del
                    Archivo General de la UMSS, documentos que constan en archivos. Esta Sección cumple hasta el presente 59
                    años al servicio de esta casa superior de estudios.</p>
                    <br>
                <p>Desde su fundación y durante su vida institucional se identifican cuatro periodos de importantes cambios en
                    su estructura interna:</p>
                -->
                <br>
                {!! $history->stages !!}
                <!--
                <p><b style="color: #003770">Primer periodo (1955 – 1995):</b> El Archivo, fue constituido como una unidad de resguardo de toda
                    documentación histórica que se consideraba importante en la vida institucional de la UMSS, resguardando
                    todos los legajos que no eran de uso cotidiano.La documentación era resguardada en tomos, según un plan de
                    archivos diseñado por los Archivistas de la época. Su estructura funcional en este periodo se circunscribió
                    solamente a la Jefatura del Archivo y un empastador.</p>
                    <br>
                <p><b style="color: #003770">Segundo periodo (1996 – 1999):</b> Gracias al impulso del Rector, PhD Alberto Rodríguez Méndez, se introduce
                    la computación dentro esta sección, iniciándose el proceso de sistematización de los registros en software
                    especializados para archivos. Asimismo toda la documentación encajonada, es debidamente depurada,seleccionada,
                    codificada y archivadaen un 40%. También se procede al empaste de 1.000 tomos. La estructura organizacional en
                    este periodo comprendía a la Jefatura del Archivo y un transcriptor de datos.</p>
                    <br>
                <p><b style="color: #003770">Tercer periodo (2000- 2010):</b> Mediante una resolución Rectoral se otorga a la Sección Archivos de la UMSS
                    la potestad de ser la única entidad autorizada para comparar y verificar la autenticidad de los documentos
                    resguardados para su posterior Seccion Archivoslegalización, según las disposiciones contenidas en el Código
                    Civil.De este modo la Sección Archivos se constituye en la principal generadora de información académica y
                    administrativa de la UMSS, cuya información transparente trasunta fronteras hacia otros países, donde se hallan
                    profesionales graduados de la Universidad Mayor de San Simón.</p>
                    <br>
                <img style="display: block; margin-left: auto; margin-right: auto; width: 45%" src="images/libro-historia.jpg" alt="Libros Historicos de la Unidad" >
                    <br>
                <p>Este cambio de actividades de la Sección, permite la captación de recursos propios por la venta de servicios,
                    fondos que permiten el equipamiento tecnológico e insumos para un mejor servicio. Su estructura organizacional
                    se amplía en este periodo a cuatro cargos: Jefatura del Archivo, atención de ventanillas, auxiliar de oficina y
                    transcriptor de base de datos.</p>
                    <br>
                <p><b style="color: #003770">Cuarto periodo (2011 – 2014):</b> Se desarrolla un proyecto de digitalización de toda documentación histórica
                    almacenada, para atender los requerimientos administrativos, a través de un sistema digitalizado de los documentos
                    en red, utilizando las plataformas de la Universidad en la intranet e internet. Este proyecto es llevado a cabo
                    por la <a>Unidad de Archivos Digitales (U.A.D.)</a> perteneciente al área de Sistemas y Digitalizaciones de la
                    Sección Archivos de la UMSS su estructura organizacional en este periodo comprende a la Jefatura del Archivo y 2
                    auxiliares para  transcripción de base de datos y digitalización de documentos.</p>
                -->
                <br>
                <p><b style="color: #003770">Estructura Organizacional Actual</b></p>
                <br>
                <img style="display: block; margin-left: auto; margin-right: auto; width: 95%" src="images/estructura-organizacional-1024x456.jpg" alt="Organigrama de la Unidad de Archivos de la Umss" >
                <br>
                {!! $history->structure !!}
                <!--
                <p>El organigrama de la Universidad Mayor de San Simón establece que la Sección Archivos dependa directamente de la
                    Secretaría General, encargada de centralizar el despacho administrativo del Rectorado de la UMSS, y desarrolle su
                    labor en coordinación con la Sección de Trámites.No ejerce autoridad sobre otra sección.</p>
                -->
            </div>
            <br>
        </div>
    </div>
@endsection
