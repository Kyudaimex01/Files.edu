@extends('layouts.header');

@section('title', 'Audios Create')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <form class="form-group" method="POST" action="/audios" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Audio</label>
                <input type="file" name="audio">
            </div>

            <button type="submit" class="btn btn-primary">GUARDAR</button>
            <a href="{{ '/audios' }}" class="btn">Volver</a>
        </form>
    </div>
@endsection