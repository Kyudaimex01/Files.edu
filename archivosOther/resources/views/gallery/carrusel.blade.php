<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach($imagenes as $imagen)
            <li data-target="#carousel-example-generic"
                data-slide-to="{{$loop->index}}"
                class="item {{$loop->first ? 'active' : ''}}">

            </li>
        @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @foreach($imagenes as $imagen)
        <div class="item@if($loop->first)active@endif">
            <ul>
                <li><img src="{{$imagen->imagen}}" alt=""></li>
            </ul>
        </div>
        @endforeach

        @foreach($imagenes as $imagen)
            <div class="item {{$loop->first ? 'active' : ''}}">
                <img src="{{ $imagen->imagen }}" alt="">
            </div>
        @endforeach
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only"><Previous></Previous></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!--pruebas de sliders-->
@foreach($imagenes as $imagen)
    <div class="slider@if($loop->first)active@endif">
        <img src="{{asset("imagenes/$imagen->id")}}" alt="">
    </div>
@endforeach