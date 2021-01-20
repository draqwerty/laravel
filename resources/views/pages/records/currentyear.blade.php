@extends('layouts.app')

@section('content')

    <h1>{{ $title }}</h1>
    <br />
    <div class="card" style="width: 50rem;">
      <img src="{{config('WEATHER_FOLDER', '/wdisplay')}}/alltimerecordsyear.gif" class="card-img-top" alt="current year records">
      <div class="card-body">
        <p class="card-text">current year records.</p>
      </div>
    </div>

@endsection
