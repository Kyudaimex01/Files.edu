<?php
    $cantMonths = [1,2,3,4,5,6,7,8,9,10,11,12];
    $months = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
    $cantDays = [31,29,31,30,31,30,31,31,30,31,30,31];
    $year = 2018;
    $j = 1;
    $aux =  1;
?>
{{ $date }}
{{ $date->year }}
{{ $date->month }}
{{ $date->day }}

@for($a=0; $a <= 11; $a++)

<table>
    <tr>
    <p>{{ $months[$a] }} de {{ $year }}</p>
    </tr>
    <tr>
        <td>Dom</td>
        <td>Lun</td>
        <td>Mar</td>
        <td>Mie</td>
        <td>Jue</td>
        <td>Vie</td>
        <td>Sab</td>
    </tr>
    @for($b=1; $b < $j; $b++)
    <td></td>
    @endfor
    @for($i = 1; $i <= $cantDays[$a]; $i++)
        @if($j==1)
            <tr>
                <td>{{ $i }}</td>
                <?php $j++ ?>
        @else
            @if($j==7)
                <td>{{ $i }}</td>
            </tr>
            <?php $j=1 ?>
            @else
                <td>{{ $i }}</td>
                <?php $j++ ?>
            @endif
        @endif
    @endfor

</table>
<br>
@endfor
