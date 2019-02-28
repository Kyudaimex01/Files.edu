@extends('layouts.header')
@section('content')
    <div class="container">
        <h4 style="text-align: center; text-transform: uppercase; color: #003770">APOSTILLA</h4><br>
        <h5>REQUISITOS PARA LAS DISTINTAS OPERACIONES A SER REALIZADAS EN LA APOSTILLA</h5><br>
        <div>

        @php ($i = 1)
        @foreach($others as $other)
            <h5 style="color: #003770; text-decoration-line: underline">{{$i}}) {{ $other->name_procedure }}</h5>
            <div style="padding-left: 1.8em">
                {!! $other->requirements_procedure !!}
            </div>
            @if( $other->value_procedure != null )
            <div>
                <p style="font-weight: bold; color: #003770; padding-left: 0.8em">Costo:</p>
                <div style="padding-left: 1.8em">
                    <p>Valorado de Caja Central de la UMSS: {{ $other->value_procedure }}</p>
                </div>
            </div>
            @endif
            <div>
                <p style="font-weight: bold; color: #003770; padding-left: 0.8em">Duración: </p>
                <div style="padding-left: 1.8em">
                    @if( $other->internal_time > 0)
                            <p>Trámite Interno: {{ $other->internal_time }} Hrs.(Válido solo para trámite al interior de la UMSS)</p>
                    @else
                        @if( $other->internal_time != null )
                            <p>De manera inmediata.(Válido solo para trámite al interior de la UMSS)</p>
                        @endif
                    @endif

                    @if( $other->external_time > 0 )
                    <p>Trámite Externo: {{ $other->external_time }} Hrs.(Válido en las distintas Instituciones externas a la UMSS)</p>
                    @else
                        @if( $other->external_time != null )
                            <p>De manera inmediata.(Válido en las distintas Instituciones externas a la UMSS)</p>
                        @endif
                    @endif
                </div>
            </div>
            @if( $other->advice != null )
            <div style="color: red">
                    <p style="text-decoration-line: underline !important; font-weight: bold">* Nota:</p>
                    <p>{!! $other->advice !!}</p>
                </div>
                @endif
            <br>
        @php ($i++)
        @endforeach
        </div>
    </div>
@endsection
