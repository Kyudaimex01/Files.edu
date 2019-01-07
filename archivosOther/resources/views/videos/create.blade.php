@extends('layouts.header');

@section('title', 'Videos Create')

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
        <form class="form-group" method="POST" action="/videos" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Video</label>
                <input type="file" name="video">
            </div>

            <button type="submit" class="btn btn-primary">GUARDAR</button>
        </form>
    </div>
@endsection
