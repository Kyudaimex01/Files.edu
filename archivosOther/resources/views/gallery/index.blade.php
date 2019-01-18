@extends('layouts.header')
@section('content')

    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    <a href="{{ '/imagen/create' }}" class="btn btn-dark">AÑADIR</a>

    <div class="row">
        @foreach($imagenes as $imagen)
            <div class="col-sm">
                <div class="card text-center" style="width: 18rem; margin-top: 70px"><!--los px estaban en 70.Se ve de mejor manera en el tamaño para una maquina pero al reducir la imagen se ve de una mas fea-->
                    <img style="object-fit: cover; height: 200px; width: 300px; margin: 20px;" src="{{$imagen->imagen}}" class="card-img-top mx-auto d-block" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$imagen->name}}</h5>
                        <a href="/imagen/{{$imagen->id}}" class="btn btn-primary">Ver Mas...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!--include('gallery.slider')--><!--este slider solo funcionaba de manera statica-->
    <!--include('gallery.carrusel')-->
    @include('gallery.sliderDinamico')

    @push('styles')
        <link rel="stylesheet" type="text/css" href="/css/twitter-bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/css/slider.css">
    @endpush

    @push('scripts')
        <script
                src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
        <script src="/js/twitter-bootstrap.js"></script>
    @endpush

@endsection