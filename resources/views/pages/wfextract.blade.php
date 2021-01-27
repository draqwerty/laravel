@extends('layouts.app')

@section('content')


    <br />
    <div class="shadow p-3 mb-5 rounded px-5">

        <h2>Weatherflow Tempest Current Observations</h2>

        <table class="table table-sm table-hover">
            <thead class="thead-light">
                <tr>
                    <th>observation</th>
                    <th>measurement</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>timestamp</td>
                    <td>{{ date("d-m-Y H:i:s", substr($timestamp, 0, 10)) }}</td>
                </tr>
                <tr>
                    <th>air temperature</td>
                    <td>{{ $air_temperature }}</td>
                </tr>
                <tr>
                    <th>barometric pressure</td>
                    <td>{{ $barometric_pressure }}</td>
                </tr>
                <tr>
                    <th>station pressure</td>
                    <td>{{ $station_pressure }}</td>
                </tr>
                <tr>
                    <th>sea level pressure</td>
                    <td>{{ $sea_level_pressure }}</td>
                </tr>
                <tr>
                    <th>relative humidity</td>
                    <td>{{ $relative_humidity }}</td>
                </tr>
                <tr>
                    <th>precip</td>
                    <td>{{ $precip }}</td>
                </tr>
                <tr>
                    <th>precip_accum_last_1hr</td>
                    <td>{{ $precip_accum_last_1hr }}</td>
                </tr>
                <tr>
                    <th>precip_accum_local_day</td>
                    <td>{{ $precip_accum_local_day }}</td>
                </tr>
                <tr>
                    <th>precip_accum_local_yesterday</td>
                    <td>{{ $precip_accum_local_yesterday }}</td>
                </tr>
                <tr>
                    <th>precip_minutes_local_day</td>
                    <td>{{ $precip_minutes_local_day }}</td>
                </tr>
                <tr>
                    <th>precip_minutes_local_yesterday</td>
                    <td>{{ $precip_minutes_local_yesterday }}</td>
                </tr>
                <tr>
                    <th>wind avg</td>
                    <td>{{ $wind_avg }}</td>
                </tr>
                <tr>
                    <th>wind_direction</td>
                    <td>{{ $wind_direction }}</td>
                </tr>
                <tr>
                    <th>wind_gust</td>
                    <td>{{ $wind_gust }}</td>
                </tr>
                <tr>
                    <th>wind_lull</td>
                    <td>{{ $wind_lull }}</td>
                </tr>
                <tr>
                    <th>solar_radiation</td>
                    <td>{{ $solar_radiation }}</td>
                </tr>
                <tr>
                    <th>uv</td>
                    <td>{{ $uv }}</td>
                </tr>
                <tr>
                    <th>brightness</td>
                    <td>{{ $brightness }}</td>
                </tr>
                <tr>
                    <th>lightning strike last epoch</td>
                    <td>{{ date("d-m-Y H:i:s", substr($lightning_strike_last_epoch, 0, 10)) }}</td>
                </tr>
                <tr>
                    <th>lightning_strike_last_distance</td>
                    <td>{{ $lightning_strike_last_distance }}</td>
                </tr>
                <tr>
                    <th>lightning_strike_count</td>
                    <td>{{ $lightning_strike_count }}</td>
                </tr>
                <tr>
                    <th>lightning_strike_count_last_1hr</td>
                    <td>{{ $lightning_strike_count_last_1hr }}</td>
                </tr>
                <tr>
                    <th>lightning_strike_count_last_3hr</td>
                    <td>{{ $lightning_strike_count_last_3hr }}</td>
                </tr>
                <tr>
                    <th>feels_like</td>
                    <td>{{ $feels_like }}</td>
                </tr>
                <tr>
                    <th>heat_index</td>
                    <td>{{ $heat_index }}</td>
                </tr>
                <tr>
                    <th>wind_chill</td>
                    <td>{{ $wind_chill }}</td>
                </tr>
                <tr>
                    <th>dew_point</td>
                    <td>{{ $dew_point }}</td>
                </tr>
                <tr>
                    <th>wet_bulb_temperature</td>
                    <td>{{ $wet_bulb_temperature }}</td>
                </tr>
                <tr>
                    <th>delta_t</td>
                    <td>{{ $delta_t }}</td>
                </tr>
                <tr>
                    <th>air_density</td>
                    <td>{{ $air_density }}</td>
                </tr>
                <tr>
                    <th>pressure_trend</td>
                    <td>{{ $pressure_trend }}</td>
                </tr>
            </tbody>
        </table>
</div>

Station Pressure: {{ $station_pressure }}<br />
Sea Level Pressure: {{ $sea_level_pressure }}<br />
Difference: {{ $difference = $sea_level_pressure - $station_pressure }}
<br /><br />


@endsection
