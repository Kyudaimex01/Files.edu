@extends('layouts.header')

@section('content')

<div class="row" style="margin-left: 5%; margin-right: 5%">
    <h2>Update Data</h2>
</div>
<div class="row" style="margin-left: 5%; margin-right: 5%">
    <a class="btn btn-primary" href="/users" style="margin-bottom: 15px;">Read Data</a>
</div>

<div class="row" style="margin-left: 5%; margin-right: 5%">
    {!! Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => '/users/' . $user->id ]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre'); !!}
        {!! Form::text('name', $user->name , ['placeholder' => 'Ingresar name', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', $user->email, ['placeholder' => 'Ingresar email', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Contrasena') !!}
        {!! Form::password('password', null, ['placeholder' => 'Ingresar contraseña', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Direcci&oacute;n'); !!}
        {!! Form::text('address', $user->address, ['placeholder' => 'Ingresa tu direcci&oacute;n', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Tel&eacute;fono'); !!}
        {!! Form::number('phone', $user->phone, ['placeholder' => 'Ingresa tu n&uacute;mero telef&oacute;nico', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        <ul ><!-- class="list-unstyled" -->
            @foreach($roles as $role)
            <li>
                <label>
                {{ Form::checkbox('roles[]', $role->id, null) }}
                {{ $role->name }}
                <em>({{ $role->description }})</em>
                </label>
            </li>
            @endforeach
        </ul>
    </div>

    {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right']); !!}

    {!! Form::close() !!}
</div>
@endsection()
