@extends('layouts/main')

@section('content')

    <h1>Home</h1>

    <ul>
    
    @foreach ( $posts as $post )

    
        
     <li> <a   href="{{ url('http://127.0.0.1:8000/'.$post->post_name) }}" >{{$post->post_title}}</a></li>
     
     
    
        
      
    
    @endforeach
    </ul>

@endsection