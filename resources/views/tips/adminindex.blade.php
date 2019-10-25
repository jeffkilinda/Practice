    
 

@extends('layouts.app')



@section('content')
    
@if (Auth::user() && Auth::user()->role_id == '1')
 
    <table class="table">
    <thead>
<tr align="center"><td colspan="6"><h1>Daily Tips</h1><br>
<h5>{{date("Y/m/d")}}   </h5></td></tr>
      <tr class="success" style="background-color:#dff0d8">
        <th>Date</th>
       
        <th>League</th>
        <th>Home </th>
        <th>Away </th>
        <th>Tip</th>
        <th>Odds</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
          
     
     
   @if (count($tips) > 0)
   @foreach ($tips as $tip)
       
      
      <tr class="success">
                       

        <td>{{ Carbon\Carbon::parse($tip->time)->format('H:i') }}</td>
        <td>{{$tip->league}} </td>
        <td>{{$tip->team1}}</td>
        
        <td>{{$tip->team2}}</td>
        <td>{{$tip->prediction->name}} </td>
        <td> {{$tip->odd}} </td>
        
        <td> <a href="/tips/{{$tip->id}}/edit">Edit </a></td> 
        <td>
       {!!Form::open(['action' => ['TipsController@destroy', $tip->id], 'method' => 'POST'])!!}
       {{Form::hidden('_method','DELETE')}}
       {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
       {!!Form::close() !!}
        </td>
        
    </tr>
       
   @endforeach 

   @else
   
     
   <td colspan="7"> <h2 style="text-align:center;">OOOps! Tips for Today Not Found</h2></td>
   @endif

   
</tbody>
</table>

@else
   <h2 style="text-align:center;color:red;">You are not an Admin</h2>
   @endif 
@endsection

