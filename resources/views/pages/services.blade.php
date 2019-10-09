<!--getting layout from layout/app.php -->
@extends('layouts.app')


<!--wrapping content to appear in main content -->
@section('content')
        
<h1 style="text-align:center;">{{$title}}</h1>
@if (count($services) > 0)
<ul class="list-group">
@foreach ($services as $service)
    <li class="list-group-item">{{$service}}</li>
@endforeach
</ul> 
@endif
@endsection



