@extends('layouts.header')

@section('content')

    <div class="row" style="margin-left: 5%; margin-right: 5%">
        <h2>Creacion de Noticias</h2>
    </div>
    <div class="row" style="margin-left: 5%; margin-right: 5%">
        <a class="btn btn-primary" href="/notices" style="margin-bottom: 15px;">Listado</a>
    </div>

    <div class="row" style="margin-left: 5%; margin-right: 5%">

        {!! Form::open( $form_options) !!}
        <div class="form-group">
            {!! Form::label('title', 'Titulo'); !!}
            {!! Form::text('title', null, ['placeholder' => 'Ingresar titulo', 'class' => 'form-control']); !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Descripcion') !!}
            {!! Form::text('description', null, ['placeholder' => 'Escriba una descripcion', 'class' => 'form-control']); !!}
        </div>

        <div class="form-group">
            {!! Form::label('posted_by', 'Autor'); !!}
            {!! Form::text('posted_by', null, ['placeholder' => 'Autor de la noticia', 'class' => 'form-control']); !!}
        </div>

        <div class="form-group">
            {!! Form::label('img_route', 'imagen'); !!}
            {!! Form::file('img_route', null, ['placeholder' => 'Imagen Noticia', 'class' => 'form-control']); !!}
        </div>

        {!! Form::submit('Create', ['class' => 'btn btn-primary pull-right']); !!}

        {!! Form::close() !!}
    </div>
@endsection()
