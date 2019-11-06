


@extends('layouts.app')


@section('content')

 
<div class="form-wrapper">
<h1>Contact Us</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
 <div class="form-group">
  
    <b>{{Form::label('names','Names')}}</b>
    {{Form::text('names','',['class' => 'form-control'])}}<br>
    @if($errors->has('names'))<strong class="text-danger">{{ $errors->first('names') }}
    </strong><br>@endif 
   
  
    <b>{{Form::label('email','Email')}}&nbsp&nbsp</b>
    {{Form::text('email','',['class' => 'form-control'])}}<br>
    @if($errors->has('email'))<strong class="text-danger">{{ $errors->first('email') }}
    </strong><br>@endif
	
	 <b>{{Form::label('subject','Subject')}}&nbsp&nbsp</b>
    {{Form::text('subject','',['class' => 'form-control'])}}<br>
    @if($errors->has('subject'))<strong class="text-danger">{{ $errors->first('subject') }}
    </strong><br>@endif
	
	<b>{{Form::label('body', 'Body')}}&nbsp&nbsp</b>
    {{Form::textarea('body','', ['class' => 'form-control'])}}<br>
    @if($errors->has('body'))<strong class="text-danger">{{ $errors->first('body') }}
    </strong><br>@endif
    

  <div class="form-group">
    {{Form::submit('Send', ['class' => 'btn btn-primary']) }}
 </div>
{!! Form::close() !!}
    
</div>

</div>


    
@endsection

 
  
        