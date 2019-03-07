@section('calendar')
<link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.min.css')}}"/>

<style>
.no_margin{
    margin-top: 0px;
    padding-top: 0px;
    margin-bottom: 0px;
    padding-bottom: 0px
}
/**
.fc-button.fc-state-default{
    display: none;
}
*/
div.fc-view-container{
    display: none;
}
</style>
<!--
<div class="container no_margin" >
    <div class="row no_margin" >
        <div class="col-md-8 col-md-offset-2 no_margin" >
        -->
            <div class="panel panel-default no_margin"><!--background-color: #003770; color:white-->
                <div class="panel-heading no_margin" style="text-align: center">Calendario
                </div>
                <div class="panel-body no_margin">
                <p>
                    <!--  $actual_date

                     $dDate   de   $mDate   del  $yDate
                    -->
                </p>
                   <!-- {!! $calendar->calendar() !!}-->
                </div>
            </div>
<!--
        </div>
    </div>
</div>
-->

<script src="{{ asset('js/calendar/moment.min.js')}}"></script>
<script src="{{ asset('js/calendar/fullcalendar.min.js')}}"></script>
{!! $calendar->script() !!}
@endsection
