@extends('layouts.header')

@section('title', 'Imagenes Create')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container"> <!--la clase container me permite darle estilo y que mis campos no se desfacen  -->
        <form class="form-group" method="POST" action="/imagen" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Imagen</label>
                <input type="file" name="imagen">
            </div>

            <button type="submit" class="btn btn-primary">GUARDAR</button>

            <a href="{{ '/imagen' }}" class="btn">Volver</a>
        </form>
    </div>
@endsection

