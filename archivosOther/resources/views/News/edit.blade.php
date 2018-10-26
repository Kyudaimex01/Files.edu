@extends('layouts.header')

@section('content')

    <div class="row" style="margin-left: 5%; margin-right: 5%">
        <h2>Modificar Noticia</h2>
    </div>
    <div class="row" style="margin-left: 5%; margin-right: 5%">
        <a class="btn btn-primary" href="/notices" style="margin-bottom: 15px;">Listado</a>
    </div>

    <div class="row" style="margin-left: 5%; margin-right: 5%">

        {!! Form::open( $form_options ) !!}
        <div class="form-group">
            {!! Form::label('title', 'Titulo'); !!}
            {!! Form::text('title', $new->title , ['placeholder' => 'Ingresar Titulo', 'class' => 'form-control']); !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Descripcion') !!}
            {!! Form::text('description', $new->description, ['placeholder' => 'Ingresar Descripcion', 'class' => 'form-control']); !!}
        </div>

        <div class="form-group">
            {!! Form::label('posted_by', 'Autor'); !!}
            {!! Form::text('posted_by', $new->posted_by, ['placeholder' => 'Autor', 'class' => 'form-control']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('img_route','imagen'); !!}
            {!! Form::file('img_route', null, ['placeholder' => $new->img_route, 'class' => 'form-control']); !!}
        </div>
        {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right']); !!}

        {!! Form::close() !!}
    </div>
@endsection()
