@extends('layouts.app')

@section('content')
<script type="text/javascript" src=""></script>
        <private-chat id="auto" :user="{{auth()->user()}}"></private-chat>
    <script type="text/javascript">
        $(document).ready(
           function(){
            $('#auto').refresh;
        });

        function refresh(){
            setTimeout( function(){
                $('auto');
            },2000);
        }
    </script>

@endsection
