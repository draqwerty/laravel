@extends('layouts.app')

@section('content')

    <h1>{{ $title }}</h1>
    <br />
    <div class="card" style="width: 50rem;">
        <img src="{{config('WEATHER_FOLDER', '/wdisplay')}}/2021alltimerecordsyear.gif" class="card-img-top" alt="2021 records">
        <div class="card-body">
          <p class="card-text">2021 records.</p>
        </div>
    </div>

@endsection
