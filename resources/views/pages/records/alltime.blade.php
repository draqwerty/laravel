@extends('layouts.app')

@section('content')

    <h1>{{ $title }}</h1>
    <br />
    <div class="card" style="width: 50rem;">
        <img src="{{config('WEATHER_FOLDER', '/wdisplay')}}/alltimerecords.gif" class="card-img-top" alt="all time">
        <div class="card-body">
          <p class="card-text">all time records.</p>
        </div>
    </div>

@endsection
