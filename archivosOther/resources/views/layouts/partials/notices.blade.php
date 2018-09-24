
@section('notice')
    <style>
        .other:hover {
            marquee-speed: slow;
        }

        /* Styles

         .example1 {
             height: 50px;
             overflow: hidden;
             position: relative;
         }
        .example1 div {
            font-size: 3em;
            color: limegreen;
            position: relative;
            width: 95%;
            height: 95%;
            margin: 0;
            line-height: 50px;
            text-align: center;
        */    /* Starting position */
        /*    -moz-transform:translateY(100%);
            -webkit-transform:translateY(100%);
            transform:translateY(100%);
        */    /* Apply animation to this element */
        /*    -moz-animation: example1 15s linear infinite;
            -webkit-animation: example1 15s linear infinite;
            animation: example1 15s linear infinite;
        }
        .example1 div:hover{
            -moz-animation: example1 5s paused infinite;
            -webkit-animation: example1 5s paused infinite;
            animation: example1 5s paused infinite;
        }
        */
        /* Move it (define the animation) */
        /*@-moz-keyframes example1 {
            0%   { -moz-transform: translateY(100%); }
            100% { -moz-transform: translateY(-100%); }
        }
        @-webkit-keyframes example1 {
            0%   { -webkit-transform: translateY(100%); }
            100% { -webkit-transform: translateY(-100%); }
        }
        @keyframes example1 {
            0%   {
                -moz-transform: translateY(100%); *//* Firefox bug fix */
        /*        -webkit-transform: translateY(100%); /* Firefox bug fix */
        /*        transform: translateY(100%);
            }
            100% {
                -moz-transform: translateY(-100%); /* Firefox bug fix */
        /*        -webkit-transform: translateY(-100%); /* Firefox bug fix */
        /*        transform: translateY(-100%);
            }
        }
        */
    </style>

    <!-- marquee html
     <div style="position:relative; overflow:hidden; width:100%;">
                        <marquee direction="up" behavior="scroll" bgcolor="whitesmoke" style="height: 435px">

    -->

    <div class="col-md-6" style="padding-top:1%; background-color:gray; height: 500px">

            <div>
            <h4 style="background-color: whitesmoke">Avisos de la pagina</h4>
            </div>
            <div class="example1" >
                <div style="background-color: whitesmoke">
                    @foreach($notices as $notice)
                        <h4 class=" media-heading"> {{ $notice->title }}
                            <small style="color: #8a6d3b">{{ $notice->created_at }}</small>
                            <small>{{ $notice->posted_by }}</small></h4>

                        <p style="color: #002a80">{{ $notice->description }}</p>
                        <img src="{{ asset('/img/cropped-Logo1.png') }}" href="#">
                        <hr>
                    @endforeach

                </div>
            </div>

    </div>

@endsection