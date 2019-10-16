@extends('layouts.app')



@section('content')
    
<div class="form-wrapper">
<h1>Edit Tip</h1>

    {!! Form::open(['action' => ['TipsController@update', $tip->id], 'method' => 'POST']) !!}
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
    {{Form::label('tip','Tip')}}
    {{Form::select('tip', ['1' => '1', '2' => '2','x' => 'x','1 or X' => '1 or X', 'X or 2' => 'X or 2',
    '1 or 2' => '1 or 2','1 DNB' => '1 DNB', '2 DNB' => '2 DNB','GG' => 'GG','NG' => 'NG',
    'Over 2.5' => 'Over 2.5', 'Under 2.5' => 'Under 2.5','Over 1.5' => 'Over 1.5','Over 3.5' => 'Over 3.5',
     'Under 3.5' => 'Under 3.5'], null, ['class' => 'form-control','placeholder' => 'Select Prediction'])}}
</div>


  <div class="form-group">
      {{Form::label('odd','Odd')}}
      {{Form::text('odd',$tip->odd,['class' => 'form-control'])}}
  </div>
  
  
  <div class="form-group">
    {{Form::label('type','Type')}}
    {{Form::select('type', ['normal' => 'normal', 'top' => 'top'], null, ['class' => 'form-control','placeholder' => 'Tip type'])}}
</div>
  

  <div class="form-group">
      {{Form::label('results','Results')}}
      {{Form::text('results',$tip->results,['class' => 'form-control'])}}
  </div>
    
  {{ Form::hidden('_method','PUT') }}
  <div class="form-group">
    {{Form::submit('Post', ['class' => 'btn btn-primary']) }}
 </div>
{!! Form::close() !!}
    

</div>
    
@endsection