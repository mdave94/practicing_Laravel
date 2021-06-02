@extends('layouts.app')

@section('title','Index Page')    

@include('includes.navbar')

@section('content')

<ul>
    @foreach ($posts as $post)

        <div class="image-container">
            <a href="{{route('posts.show',$post->id)}}">
                <img style="height:100px" src="{{$post->path}} "  >
            </a>
            

        </div>

        <li><a href="{{route('posts.show',$post->id)}}">
            
            {{$post->title}} 
            </a>
        
        </li>
        
        
    @endforeach
</ul>
<button type="button"  onclick="location.href='{{ url('createPage') }}'"  class="btn btn-primary">Create new Element</button>

@endsection


