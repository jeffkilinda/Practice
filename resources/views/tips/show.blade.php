@extends('layouts.app')



@section('content')
    
<td> <a href="/tips" class="btn btn-primary">Go back </a></td>
     
        <h1>{{$tip->league}}</h1>
        <p>{{$tip->team1}}</p>
        
            <p>{{$tip->team2}}</p>
                <p>{{$tip->tip}} Odds {{$tip->odd}}</p>
        
      
@endsection

