@extends('layouts.app')

@section('content')

    <style>
        thead, tbody, tfoot, tr, td, th { border-width: 3px;}
    </style>

    <h1>{{ $title }}</h1>
    <br />
    
    <div class="container">
        <?php include '/var/www/html/current/public/wdisplay/'.$filename; ?>
    </div>

@endsection
