@extends('layouts.header')
@section('content')
<!--
    <div class="site-inner" >
        <div class="content-sidebar-wrap">
            <div class="content">
                <div style="position: relative;padding-top: 75px;" >
                    <div class="image-section" style="height: auto;padding-top: 75px;">
                        <h4 style="color: black">Certificaciones</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <div class="container">
        <h4 style="text-align: center; text-transform: uppercase; color: #003770">Certificaciones</h4><br>
        <h5>REQUISITOS PARA LAS DISTINTAS CERTIFICACIONES</h5><br>
        <div>

        @php ($i = 1)
        @foreach($certifications as $certification)
            <h5 style="color: #003770; text-decoration-line: underline">{{$i}}) {{ $certification->name_procedure }}</h5>
            <div style="padding-left: 1.8em">
                {!! $certification->requirements_procedure !!}
            </div>
            <div>
                <p style="font-weight: bold; color: #003770; padding-left: 0.8em">Duración: </p>
                <div style="padding-left: 1.8em">
                    @if( $certification->internal_time > 0)
                            <p>Trámite Interno: {{ $certification->internal_time }} Hrs.(Válido solo para trámite al interior de la UMSS)</p>
                    @else
                        @if( $certification->internal_time != null )
                            <p>De manera inmediata.(Válido solo para trámite al interior de la UMSS)</p>
                        @endif
                    @endif

                    @if( $certification->external_time > 0 )
                    <p>Trámite Externo: {{ $certification->external_time }} Hrs.(Válido en las distintas Instituciones externas a la UMSS)</p>
                    @else
                        @if( $certification->external_time != null )
                            <p>De manera inmediata.(Válido en las distintas Instituciones externas a la UMSS)</p>
                        @endif
                    @endif
                </div>
            </div>
            @if( $certification->advice != null )
            <div style="color: red">
                    <p style="text-decoration-line: underline !important; font-weight: bold">* Nota:</p>
                    <p>{!! $certification->advice !!}</p>
                </div>
                @endif
            <br>
        @php ($i++)
        @endforeach
        </div>
    <div>
        <p><strong style="color:red; text-decoration-line: underline">* NOTA: </strong>Recuerde que una vez iniciado el trámite, se le entregara una
            <strong style="color: #003770"> Boleta </strong>que deberá ser llenada para el recojo del documento de la siguiente manera:</p>
            <img src="images/boleta-tramite.jpg" alt="Boleta de tramite" ><!-- height="42" width="42"-->
    </div>
</div>
@endsection
