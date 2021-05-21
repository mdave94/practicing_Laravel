@extends('layouts.app')

@section('title','EditPage')    

@include('includes.navbar')

@section('content')
<h1>Edit Post</h1>


<!-- EDIT -->
<form action="/posts/{{$post->id}}"   method="post" >
    {{ csrf_field() }}
    @csrf


<input type="hidden" name="_method" value="PUT">
<input type="text" name="title"  placeholder="Enter title" value="{{$post->title}}"><br>
<input type="text" name="title"  placeholder="Enter content" value="{{$post->body}}">

<input type="submit" name="submit" value="UPDATE">

</form>

<!-- DELETE -->
<form action="/posts/{{$post->id}}" method="post">
    {{ csrf_field() }}
   
    <input type="hidden" name="_method" value="DELETE" >

    <input type="submit" value="DELETE">

</form>

@endsection


