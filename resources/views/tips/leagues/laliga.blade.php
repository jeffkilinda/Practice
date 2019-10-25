@extends('layouts.app')



@section('content')
      
 <table class="table">
    <thead>
<tr align="center">
   <td colspan="7"><h1>Laliga Tips </h1></td>
</tr>
<tr align="center">
  <td colspan="7">
    <h5>{{date("Y/m/d")}}   
      
      @if (Auth::user() && Auth::user()->role_id == '1')
      <span class="float-right" >
          <a class=" btn btn-primary pull-right" href="/tips/create">Create Tip</a>
        </span>
    @endif 

    
     </h5>
  </td>
</tr>
      <tr class="success" style="background-color:#dff0d8">
        <th>Date</th>
       
        <th>League</th>
        <th>Home </th>
        <th>Scores </th>
        <th>Away </th>
        <th>Tip</th>
        <th>Odds</th>
       {{-- <th>status</th>--}}
    
       
      </tr>
    </thead>
    <tbody>
          
     
     
   @if (count($tips) > 0)
   @foreach ($tips as $tip)
       
      
      <tr class="success">
                       

        <td>{{ Carbon\Carbon::parse($tip->time)->format('H:i') }}</td>
        
        @if (Auth::user() && Auth::user()->role_id == '1')
        
        <td><a href="/tips/{{$tip->id}}/edit"> {{$tip->league}}</a> </td>


        @else
        <td>{{$tip->league}} </td>
      @endif 
        
    
        
        
        
        <td>{{$tip->team1}}</td>
        <td>{{$tip->results}}</td>
        <td>{{$tip->team2}}</td>
        <td>{{$tip->prediction->name}} </td>
        <td> {{$tip->odd}} </td>
        {{-- <td>{{$tip->status->name}} </td> --}}
        
        {{-- <td> <a href="/tips/{{$tip->id}}">More Analysis </a></td> --}}
        
    </tr>
       
   @endforeach 

   @else
   
     
   <td colspan="7"> <h2 style="text-align:center;">No Laliga matches Today</h2></td>
   @endif

   
</tbody>
</table>
@endsection

