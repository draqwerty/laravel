@extends('layouts.app')

@section('content')

    <h1>{{ $title }}</h1>
    <br />
    <div class="card" style="width: 32rem;">
        <div class="card-body">
          <p class="card-text">month to date graph.</p>
        </div>
      <img src="{{config('WEATHER_FOLDER', '/wdisplay')}}/monthtodate.gif" class="card-img-bottom" alt="month to date">
    </div>
    <br />
    <div class="card" style="width: 32rem;">
        <div class="card-body">
          <p class="card-text">one month to date graph.</p>
        </div>
      <img src="{{config('WEATHER_FOLDER', '/wdisplay')}}/1monthtodate.gif" class="card-img-bottom" alt="one month to date">
    </div>
    <br />
    <div class="card" style="width: 32rem;">
        <div class="card-body">
          <p class="card-text">12 month to date graph.</p>
        </div>
      <img src="{{config('WEATHER_FOLDER', '/wdisplay')}}/12monthtodate.gif" class="card-img-bottom" alt="12 month to date">

    </div>
@endsection
