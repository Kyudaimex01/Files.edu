@extends('layouts.header')
@section('content')
    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col" align="right">
                <a href="{{ '/videos/create' }}" class="btn btn-dark">AÑADIR</a>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($videos as $video)
            <div class="col-sm">
                <div class="card text-center" style="width: 18rem; margin-top: 70px">
                    <video class="card-img-top mx-auto d-block" style="height: 200px; width: 300px; margin: 20px;" width="320" height="240">
                        <source src="{{$video->video}}" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <h5 class="card-title">{{$video->name}}</h5>
                        <a href="/videos/{{$video->id}}" class="btn btn-primary">Ver Video</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
