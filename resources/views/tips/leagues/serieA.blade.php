@extends('layouts.app')



@section('content')
    

   <table class="table">
    <thead>
<tr align="center"><td colspan="6"><h1>Serie A Tips</h1></td></tr>
      <tr class="success" style="background-color:#dff0d8">
        <th>Date</th>
       
        <th>League</th>
        <th>Home </th>
        <th>Away </th>
        <th>Tip</th>
        
        
        <th>Results</th>
      </tr>
    </thead>
    <tbody>
          
     
     
   @if (count($tips) > 0)
   @foreach ($tips as $tip)
       
      
      <tr class="success">
        <td>{{$tip->date}}<br>Time  {{ Carbon\Carbon::parse($tip->time)->format('H:i') }}</td>
        <td>{{$tip->league}}</td>
        <td>{{$tip->team1}}</td>
        
        <td>{{$tip->team2}}</td>
        <td>{{$tip->tip}}<br>Odd {{$tip->odd}}</td>
        
      
        <td>{{$tip->results}}</td>
    </tr>
       
   @endforeach 
   @else
   
     
     <td colspan="7"> <h2 style="text-align:center;">No Serie A matches Today</h2></td>
     
 
   @endif
  
   
</tbody>
</table>
@endsection

