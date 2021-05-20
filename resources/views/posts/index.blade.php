@extends('layouts.app')

@section('title','Index Page')    

@include('includes.navbar')

@section('content')

<ul>
    @foreach ($posts as $post)
        <li><a href="{{route('posts.show',$post->id)}}">
            {{$post->title}}  </a>
        
        </li>
        
        
    @endforeach
</ul>

@endsection


