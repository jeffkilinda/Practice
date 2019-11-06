@extends('layouts.app')



@section('content')
@if (Auth::user() && Auth::user()->role_id == '1')
    
    <h1 class="text-center"> Messages</h1>
    
    @if (count($posts) > 0)

    
        @foreach ($posts as $post)


        <div class="card mt-3 text-center" style="width: 50rem;">
            <div class="card-body">
              <h5 class="card-title">{{$post->subject }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">From: {{$post->email }}</h6>
              <p class="card-text">{{$post->body }}
              From: <a href="#" class="card-link "> {{$post->email }}</a>
             <small class="float-right">{{$post->created_at->diffForHumans() }}</small></p>
            </div>
          </div>
       
        @endforeach
          
    @else

    <p>No Posts found</P>
        
    @endif

      {{-- pagination--}}
      <div class="row ">
        <div class="col-sm-6 col-sm-offset-5 text-center">
            {{$posts->render()}}
        </div>
    </div>
    
   @endif 
@endsection