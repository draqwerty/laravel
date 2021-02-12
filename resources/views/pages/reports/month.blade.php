@extends('layouts.app')

@section('content')
    <style>
        thead, tbody, tfoot, tr, td, th { border-width: 3px;}
    </style>
    <br />
    <div class="container-xl">
        <?php include '/var/www/html/current/public/wdisplay/'.$filename; ?>
    </div>
@endsection
