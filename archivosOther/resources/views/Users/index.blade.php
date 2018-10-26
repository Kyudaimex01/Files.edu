@extends('layouts.header')

@section('content')

    <div class="row" style="margin-left: 5%; margin-right: 5%">
        <h2>Read Data</h2>
    </div>
    <div class="row" style="margin-left: 5%; margin-right: 5%">
        <a class="btn btn-primary" href="users/create" style="margin-bottom: 15px;">Create New</a>
      @if(Session::has('message'))
      <div class="alert-custom">
          <p>{!! Session('message') !!}</p>
      </div>
      @endif()
    </div>

    <div class="row" style="margin-left: 5%; margin-right: 5%">

        <table id="tabla" class="display table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th style="padding-left: 15px;">#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Facebook</th>
                <th>Mobile</th>
                <th width="110px;">Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($users as $user)
                <tr>
                    <td style="padding-left: 15px;">{!! $user->id !!}</td>
                    <td>{!! $user->name !!}</td>
                    <td>{!! $user->email !!}</td>
                    <td>{!! $user->fb !!}</td>
                    <td>{!! $user->mobile !!}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="users/{!! $user->id !!}/edit" title="Editar">
                            <i class="zmdi zmdi-edit"></i>&nbsp;Edit</a>

                        <a class="btn btn-danger btn-sm" href="/users/{!!$user->id_new!!}" onclick="event.preventDefault();
                            document.getElementById('deleteForm').submit();" title="Eliminar"><i class="zmdi zmdi-delete"></i>&nbsp;Delete</a>

                        {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/users/' . $user->id]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm', 'style'=> 'display:none']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection()
