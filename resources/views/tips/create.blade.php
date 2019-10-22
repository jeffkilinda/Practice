@extends('layouts.app')



@section('content')
    
<div class="form-wrapper">
<h1>Post Tips</h1>

    {!! Form::open(['action' => 'TipsController@store', 'method' => 'POST']) !!}
 <div class="form-group">
    {{Form::label('date','Date')}}
    {{Form::date('date', \Carbon\Carbon::now(),['class' => 'form-control'])}}
    @if($errors->has('date'))<strong class="text-danger">{{ $errors->first('date') }}
    </strong><br>@endif 
    
  </div>

  <div class="form-group">
    {{Form::label('time','Time')}}
    
    {{ Form::time('time','NULL', ['class' => 'form-control']) }}<br>
    @if($errors->has('time'))<strong class="text-danger">{{ $errors->first('time') }}
    </strong><br>@endif
    
  </div>

  <div class="form-group">
    {{Form::label('league','League')}}
    {{Form::text('league','',['class' => 'form-control'])}}<br>
    @if($errors->has('league'))<strong class="text-danger">{{ $errors->first('league') }}
    </strong><br>@endif 
  </div>
  <div class="form-group">
    {{Form::label('team1','Home Team')}}
    {{Form::text('team1','',['class' => 'form-control'])}}<br>
    @if($errors->has('team1'))<strong class="text-danger">{{ $errors->first('team1') }}
    </strong><br>@endif
  </div>

  <div class="form-group">
    {{Form::label('team2','Away Team')}}
    {{Form::text('team2','',['class' => 'form-control'])}}<br>
    @if($errors->has('team2'))<strong class="text-danger">{{ $errors->first('team2') }}
    </strong><br>@endif
  </div>

 

  <div class="form-group">
    {{Form::label('prediction_id','Tip')}}
    {{Form::select('prediction_id', [''=>'Select prediction']+$prediction, null, ['class' => 'form-control'])}}<br>
    @if($errors->has('prediction_id'))<strong class="text-danger">{{ $errors->first('prediction_id') }}
    </strong><br>@endif
</div>


  <div class="form-group">
      {{Form::label('odd','Odd')}}
      {{Form::text('odd','',['class' => 'form-control'])}}<br>
      @if($errors->has('odd'))<strong class="text-danger">{{ $errors->first('odd') }}
      </strong><br>@endif
  </div>
  
  

<div class="form-group">
  {{Form::label('type_id','Tip')}}
  {{Form::select('type_id', [''=>'Select type']+$type, null, ['class' => 'form-control'])}}<br>
  @if($errors->has('type_id'))<strong class="text-danger">{{ $errors->first('type_id') }}
  </strong><br>@endif
</div>
  

<div class="form-group">
  {{Form::label('results','Results')}}
  {{Form::text('results','_-_',['class' => 'form-control'])}}<br>
  @if($errors->has('results'))<strong class="text-danger">{{ $errors->first('results') }}
  </strong><br>@endif
  
</div>

<div class="form-group">
  {{Form::label('status_id','Status')}}
  {{Form::select('status_id', [''=>'Select status']+$status, null, ['class' => 'form-control'])}}<br>
  @if($errors->has('status_id'))<strong class="text-danger">{{ $errors->first('status_id') }}
  </strong><br>@endif
</div>
    
  <div class="form-group">
    {{Form::submit('Post', ['class' => 'btn btn-primary']) }}
 </div>
{!! Form::close() !!}
    

</div>
    
@endsection