@extends('layouts.app')

@section('content')

    <h1>{{ $title }}</h1>
    <br />
    <div class="card" style="width: 42rem;">
      <img src="{{ config('app.weatherfolder', '/wdisplay') }}/moondetail1.gif" class="card-img-bottom" alt="yesterday">
    </div>
    <br />
    <div class="card" style="width: 42rem;">
      <img src="{{ config('app.weatherfolder', '/wdisplay') }}/moondetail2.gif" class="card-img-bottom" alt="last 2 days">
    </div>
    <br />
    <div class="card" style="width: 12rem;">
      <img src="{{ config('app.weatherfolder', '/wdisplay') }}/moonicon.gif" class="card-img-bottom" alt="last 3 days">
    </div>
    
@endsection
