@extends('layouts.app')



@section('content')
    
<div class="form-wrapper">
<h1>Edit Tip</h1>

    {!! Form::model($tip,['action' => ['TipsController@update', $tip->id], 'method' => 'PATCH']) !!}
 
    <div class="form-group">
    <b> {{Form::label('date','Date')}}</b>
    {{Form::date('date', \Carbon\Carbon::now(),['class' => 'form-control'])}}<br>
    

    <b> {{Form::label('time','Time')}} &nbsp&nbsp</b>
    {{ Form::time('time',$tip->time, ['class' => 'form-control']) }}<br>
    
    <b>{{Form::label('league','League')}}</b>
    {{Form::text('league',$tip->league,['class' => 'form-control'])}}<br>
    
    <b>  {{Form::label('team1','Home')}}&nbsp&nbsp</b>
    {{Form::text('team1',$tip->team1,['class' => 'form-control'])}}<br>
  
    <b> {{Form::label('team2','Away')}}&nbsp&nbsp</b>
    {{Form::text('team2',$tip->team2,['class' => 'form-control'])}}<br>
  
    <b> {{Form::label('prediction_id','Tip')}}&nbsp&nbsp&nbsp&nbsp&nbsp</b>
    {{Form::select('prediction_id', [''=>'Select prediction']+$prediction, null, ['class' => 'form-control'])}}<br>

    <b> {{Form::label('odd','Odd')}}&nbsp&nbsp&nbsp</b>
    {{Form::text('odd',$tip->odd,['class' => 'form-control'])}}<br>
  
    <b>{{Form::label('type_id','Type')}}&nbsp&nbsp&nbsp</b>
    {{Form::select('type_id', [''=>'Select type']+$type, null, ['class' => 'form-control'])}}<br>

    <b>{{Form::label('results','Results')}}</b>
    {{Form::text('results',$tip->results,['class' => 'form-control'])}}<br>

    <b> {{Form::label('status_id','Status')}}</b>
    {{Form::select('status_id', [''=>'Select status']+$status, null, ['class' => 'form-control'])}}
</div>
    
  {{ Form::hidden('_method','PUT') }}
  <div class="form-group" style="margin: auto;width: 70%;">
    
    {{Form::submit('UPDATE', ['class' => 'btn btn-primary btn-custom col-sm-center col-md-3 float-left']) }}
 
    {!! Form::close() !!}
 
    {!!Form::open(['action' => ['TipsController@destroy', $tip->id], 'method' => 'POST'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class' => 'btn btn-danger btn-custom col-sm-center col-md-3 float-right'])}}
    {!!Form::close() !!}
   
    
  </div>

 

</div>
    
@endsection