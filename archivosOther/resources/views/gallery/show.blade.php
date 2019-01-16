@extends('layouts.header')
@section('content')
    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <img style="height: 80%; width: 60%; background-color: #EFEFEF; margin: 20px;" src="{{$imagen->imagen}}" class="card-img-top mx-auto d-block" alt="">
    <div class="text-center">
        <h5 class="card-tile">{{$imagen->name}}</h5>

        <a href="/imagen/{{$imagen->id}}/edit" class="btn btn-primary">Editar</a>
        {!! Form::open(['route'=> ['imagen.destroy', $imagen->id], 'method' =>'DELETE']) !!}
        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        <a href="{{ '/imagen' }}" class="btn btn-info">Atras</a>
    </div>
@endsection