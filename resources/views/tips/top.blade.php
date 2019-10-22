@extends('layouts.app')



@section('content')
    

   <table class="table">
    <thead>
<tr align="center"><td colspan="6"><h1>Top Tips</h1><br>
  <h5>{{date("Y/m/d")}}   </h5></td></tr>
<tr class="success" style="background-color:#dff0d8">
  <th>Date</th>
 
  <th>League</th>
  <th>Home </th>
  <th>Score </th>
  <th>Away </th>
  <th>Tip</th>
  <th>Odds</th>
  
 
</tr>
    </thead>
    <tbody>
          
     
     
   @if (count($tips) > 0)
   @foreach ($tips as $tip)
       
      
      <tr class="success">
        <td>{{ Carbon\Carbon::parse($tip->time)->format('H:i') }}</td>
        <td>{{$tip->league}}</td>
        <td>{{$tip->team1}}</td>
        <td>{{$tip->results}}</td>
        <td>{{$tip->team2}}</td>
        <td>{{$tip->prediction->name}} </td>
        <td> {{$tip->odd}} </td>
        
      
        
    </tr>
       
   @endforeach 
   @else
   
     
   <td colspan="7"> <h2 style="text-align:center;">OOOps! TOP Tips for Today Not Found</h2></td>
   @endif

   
</tbody>
</table>
@endsection

