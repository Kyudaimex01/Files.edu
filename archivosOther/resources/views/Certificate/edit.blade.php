@extends('layouts.header')

@section('content')
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js')}}"></script>

    <div class="row" style="margin-left: 5%; margin-right: 5%">
        <h2>Modificar Tramite</h2>
    </div>
    <div class="row" style="margin-left: 5%; margin-right: 5%">
        <a class="btn btn-primary" href="/certifications" style="margin-bottom: 15px;">Listado</a>
    </div>

    <div class="row" style="margin-left: 5%; margin-right: 5%">

        {!! Form::open( $form_options) !!}
        <div class="form-group">
            {!! Form::label('name_procedure', '(*) Nombre Certificacion:',['style'=> 'font-weight:bold']); !!}
            {!! Form::text('name_procedure', $procedure->name_procedure, ['placeholder' => 'Ingresar el nombre de la certificacion', 'class' => 'form-control']); !!}
        </div>

        <div class="form-group">
            {!! Form::label('requirements_procedure', '(*) Requisitos:',['style'=> 'font-weight:bold']) !!}
            {!! Form::textarea('requirements_procedure', $procedure->requirements_procedure, ['placeholder' => 'Escriba los requisitos del tramite', 'id' => 'ckeditor' , 'class' => 'form-control ckeditor', 'rows' => 15, 'cols' => 80]); !!}
        </div>

        <div class="form-group">
            {!! Form::label('value_procedure', '(*) Costo de la Certificacion:',['style'=> 'font-weight:bold']); !!}
            {!! Form::text('value_procedure', $procedure->value_procedure, ['placeholder' => 'Ingresar el costo de la certificacion', 'class' => 'form-control']); !!}
        </div>

        <div class="form-group" style="width: 40%">
            {!! Form::label('internal_time', 'Duracion Tramite Interno (en Hrs):',['style'=> 'font-weight:bold']) !!}
            <br><p>(dejar en blanco si no esta disponible)</p><br>
            {!! Form::number('internal_time', $procedure->internal_time, ['min'=> 0, 'max'=>96, 'class' => 'form-control']) !!}
        </div>

        <div class="form-group" style="width: 40%">
            {!! Form::label('external_time', 'Duracion Tramite Externo (en Hrs):',['style'=> 'font-weight:bold']) !!}
            <br><p>(dejar en blanco si no esta disponible)</p><br>
            {!! Form::number('external_time', $procedure->external_time, ['min'=> 0, 'max'=>96, 'class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('advice', '¿ Desea dejar alguna nota adicional ?',['style'=> 'font-weight:bold']) !!}
            {!! Form::textarea('advice', $procedure->advice, ['placeholder' => 'Ingrese la nota adicional','id' => 'ckeditor' , 'class' => 'form-control ckeditor', 'rows' => 15, 'cols' => 80]); !!}
        </div>

        <div class="form-group">
            {!! Form::label('type_pro', 'Tipo de Tramite:',['style'=> 'font-weight:bold']) !!}<br>
            @if($procedure->type_pro == 'Certificacion')
                Certificacion {!! Form::radio('type_pro', 'Certificacion',true) !!} &nbsp;&nbsp;
            @else
                Certificacion {!! Form::radio('type_pro', 'Certificacion',false) !!} &nbsp;&nbsp;
            @endif

            @if($procedure->type_pro == 'Legalizacion')
                Legalizacion {!! Form::radio('type_pro', 'Legalizacion',true) !!} &nbsp;&nbsp;
            @else
                Legalizacion {!! Form::radio('type_pro', 'Legalizacion',false) !!} &nbsp;&nbsp;
            @endif

            @if($procedure->type_pro == 'Otros')
                Otros {!! Form::radio('type_pro', 'Otros',true) !!}
            @else
                Otros {!! Form::radio('type_pro', 'Otros',false) !!}
            @endif

            @if($procedure->type_pro == 'Apostilla')
                Apostilla {!! Form::radio('type_pro', 'Apostilla',true) !!}
            @else
                Apostilla {!! Form::radio('type_pro', 'Apostilla',false) !!}
            @endif
        </div>

        <div class="form-group hidden">
            {!! Form::label('posted_by', 'Autor'); !!}
            {!! Form::text('posted_by', Auth::user()->id, ['placeholder' => 'Autor de la certificacion', 'class' => 'form-control']); !!}
        </div>

        <div class="form-group" name="bottom-page">
            {!! Form::label('img_route', 'Modelo de Certificacion:',['style'=> 'font-weight:bold']); !!}
            {!! Form::file('img_route', null, ['placeholder' => 'Imagen Certificacion', 'class' => 'form-control']); !!}
        </div>

        {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right']); !!}

        {!! Form::close() !!}
    </div>
@endsection()
