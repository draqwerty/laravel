@extends('layouts.app')

@section('content')

    <h1>{{ $title }}</h1>
    <br />
    <div class="card" style="width: 32rem;">
        <div class="card-body">
          <p class="card-text">yesterday graph.</p>
        </div>
      <img src="{{config('WEATHER_FOLDER', '/wdisplay')}}/yesterdaygraph.gif" class="card-img-bottom" alt="yesterday">
    </div>
    <br />
    <div class="card" style="width: 32rem;">
        <div class="card-body">
          <p class="card-text">last two days graph.</p>
        </div>
      <img src="{{config('WEATHER_FOLDER', '/wdisplay')}}/48hourgraph.gif" class="card-img-bottom" alt="last 2 days">
    </div>
    <br />
    <div class="card" style="width: 32rem;">
        <div class="card-body">
          <p class="card-text">last three days graph.</p>
        </div>
      <img src="{{config('WEATHER_FOLDER', '/wdisplay')}}/72hourgraph.gif" class="card-img-bottom" alt="last 3 days">
    </div>
@endsection
