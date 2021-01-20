@extends('layouts.app')

@section('content')

    <p>Weatherflow Tempest Current Observations</p>

    Station Pressure: {{ $station_pressure }}<br />
    Sea Level Pressure: {{ $sea_level_pressure }}<br />
    {{ $difference = $sea_level_pressure - $station_pressure }}
    Difference: {{ $difference }}<br /><br />

    'timestamp' => {{ date("d-m-Y H:i:s", substr($timestamp, 0, 10)) }}<br />
    'air_temperature' => {{ $air_temperature }}<br />
    'barometric_pressure' => {{ $barometric_pressure }}<br />
    'station_pressure' => {{ $station_pressure }}<br />
    'sea_level_pressure' => {{ $sea_level_pressure }}<br />
    'relative_humidity' => {{ $relative_humidity }}<br />
    'precip' => {{ $precip }}<br />
    'precip_accum_last_1hr' => {{ $precip_accum_last_1hr }}<br />
    'precip_accum_local_day' => {{ $precip_accum_local_day }}<br />
    'precip_accum_local_yesterday' => {{ $precip_accum_local_yesterday }}<br />
    'precip_minutes_local_day' => {{ $precip_minutes_local_day }}<br />
    'precip_minutes_local_yesterday' => {{ $precip_minutes_local_yesterday }}<br />
    'wind_avg' => {{ $wind_avg }}<br />
    'wind_direction' => {{ $wind_direction }}<br />
    'wind_gust' => {{ $wind_gust }}<br />
    'wind_lull' => {{ $wind_lull }}<br />
    'solar_radiation' => {{ $solar_radiation }}<br />
    'uv' => {{ $uv }}<br />
    'brightness' => {{ $brightness }}<br />
    'lightning_strike_last_epoch' => {{ date("d-m-Y H:i:s", substr($lightning_strike_last_epoch, 0, 10)) }}<br />
    'lightning_strike_last_distance' => {{ $lightning_strike_last_distance }}<br />
    'lightning_strike_count' => {{ $lightning_strike_count }}<br />
    'lightning_strike_count_last_1hr' => {{ $lightning_strike_count_last_1hr }}<br />
    'lightning_strike_count_last_3hr' => {{ $lightning_strike_count_last_3hr }}<br />
    'feels_like' => {{ $feels_like }}<br />
    'heat_index' => {{ $heat_index }}<br />
    'wind_chill' => {{ $wind_chill }}<br />
    'dew_point' => {{ $dew_point }}<br />
    'wet_bulb_temperature' => {{ $wet_bulb_temperature }}<br />
    'delta_t' => {{ $delta_t }}<br />
    'air_density' => {{ $air_density }}<br />
    'pressure_trend' => {{ $pressure_trend }}<br />



@endsection
