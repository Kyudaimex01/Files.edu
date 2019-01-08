<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
        @foreach( $imagenes as $imagen )
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
        @endforeach
    </ol>

    <div class="carousel-inner" role="listbox">
        @foreach( $imagenes as $imagen )
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img class="d-block img-fluid" src="{{ $imagen->imagen }}" alt="{{ $imagen->title }}">
                <div class="carousel-caption d-none d-md-block">
                    <h3>{{ $imagen->title }}</h3>
                </div>
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>