@extends('layouts.header')

@section('content')
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js')}}"></script>

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
            {!! Form::textarea('description', $new->description, ['placeholder' => 'Ingresar Descripcion', 'id' => 'ckeditor' , 'class' => 'form-control ckeditor', 'rows' => 15, 'cols' => 80]); !!}
        </div>

        <div class="form-group hidden">
            {!! Form::label('posted_by', 'Autor'); !!}
            {!! Form::text('posted_by', Auth::user()->id , ['placeholder' => 'Autor', 'class' => 'form-control']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('img_route','imagen'); !!}
            {!! Form::file('img_route', null, ['placeholder' => $new->img_route, 'class' => 'form-control']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('expirated_at', 'Fecha Fin') !!}
            {!! Form::date('expirated_at', null, [ 'class' => 'form-control']); !!}
        </div>

        {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right']); !!}

        {!! Form::close() !!}
    </div>
@endsection()
