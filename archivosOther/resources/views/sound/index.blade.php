@extends('layouts.header')
@section('title', 'Audios')
 @section('content')
     @if(session('status'))
         <div class="alert alert-success">
             {{session('status')}}
         </div>
     @endif
     <div class="row">
        @foreach($audios as $audio)
             <div class="col-sm">
                 <div class="card text-center" style="width: 18rem; margin-top: 70px">
                     <!--<audio src=""></audio>-->
                         <audio class="wp-audio-shortcode" preload="none" style="width: 100%" controls="controls" >
                             <source type="audio/mpeg" src="{{$audio->audio}}" />
                         </audio>
                     <div class="card-body">
                         <h5 class="card-title">{{$audio->name}}</h5>
                         {!! Form::open(['route'=> ['audios.destroy', $audio->id], 'method' =>'DELETE']) !!}
                         {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                         {!! Form::close() !!}
                     </div>
                 </div>
             </div>
        @endforeach
     </div>
 @endsection