@extends('layouts.header')

@section('content')

<div class="row" style="margin-left: 5%; margin-right: 5%">
    <h2>Listado de Noticias</h2>
</div>

@can('notices.create')
<div class="row" style="margin-left: 5%; margin-right: 5%">
    <a class="btn btn-primary" href="notices/create" style="margin-bottom: 15px;">Crear Noticia</a>

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
            <th>Descripcion</th>
            <th>Autor</th>
            <th>Fecha</th>
            <th width="110px;">Accion</th>
        </tr>
        </thead>
        <tbody>

        @foreach($notices as $notice)
            <tr>
                <td style="padding-left: 15px;">{!! $notice->id_new !!}</td>
                <td>{!! $notice->title !!}</td>
                <td>{!! $notice->description !!}</td>
                <td>{!! $notice->posted_by !!}</td>
                <td>{!! $notice->created_at !!}</td>
                <td>

                    @can('notices.edit')
                    <a class="btn btn-success btn-sm" href="notices/{!! $notice->id_new !!}/edit" title="Editar">
                        <i class="zmdi zmdi-edit"></i></a>


                    <a class="btn btn-danger btn-sm" href="/notices/{!! $notice->id_new !!}" onclick="event.preventDefault();
                        document.getElementById('deleteForm').submit();" title="Eliminar"><i class="zmdi zmdi-delete"></i></a>

                    {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/notices/' . $notice->id_new]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm','style'=> 'display:none']) !!}
                    {!! Form::close() !!}
                    @endcan

                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
@endsection()
