@extends('layouts.header')

@section('content')

    <div class="row" style="margin-left: 5%; margin-right: 5%">
        <h2>Listado de Usuarios</h2>
    </div>
    @can('users.create')
    <div class="row" style="margin-left: 5%; margin-right: 5%">
        <a class="btn btn-primary" href="users/create" style="margin-bottom: 15px;">Crear Nuevo Usuario</a>
      @if(Session::has('message'))
      <div class="alert-custom">
          <p>{!! Session('message') !!}</p>
      </div>
      @endif()
    </div>
    @endcan

    <div class="row" style="margin-left: 5%; margin-right: 5%">

        <table id="tabla" class="display table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th style="padding-left: 15px;">#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th width="110px;">Accion</th>
            </tr>
            </thead>
            <tbody>

            @foreach($users as $user)
                <tr>
                    <td style="padding-left: 15px;">{!! $user->id !!}</td>
                    <td>{!! $user->name !!}</td>
                    <td>{!! $user->email !!}</td>
                    <td>{!! $user->address !!}</td>
                    <td>{!! $user->phone !!}</td>
                    <td>
                    @can('users.edit')
                        <a class="btn btn-success btn-sm" href="users/{!! $user->id !!}/edit" title="Editar">
                            <i class="zmdi zmdi-edit"></i></a>
                    @endcan
                    @can('users.destroy')
                        <a class="btn btn-danger btn-sm" href="/users/{!! $user->id !!}" onclick="event.preventDefault();
                            document.getElementById('deleteForm').submit();" title="Eliminar"><i class="zmdi zmdi-delete"></i></a>

                        {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/users/' . $user->id ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm', 'style'=> 'display:none']) !!}
                        {!! Form::close() !!}
                    @endcan
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection()
