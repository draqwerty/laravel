@extends('layouts.app')

@section('content')

    <h1>{{ $title }}</h1>
    <br />
    <div class="card" style="width: 32rem;">
        <div class="card-body">
          <p class="card-text">current 24 hour graph.</p>
        </div>
      <img src="{{config('WEATHER_FOLDER', '/wdisplay')}}/curr24hourgraph.gif" class="card-img-bottom" alt="current 24 hour">
    </div>
    <br />
    <div class="card" style="width: 32rem;">
        <div class="card-body">
          <p class="card-text">current 48 hour graph.</p>
        </div>
      <img src="{{config('WEATHER_FOLDER', '/wdisplay')}}/curr48hourgraph.gif" class="card-img-bottom" alt="current 48 hour">
    </div>
    <br />
    <div class="card" style="width: 32rem;">
        <div class="card-body">
          <p class="card-text">current 72 hour graph.</p>
        </div>
      <img src="{{config('WEATHER_FOLDER', '/wdisplay')}}/curr72hourgraph.gif" class="card-img-bottom" alt="current 72 hour">
    </div>
@endsection
