@extends('layouts.app')

@section('title','Index Page')    

@include('includes.navbar')

@section('content')

    <div class="center">
        
       <a href="{{route('posts.edit',$post->id)}}"> 
        
         {{$post->title}}
        </a>
       
       
    </div>
    

@endsection


