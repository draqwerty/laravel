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
                <td>temperature: {{ $currentlist['temperature'] }} &deg;C</td>
                <td>humidity: {{ $currentlist['humidity'] }} %</td>
                <td>feels like: {{ $currentlist['feelslike'] }} &deg;C</td>
                <td>barometer: {{ $currentlist['baro'] }} hpa</td>
            </tr>
            <tr>
                <td>average wind: {{ $currentlist['avgspd'] }} km/h</td>
                <td>wind gust: {{ $currentlist['gstspd'] }} km/h</td>
                <td>wind dir: {{ $currentlist['dirdeg'] . " " . $currentlist['dirlabel'] }}</td>
                <td>lightning last hour: {{ $currentlist['lighteningcountlasthour'] }} strikes</td>
            </tr>
            <tr>
                <td>rain today: {{ $currentlist['dayrn'] }} mm</td>
                <td>uv: {{ $currentlist['VPuv'] }}</td>
                <td>burn time: {{ $currentlist['burntime'] }} minutes</td>
                <td>next update: {{ $currentlist['timeofnextupdate'] }}</td>
            </tr>
        </table>
    </div>


    @if($fire['tomorrow1'] === "NA" || $fire['tomorrow2'] === "NA")

        <div class="h-auto w-75 mx-auto shadow p-3 mb-5 bg-white rounded px-5">

    @else

        <div class="h-auto w-100 shadow p-3 mb-5 bg-white rounded px-5">

    @endif

    <h2>fire status</h2>
    <br />


    <div class="row justify-content-md-center">
        <div class="col">

            <h3 class="text-center">today</h3>

            @switch($fire['today'])

                @case('LOW-MODERATE')
                    <img src="/images/low-moderate.png" class="w-100 rounded img-fluid img-thumbnail"/>
                    @break

                @case('HIGH')
                    <img src="/images/high.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                    @break

                @case('VERY HIGH')
                    <img src="/images/very-high.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                    @break

                @case('EXTREME')
                    <img src="/images/extreme.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                    @break

                @case('SEVERE')
                    <img src="/images/severe.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                    @break

                @case('CATASTROPHIC')
                    <img src="/images/catastrophic.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                    @break

                @default
                    <h5 class="text-center">no information available</h5>
                    @break

            @endswitch
        </div>

        @if($fire['tomorrow1'] === "NA" && $fire['tomorrow2'] === "NA")

            <div class="col col-lg-2">
            </div>

        @endif

        <div class="col">

            <h3 class="text-center">tomorrow</h3>

            @switch($fire['tomorrow'])

                @case('LOW-MODERATE')
                    <img src="/images/low-moderate.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                    @break

                @case('HIGH')
                    <img src="/images/high.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                    @break

                @case('VERY HIGH')
                    <img src="/images/very-high.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                    @break

                @case('EXTREME')
                    <img src="/images/extreme.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                    @break

                @case('SEVERE')
                    <img src="/images/severe.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                    @break

                @case('CATASTROPHIC')
                    <img src="/images/catastrophic.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                    @break

                @default
                    <h5 class="text-center">no information available</h5>
                    @break

            @endswitch
        </div>

        @if($fire['tomorrow1'] != "NA")
            <div class="col">

                <h3 class="text-center">tomorrow+1</h3>

                @switch($fire['tomorrow1'])

                    @case('LOW-MODERATE')
                        <img src="/images/low-moderate.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('HIGH')
                        <img src="/images/high.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('VERY HIGH')
                        <img src="/images/very-high.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('EXTREME')
                        <img src="/images/extreme.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('SEVERE')
                        <img src="/images/severe.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('CATASTROPHIC')
                        <img src="/images/catastrophic.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                @endswitch
            </div>
        @endif


        @if($fire['tomorrow2'] != "NA")
            <div class="col">

                <h3 class="text-center">tomorrow+2</h3>

                @switch($fire['tomorrow2'])

                    @case('LOW-MODERATE')
                        <img src="/images/low-moderate.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('HIGH')
                        <img src="/images/high.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('VERY HIGH')
                        <img src="/images/very-high.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('EXTREME')
                        <img src="/images/extreme.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('SEVERE')
                        <img src="/images/severe.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('CATASTROPHIC')
                        <img src="/images/catastrophic.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                @endswitch
            </div>
        @endif

        @if($fire['tomorrow3'] != "NA")
            <div class="col">

                <h3 class="text-center">tomorrow+3</h3>

                @switch($fire['tomorrow3'])

                    @case('LOW-MODERATE')
                        <img src="/images/low-moderate.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('HIGH')
                        <img src="/images/high.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('VERY HIGH')
                        <img src="/images/very-high.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('EXTREME')
                        <img src="/images/extreme.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('SEVERE')
                        <img src="/images/severe.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('CATASTROPHIC')
                        <img src="/images/catastrophic.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                @endswitch
            </div>
        @endif



        @if($fire['tomorrow4'] != "NA")
            <div class="col">

                <h3 class="text-center">tomorrow+4</h3>

                @switch($fire['tomorrow4'])

                    @case('LOW-MODERATE')
                        <img src="/images/low-moderate.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('HIGH')
                        <img src="/images/high.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('VERY HIGH')
                        <img src="/images/very-high.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('EXTREME')
                        <img src="/images/extreme.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('SEVERE')
                        <img src="/images/severe.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                    @case('CATASTROPHIC')
                        <img src="/images/catastrophic.png"  class="w-100 rounded img-fluid img-thumbnail"/>
                        @break

                @endswitch
            </div>
        @endif
    </div>
    </div>

    <div class="h-auto w-75 mx-auto shadow p-3 mb-5 bg-white rounded px-5">
        <h2>fire restrictions</h2>

        <br />
        <h4 class="text-left"><strong>Yarra Ranges:</strong>  <small class="text-muted">{{ $fire['firerestriction'] }}</small></h4>

    </div>











@endsection
