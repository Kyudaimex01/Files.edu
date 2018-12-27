@extends('layouts.header')

@section('content')

<div class="row" style="margin-left: 5%; margin-right: 5%">
    <h2>Crear Usuario</h2>
</div>
<div class="row" style="margin-left: 5%; margin-right: 5%">
    <a class="btn btn-primary" href="/users" style="margin-bottom: 15px;">Read Data</a>
</div>
<div class="row" style="margin-left: 5%; margin-right: 5%">
    {!! Form::open(['id' => 'dataForm', 'url' => '/users']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name'); !!}
        {!! Form::text('name', null , ['placeholder' => 'Ingresar name', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['placeholder' => 'Ingresar email', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Contraseña') !!}
        {!! Form::text('password', null, ['placeholder' => 'Ingresar contraseña', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Direcci&oacute;n'); !!}
        {!! Form::text('address', null, ['placeholder' => 'Ingresa tu direcci&oacute;n', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Tel&eacute;fono'); !!}
        {!! Form::number('phone', null, ['placeholder' => 'Ingresa tu n&uacute;mero telef&oacute;nico', 'class' => 'form-control']); !!}
    </div>

    {!! Form::submit('Create', ['class' => 'btn btn-primary pull-right']); !!}

    {!! Form::close() !!}
</div>
@endsection()
