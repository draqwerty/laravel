@extends('layouts.app')

@section('content')

    <h1>{{ $title }}</h1>
    <br />
    <?php
    for($i = 0; $i < 7; $i++)
    {
    ?>
        <div class="card" style="width: 32rem;">
            <div class="card-body">
              <p class="card-text">{{ $day }}-{{ $month }}-{{ $year }}.</p>
            </div>
            <img src="{{config('WEATHER_FOLDER', '/wdisplay')}}/{{ $year }}{{ $month }}{{ $day }}.gif" class="card-img-bottom" alt="day {{ $year }}{{ $month }}{{ $day }}">
        </div>
        <br />

    <?php
        if ($day == 31 && $month <> 12) {
            $month  = sprintf("%02d", $month + 1);
            $day = sprintf("%02d", 1);
        }
        elseif ($month == 02 && $day == 28) {
            $month  = sprintf("%02d", $month + 1);
            $day = sprintf("%02d", 1);
        }
        elseif ($month == 4 || $month == 6 || $month == 9 || $month == 11 && $day == 30) {
            $month  = sprintf("%02d", $month + 1);
            $day = sprintf("%02d", 1);
        }
        elseif ($month == 12 && $day == 31) {
            $year = $year + 1;
            $month  = sprintf("%02d", 1);
            $day = sprintf("%02d", 1);
        }
        else {
            $day = sprintf("%02d", $day + 1);
        }
    }
    ?>


@endsection
