@extends('layouts.header')

@section('content')
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js')}}"></script>

    <div class="row" style="margin-left: 5%; margin-right: 5%">
        <h2>Modificar Historia</h2>
    </div>
<!--
    <div class="row" style="margin-left: 5%; margin-right: 5%">
        <a class="btn btn-primary" href="/notices" style="margin-bottom: 15px;">Listado</a>
    </div>
-->
    <div class="row" style="margin-left: 5%; margin-right: 5%">

        {!! Form::open( $form_options ) !!}
        <div class="form-group">
            {!! Form::label('intro', 'Introducci&oacute;n'); !!}
            {!! Form::textarea('intro', $history->intro , ['placeholder' => 'Ingresar la Introduccion de la historia', 'id' => 'ckeditor', 'class' => 'form-control ckeditor', 'rows' => 15, 'cols' => 40]); !!}
        </div>

        <div class="form-group">
            {!! Form::label('stages', 'Etapas') !!}
            {!! Form::textarea('stages', $history->stages, ['placeholder' => 'Ingresar las etapas', 'id' => 'ckeditor' , 'class' => 'form-control ckeditor', 'rows' => 15, 'cols' => 80]); !!}
        </div>
<!--
        <div class="form-group hidden">
            {!! Form::label('posted_by', 'Autor'); !!}
            {!! Form::text('posted_by', Auth::user()->id , ['placeholder' => 'Autor', 'class' => 'form-control']); !!}
        </div>
    -->
        <div class="form-group">
            {!! Form::label('img_struct','imagen de la estructura'); !!}
            {!! Form::file('img_struct', null, ['placeholder' => '', 'class' => 'form-control']); !!}
        </div>

        <div class="form-group">
            {!! Form::label('structure', 'Estructura'); !!}
            {!! Form::textarea('structure', $history->structure , ['placeholder' => 'Ingresar la Estructura de la Unidad', 'id' => 'ckeditor', 'class' => 'form-control ckeditor', 'rows' => 15, 'cols' => 50]); !!}
        </div>

        {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right']); !!}

        {!! Form::close() !!}
    </div>
@endsection()
