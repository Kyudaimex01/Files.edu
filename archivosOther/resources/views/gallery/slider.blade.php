<div class="slider">
    <ul>
        <li><img src="imagenes/1.jpg" alt="" style=""></li>
        <li><img src="imagenes/2.jpg" alt="" style=""></li>
        <li><img src="imagenes/3.jpg" alt="" style=""></li>
        <li><img src="imagenes/4.jpg" alt="" style=""></li>
    </ul>
</div>

<!--estas lineas de codigo solo muestran imagenes
<div class="slider"><aun tengo problemas con el slider
    foreach($imagenes as $imagen)
        <div class="sliderif($loop->first)activeendif">
            <ul>
                <li><img src="{{$imagen->imagen}}" alt=""></li>
            </ul>
        </div>
    endforeach
</div>  -->

<!--estas lineas de codigo aun no funcionan-->
@foreach($imagenes as $imagen)
    <div class="slider@if($loop->first)active@endif">
        <img src="{{asset("imagenes/$imagen->id")}}" alt="">
    </div>
@endforeach
