@extends('layouts.app')

@section('title','Index Page')    

@include('includes.navbar')

@section('content')

    <div class="center">
        {{$post->title}}
    </div>
    

@endsection


