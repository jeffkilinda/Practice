


@extends('layouts.app')


@section('content')
@if (Auth::user() && Auth::user()->role_id == '1')
 
<div class="form-wrapper">
<h1>Post Tips</h1>

    {!! Form::open(['action' => 'TipsController@store', 'method' => 'POST']) !!}
 <div class="form-group">
   
  <b>{{Form::label('date','Date')}}</b>
    {{Form::date('date', \Carbon\Carbon::now(),['class' => 'form-control'])}}
    @if($errors->has('date'))<strong class="text-danger">{{ $errors->first('date') }}
    </strong>@endif <br>
  

  
   <b>{{Form::label('time','Time')}}&nbsp&nbsp</b>
    {{ Form::time('time','NULL', ['class' => 'form-control']) }}<br>
    @if($errors->has('time'))<strong class="text-danger">{{ $errors->first('time') }}
    </strong><br>@endif
    

  
    <b>{{Form::label('league','League')}}</b>
    {{Form::text('league','',['class' => 'form-control'])}}<br>
    @if($errors->has('league'))<strong class="text-danger">{{ $errors->first('league') }}
    </strong><br>@endif 
   
  
    <b>{{Form::label('team1','Home')}}&nbsp&nbsp</b>
    {{Form::text('team1','',['class' => 'form-control'])}}<br>
    @if($errors->has('team1'))<strong class="text-danger">{{ $errors->first('team1') }}
    </strong><br>@endif
    

  
    <b>{{Form::label('team2','Away')}}&nbsp&nbsp</b>
    {{Form::text('team2','',['class' => 'form-control'])}}<br>
    @if($errors->has('team2'))<strong class="text-danger">{{ $errors->first('team2') }}
    </strong><br>@endif
    

    <b>{{Form::label('prediction_id','Tip')}}&nbsp&nbsp&nbsp&nbsp&nbsp</b>
    {{Form::select('prediction_id', [''=>'Select prediction']+$prediction, null, ['class' => 'form-control'])}}<br>
    @if($errors->has('prediction_id'))<strong class="text-danger">{{ $errors->first('prediction_id') }}
    </strong><br>@endif
    


  
     <b> {{Form::label('odd','Odd')}}&nbsp&nbsp&nbsp</b>
      {{Form::text('odd','',['class' => 'form-control'])}}<br>
      @if($errors->has('odd'))<strong class="text-danger">{{ $errors->first('odd') }}
      </strong><br>@endif
     
  
  


  <b>{{Form::label('type_id','Type')}}&nbsp&nbsp&nbsp</b>
  {{Form::select('type_id', $type, null, ['class' => 'form-control'])}}<br>
  @if($errors->has('type_id'))<strong class="text-danger">{{ $errors->first('type_id') }}
  </strong><br>@endif

  

  <div class="form-group">
    {{Form::submit('Add', ['class' => 'btn btn-primary']) }}
 </div>
{!! Form::close() !!}
    
</div>

</div>

@else
   <h2 style="text-align:center;color:red;">You are not an Admin</h2>
   @endif 
    
@endsection

