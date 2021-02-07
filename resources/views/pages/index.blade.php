@extends('layouts.app')

@section('content')

    @if ($currentlist['temperature'] <= 0)
        <?php $style = 'table-light';
        $bg_style = 'table-info'; ?>

    @elseif ($currentlist['temperature'] <= 6)
        <?php $style = 'table-info';
        $bg_style = ''; ?>

    @elseif ($currentlist['temperature'] <= 12)
        <?php $style = 'table-primary';
        $bg_style = ''; ?>

    @elseif ($currentlist['temperature'] <= 17)
        <?php $style = 'table-secondary';
        $bg_style = ''; ?>

    @elseif ($currentlist['temperature'] <= 30)
        <?php $style = 'table-success';
        $bg_style = ''; ?>

    @elseif ($currentlist['temperature'] <= 36)
        <?php $style = 'table-warning';
        $bg_style = ''; ?>

    @elseif ($currentlist['temperature'] < 42)
        <?php $style = 'table-danger';
        $bg_style = ''; ?>

    @elseif ($currentlist['temperature'] >= 42)
        <?php $style = 'table-dark';
        $bg_style = ''; ?>

    @endif

    <br />

    <div class="shadow p-3 mb-5 rounded px-5">
        <h2>current conditions</h2>
        <table class="table table-sm {{ $style }}">
            <tr>
                <td>temperature: {{ $currentlist['temperature'] }}</td>
                <td>humidity: {{ $currentlist['humidity'] }}</td>
                <td>feels like: {{ $currentlist['feelslike'] }}</td>
                <td>barometer: {{ $currentlist['baro'] }}</td>
            </tr>
            <tr>
                <td>average wind: {{ $currentlist['avgspd'] }}</td>
                <td>wind gust: {{ $currentlist['gstspd'] }}</td>
                <td>wind dir: {{ $currentlist['dirdeg'] . " " . $currentlist['dirlabel'] }}</td>
                <td>lightning last hour: {{ $currentlist['lighteningcountlasthour'] }}</td>
            </tr>
            <tr>
                <td>rain today: {{ $currentlist['dayrn'] }}</td>
                <td>uv: {{ $currentlist['VPuv'] }}</td>
                <td>burn time: {{ $currentlist['burntime'] }}</td>
                <td>next update: {{ $currentlist['timeofnextupdate'] }}</td>
            </tr>


        </table>

    </div>

<div class="shadow p-3 mb-5 bg-white rounded px-5">
    <h2>forecast</h2>

    <table class="table table-sm table-hover">
        <thead class="thead-light">
            <tr>
                <th>date</th>
                <th>condition</th>
                <th>max</th>
                <th>min</th>
                <th>rain probability</th>
            </tr>
        </thead>
        <tbody>

            @for ($i = 0; $i < 10; $i++)
                <?php
                    $day_num = 'day_num'.$i;
                    $month_num = 'month_num'.$i;
                    $conditions = 'conditions'.$i;
                    $air_temp_high = 'air_temp_high'.$i;
                    $air_temp_low = 'air_temp_low'.$i;
                    $precip_probability = 'precip_probability'.$i;
                ?>
                <tr>
                    <th>{{ $$day_num }}/{{ $$month_num }}</td>
                    <td>{{ $$conditions }}</td>
                    <td>{{ $$air_temp_high }}</td>
                    <td>{{ $$air_temp_low }}</td>
                    <td>{{ $$precip_probability }}</td>
                </tr>
            @endfor
        </tbody>
    </table>
</div>



<div class="shadow p-3 mb-5 bg-white rounded px-5">
    <h2>last 7 days comparison</h2>
</div>

<div class="shadow p-3 mb-5 bg-white rounded">
    <h2>rain radar</h2>

        @if ($agent->isMobile())
            <div class="modal-body" id="modal-body">
                <iframe width="98%" height="420" src="https://embed.windy.com/embed2.html?lat=-37.930&lon=145.358&detailLat=-37.917&detailLon=145.356&width=419&height=420&zoom=10&level=surface&overlay=rain&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe>
            </div>
            <div class="modal-body" id="modal-body">
                <iframe width="98%" height="420" src="https://embed.windy.com/embed2.html?lat=-27.376&lon=135.794&detailLat=-27.145&detailLon=133.877&width=419&height=420&zoom=3&level=surface&overlay=rain&product=ecmwf&menu=&message=true&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe>
            </div>
        @else
            <div class="modal-body" id="modal-body">
                <iframe width="48%" height="640" src="https://embed.windy.com/embed2.html?lat=-37.930&lon=145.358&detailLat=-37.917&detailLon=145.356&width=640&height=640&zoom=10&level=surface&overlay=rain&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe>
                <iframe width="48%" height="640" src="https://embed.windy.com/embed2.html?lat=-25.635&lon=134.140&detailLat=-37.900&detailLon=145.350&width=640&height=640&zoom=4&level=surface&overlay=rain&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe>
            </div>
        @endif
</div>
    <code></code>
</div>










@endsection
