@extends('layouts.header')

@section('title', 'Imagenes Edit')

@section('content')
    <div class="container"> <!--la clase container me permite darle estilo y que mis campos no se desfacen  -->
        <form class="form-group" method="POST" action="/imagen/{{$imagen->id}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="name" value="{{$imagen->name}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Imagen</label>
                <input type="file" name="imagen">
            </div>

            <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
        </form>
    </div>
@endsection