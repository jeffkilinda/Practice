@extends('layouts.app')



@section('content')


<h1 style="text-align:center">Today Tips <br><span >{{date("F j, Y")}}   </span></h1>
   
    
@include('inc.tipstable')


@endsection

