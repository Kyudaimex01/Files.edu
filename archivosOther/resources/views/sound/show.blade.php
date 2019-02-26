@extends('layouts.header')
@section('content')

    <div class="row" background="{{ asset('img/index/bienvenido-archivos-4.jpg') }}">
        <div class="col-sm" style="">
            <div class="card text-center" style="width: 18rem; margin-top: 70px">
                <img src="{{ asset('img/index/bienvenido-archivos-2.jpg')}}" alt="">
                <br>
                <audio class="wp-audio-shortcode" preload="none" style="margin-right:4%;margin-left:4%;color:black" align="justify" controls>
                    <source src="{{$audio->audio}}" type="audio/mpeg">
                </audio>

                <div class="text-center">
                    <h5 class="card-tile">{{$audio->name}}</h5>
                    <br>
                    <a href="{{ '/audios' }}" class="btn btn-info">ATRAS</a>
                    {!! Form::open(['route'=> ['audios.destroy', $audio->id], 'method' =>'DELETE']) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection