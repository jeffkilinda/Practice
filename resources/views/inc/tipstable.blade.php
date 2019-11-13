
   <table class="table">
    <thead>

<tr align="center">
  <td colspan="7">
    <h5><span class="float-left" >
      <a class=" btn btn-primary pull-right" href="/top">Top Tips</a>
    </span>
    
    <span class="" >
      <a class=" btn btn-primary " href="/yesterday">Yesterday winnings</a>
    </span> 
      
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
        
        <td class="league"><a href="/tips/{{$tip->id}}/edit"> {{$tip->league}}</a> </td>

        @else
        <td class="league">{{$tip->league}} </td>
      @endif 
      
        <td>{{$tip->team1}}</td>
        <td>{{$tip->results}}</td>
        <td>{{$tip->team2}}</td>

      
     

      @if ($tip->status_id == '2')
        <td>{{$tip->prediction->name}} 
          <img style="float:right;" src="{{ asset('images/won.png')}}" alt="✓"> </td>
        
       @else
        <td>{{$tip->prediction->name}}<strong style="color:green;float:right;">
          &nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
      @endif 
        

        <td> {{$tip->odd}} </td>
        {{-- <td>{{$tip->status->name}} </td> --}}
        
        {{-- <td> <a href="/tips/{{$tip->id}}">More Analysis </a></td> --}}
        
    </tr>
       
   @endforeach 

   @else
   
   
     
   <td colspan="7"> <h2 style="text-align:center;">OOOps! Tips Not Found</h2></td>
   @endif

   
</tbody>
</table>