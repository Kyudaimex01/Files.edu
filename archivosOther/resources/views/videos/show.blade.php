@extends('layouts.header')
@section('content')
    <video class="card-img-top mx-auto d-block" style="margin: 10px;" controls>
        <source src="{{$video->video}}" type="video/mp4">
    </video>
    <div class="text-center">
        <h5 class="card-tile">{{$video->name}}</h5>
        {!! Form::open(['route'=> ['videos.destroy', $video->id], 'method' =>'DELETE']) !!}
        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        <a href="{{ '/videos' }}" class="btn btn-info">Atras</a>
    </div>
@endsection