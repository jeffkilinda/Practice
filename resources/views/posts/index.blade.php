@extends('layouts.app')



@section('content')
    
    <h1>Posts 2</h1>
    
    @if (count($posts) > 0)

    
        @foreach ($posts as $post)
        <div class="well" style="border:1px solid grey;margin-top: 12px;padding: 10px;">
        <a class="nav-link" href="/posts/{{$post->id}}">
            <h3>{{$post->title }}</h3>
        </a>
        </div>
        @endforeach
    @else

    <p>No Posts found</P>
        
    @endif

    
    
@endsection