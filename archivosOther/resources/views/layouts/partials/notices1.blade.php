@section('notice')
<style>
    img.news {
        width: 50%;
        height: 80%;
    }
</style>

    <div class="container-fluid col-md-12" style="padding-top:0.5%;padding-bottom:1%; background-color:whitesmoke; width: 99%; height: fit-content;">

        <div id="my-news" class="carousel slide" data-ride="carousel"
             style="width:90%;margin-left: 0.4%;margin-right: 0.4%;background-color: none;"> <!--whitesmoke-->
            <div>
            <!-- Indicators -->
                <ol class="carousel-indicators" style="padding-top: 5%">
                    @for($i=0;$i < $size;$i++)
                        <li style="border-color: #1b6d85" data-target="#my-news" data-slide-to={{ $i }}
                        @if( $i =='0') class="active" @endif >
                    @endfor
                </ol>
            </div>
            <div style="height: 400px;background-color: whitesmoke" class="carousel-inner" role="listbox">
                    @foreach($notices as $notice)
                        <div @if($notice->id_new=='1') class="item active" @else class="item" @endif >
                            <h4 class=" media-heading">
                                <small style="color: #8a6d3b">{{ $notice->created_at }}</small>
                                <small>{{ $notice->posted_by }}</small>
                            </h4>
                                <div>
                                    <h4 class=" media-heading"> {{ $notice->title }} </h4>
                                </div>
                                <div style="color: #002a80">
                                    {!! $notice->description !!}
                                </div>
                                <div>
                                    <img class="news" src="/storage/news/{!!$notice->img_route!!}" href="#">
                                </div>
                        </div>
                    @endforeach
                </div>
                <div>
                    <!-- Previous/Next controls -->
                    <a class="left carousel-control" href="#my-news" role="button" data-slide="prev">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#my-news" role="button" data-slide="next">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </div>

    </div>

@endsection

<!-- Initialize Bootstrap functionality -->
<script>
    // Initialize tooltip component
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    // Initialize popover component
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>
<style>
    .carousel-indicators .active{
        background-color: #002a80;
    }
</style>

@section('saved')
<style>
    img.news {
        width: 50%;
        height: 80%;
    }
</style>

    <div class="container-fluid col-md-12" style="padding-top:0.5%;padding-bottom:1%; background-color:whitesmoke; width: 99%; height: fit-content;">

        <div id="my-news" class="carousel slide" data-ride="carousel"
             style="width:90%;margin-left: 0.4%;margin-right: 0.4%;background-color: none;"> <!--whitesmoke-->
            <div>
            <!-- Indicators -->
                <ol class="carousel-indicators" style="padding-top: 5%">
                    @for($i=0;$i < $size;$i++)
                        <li style="border-color: #1b6d85" data-target="#my-news" data-slide-to={{ $i }}
                        @if( $i =='0') class="active" @endif >
                    @endfor
                </ol>
            </div>
            <div style="height: 400px;background-color: whitesmoke" class="carousel-inner" role="listbox">
                    @foreach($notices as $notice)
                        <div @if($notice->id_new=='1') class="item active" @else class="item" @endif >
                            <h4 class=" media-heading">
                                <small style="color: #8a6d3b">{{ $notice->created_at }}</small>
                                <small>{{ $notice->posted_by }}</small>
                            </h4>
                                <div>
                                    <h4 class=" media-heading"> {{ $notice->title }} </h4>
                                </div>
                                <div style="color: #002a80">
                                    {!! $notice->description !!}
                                </div>
                                <div>
                                    <img class="news" src="/storage/news/{!!$notice->img_route!!}" href="#">
                                </div>
                        </div>
                    @endforeach
                </div>
                <div>
                    <!-- Previous/Next controls -->
                    <a class="left carousel-control" href="#my-news" role="button" data-slide="prev">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#my-news" role="button" data-slide="next">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </div>

    </div>

@endsection
