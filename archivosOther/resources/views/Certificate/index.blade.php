@extends('layouts.header')

@section('content')

@include('layouts.partials.adminnav')
@yield('administration')

<div class="row" style="margin-left: 5%; margin-right: 5%">
    <h2>Listado de Tramites</h2>
</div>

@can('notices.create')
<div class="row" style="margin-left: 5%; margin-right: 5%">
    <a class="btn btn-primary" href="certifications/create" style="margin-bottom: 15px;">Crear Tramite</a>

    @if(Session::has('message'))
    <div class="alert-success">
        <p>&nbsp;&nbsp;{!! Session('message') !!}</p>
    </div>
    @endif()
</div>
@endcan

<div class="row" style="margin-left: 5%; margin-right: 5%">

    <table id="data" class="display table table-striped table-bordered" style="width:100%">
        <!--class="table table-bordered"-->
        <thead>
        <tr>
            <th style="padding-left: 15px;">#</th>
            <th>Titulo</th>
            <th>Duracion T. Interno</th>
            <th>Duracion T. Externo</th>
            <th>Autor</th>
            <th>Tipo</th>
            @can('notices.edit')
                <th width="110px;">Accion</th>
            @endcan
        </tr>
        </thead>
        <tbody>

        @foreach($procedures as $procedure)
            <tr>
                <td style="padding-left: 15px;">{!! $procedure->id_pro !!}</td>
                <td>{!! $procedure->name_procedure !!}</td>
                <td>{!! $procedure->internal_time !!}</td>
                <td>{!! $procedure->external_time !!}</td>
                <td>{!! $procedure->posted_by !!}</td>
                <td>{!! $procedure->type_pro !!}</td>
                @can('notices.edit')
                <td>
                    <a class="btn btn-success btn-sm" href="certifications/{!! $procedure->id_pro !!}/edit" title="Editar">
                        <i class="zmdi zmdi-edit"></i></a>


                    <a class="btn btn-danger btn-sm" href="/certifications/{!! $procedure->id_pro !!}" onclick="event.preventDefault();
                        document.getElementById('deleteForm').submit();" title="Eliminar"><i class="zmdi zmdi-delete"></i></a>

                    {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/certifications/' . $procedure->id_pro]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm','style'=> 'display:none']) !!}
                    {!! Form::close() !!}
                </td>
                @endcan
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
@endsection()
