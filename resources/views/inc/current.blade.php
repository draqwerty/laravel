@if ($currentlist['temperature'] <= 0)
    <?php $style = 'btn-light';
    $bg_style = 'bg-info'; ?>

@elseif ($currentlist['temperature'] <= 6)
    <?php $style = 'btn-info';
    $bg_style = ''; ?>

@elseif ($currentlist['temperature'] <= 12)
    <?php $style = 'btn-primary';
    $bg_style = ''; ?>

@elseif ($currentlist['temperature'] <= 17)
    <?php $style = 'btn-secondary';
    $bg_style = ''; ?>

@elseif ($currentlist['temperature'] <= 30)
    <?php $style = 'bg-success text-white';
    $bg_style = ''; ?>

@elseif ($currentlist['temperature'] <= 36)
    <?php $style = 'btn-warning';
    $bg_style = ''; ?>

@elseif ($currentlist['temperature'] < 42)
    <?php $style = 'btn-danger';
    $bg_style = ''; ?>

@elseif ($currentlist['temperature'] >= 42)
    <?php $style = 'btn-dark';
    $bg_style = ''; ?>

@endif


<div class="d-flex flex-md-column justify-content-center {{ $bg_style }}">

    <div class="d-flex flex-row p-1 justify-content-center">
        <button class="btn btn-sm {{ $style }} rounded-pill">temperature: {{ $currentlist['temperature'] }}</button>
        <button class="btn btn-sm {{ $style }} rounded-pill">humidity: {{ $currentlist['humidity'] }}</button>
        <button class="btn btn-sm {{ $style }} rounded-pill">feels like: {{ $currentlist['feelslike'] }}</button>
        <button class="btn btn-sm {{ $style }} rounded-pill">barometer: {{ $currentlist['baro'] }}</button>
    </div>
    <div class="d-flex flex-row p-0 justify-content-center">
        <button class="btn btn-sm {{ $style }} rounded-pill">average wind: {{ $currentlist['avgspd'] }}</button>
        <button class="btn btn-sm {{ $style }} rounded-pill">wind gust: {{ $currentlist['gstspd'] }}</button>
        <button class="btn btn-sm {{ $style }} rounded-pill">wind dir: {{ $currentlist['dirdeg'] . " " . $currentlist['dirlabel'] }}</button>
    </div>

    <div class="d-flex flex-row p-1 justify-content-center">
        <button class="btn btn-sm {{ $style }} rounded-pill">rain today: {{ $currentlist['dayrn'] }}</button>
        <button class="btn btn-sm {{ $style }} rounded-pill">uv: {{ $currentlist['VPuv'] }}</button>
        <button class="btn btn-sm {{ $style }} rounded-pill">burn time: {{ $currentlist['burntime'] }}</button>
        <button class="btn btn-sm {{ $style }} rounded-pill">next update: {{ $currentlist['timeofnextupdate'] }}</button>
    </div>


</div>
