@extends('layouts.header')
@section('content')
<!--
    <div class="site-inner" >

        <div class="content-sidebar-wrap">
            <div class="content">
                <div style="position: relative;padding-top: 75px;" >
                    <div style="height: auto;padding-top: 75px;">
                        <h4 style="color: black">Legalizaciones</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <div class="container">
        <h4 style="text-align: center; text-transform: uppercase; color: #003770">Legalizaciones</h4><br>
        <h5>REQUISITOS PARA LAS DISTINTAS LEGALIZACIONES</h4><br>
        <div>

        @php ($i = 1)
        @foreach($legalizations as $legalization)
            <h5 style="color: #003770; text-decoration-line: underline">{{$i}}) {{ $legalization->name_procedure }}</h5>
            <div style="padding-left: 1.8em">
                {!! $legalization->requirements_procedure !!}
            </div>
            @if( $legalization->value_procedure != null )
            <div>
                <p style="font-weight: bold; color: #003770; padding-left: 0.8em">Costo:</p>
                <div style="padding-left: 1.8em">
                    <p>Valorado de Caja Central de la UMSS: {{ $legalization->value_procedure }}</p>
                </div>
            </div>
            @endif
            <div>
                <p style="font-weight: bold; color: #003770; padding-left: 0.8em">Duración: </p>
                <div style="padding-left: 1.8em">
                    @if( $legalization->internal_time > 0)
                            <p>Trámite Interno: {{ $legalization->internal_time }} Hrs.(Válido solo para trámite al interior de la UMSS)</p>
                    @else
                        @if( $legalization->internal_time != null )
                            <p>De manera inmediata.(Válido solo para trámite al interior de la UMSS)</p>
                        @endif
                    @endif

                    @if( $legalization->external_time > 0 )
                    <p>Trámite Externo: {{ $legalization->external_time }} Hrs.(Válido en las distintas Instituciones externas a la UMSS)</p>
                    @else
                        @if( $legalization->external_time != null )
                            <p>De manera inmediata.(Válido en las distintas Instituciones externas a la UMSS)</p>
                        @endif
                    @endif
                </div>
            </div>
            @if( $legalization->advice != null )
            <div style="color: red">
                <p style="text-decoration-line: underline !important; font-weight: bold">* Nota:</p>
                <p>{!! $legalization->advice !!}</p>
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
