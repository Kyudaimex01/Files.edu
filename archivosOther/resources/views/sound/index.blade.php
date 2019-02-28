@extends('layouts.header')
@section('title', 'Audios')
 @section('content')
     @if(session('status'))
         <div class="alert alert-success">
             {{session('status')}}
         </div>
     @endif
     <div class="container">
         <div class="row">
             <div class="col" align="right">
                 <a href="{{ '/audios/create' }}" class="btn btn-dark">AÑADIR</a>
             </div>
         </div>
     </div>

     <div class="row">
        @foreach($audios as $audio)
             <div class="col-sm">
                 <div class="card text-center" style="width: 18rem; margin-top: 70px">
                     <audio class="wp-audio-shortcode" preload="none" style="margin-right:4%;margin-left:4%;color: black" src="{{$audio->audio}}">
                         <source src="{{$audio->audio}}" type="audio/mpeg">
                     </audio>
                     <div class="card-body">
                         <h5 class="card-title">{{$audio->name}}</h5>
                         <a href="/audios/{{$audio->id}}" class="btn btn-primary">Escuchar</a>
                     </div>
                 </div>
             </div>
        @endforeach
     </div>
 @endsection