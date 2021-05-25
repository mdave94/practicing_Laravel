@extends('layouts.app')

@section('title','CreatePage')    

@include('includes.navbar')

@section('content')
<h1>Create Post</h1>

<form action="/posts"   method="post">
    @csrf
<input type="text" name="title"  placeholder="Enter title">
<br>
<input type="text" name="content" placeholder="Enter content">

<input type="submit" name="submit">

</form>

@if (count($errors) > 0)

    @foreach ($errors->all() as $error)
        <li> {{$error}}</li>
        
    @endforeach
    
@endif

@endsection


