@extends('layouts.app')



@section('content')
    
<div class="form-wrapper">
<h1>Edit Tip</h1>

    {!! Form::model($tip,['action' => ['TipsController@update', $tip->id], 'method' => 'PATCH']) !!}
 <div class="form-group">
    {{Form::label('date','Date')}}
    {{Form::date('date', \Carbon\Carbon::now(),['class' => 'form-control'])}}
    
  </div>
  <div class="form-group">
    {{Form::label('time','Time')}}
    
    {{ Form::time('time',$tip->time, ['class' => 'form-control']) }}
    
  </div>

  <div class="form-group">
    {{Form::label('league','League')}}
    {{Form::text('league',$tip->league,['class' => 'form-control'])}}
  </div>
  <div class="form-group">
    {{Form::label('team1','Home Team')}}
    {{Form::text('team1',$tip->team1,['class' => 'form-control'])}}
  </div>

  <div class="form-group">
    {{Form::label('team2','Away Team')}}
    {{Form::text('team2',$tip->team2,['class' => 'form-control'])}}
  </div>

 

  <div class="form-group">
    {{Form::label('prediction_id','Tip')}}
    {{Form::select('prediction_id', [''=>'Select prediction']+$prediction, null, ['class' => 'form-control'])}}
</div>


  <div class="form-group">
      {{Form::label('odd','Odd')}}
      {{Form::text('odd',$tip->odd,['class' => 'form-control'])}}
  </div>
  
  
<div class="form-group">
  {{Form::label('type_id','Tip Type')}}
  {{Form::select('type_id', [''=>'Select type']+$type, null, ['class' => 'form-control'])}}
</div>
  

  <div class="form-group">
      {{Form::label('results','Results')}}
      {{Form::text('results',$tip->results,['class' => 'form-control'])}}
  </div>

  
  <div class="form-group">
    {{Form::label('status_id','Status')}}
    {{Form::select('status_id', [''=>'Select status']+$status, null, ['class' => 'form-control'])}}
</div>
    
  {{ Form::hidden('_method','PUT') }}
  <div class="form-group">
    {{Form::submit('UPDATE', ['class' => 'btn btn-primary']) }}
 </div>
{!! Form::close() !!}
    

</div>
    
@endsection