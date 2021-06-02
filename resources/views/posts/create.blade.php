@extends('layouts.app')

@section('title','CreatePage')    

@include('includes.navbar')

@section('content')
<h1>Create Post</h1>

<form action="/posts" enctype="multipart/form-data"  method="post">
        @csrf
    <input type="text" name="title"  placeholder="Enter title">
    <br>
    <input type="text" name="content" placeholder="Enter content">
    
    
    <div class="">
        <input type="file" name="file" class="form-control">
    </div>

    <input type="submit" name="submit">
    

</form>




@if (count($errors) > 0)

    @foreach ($errors->all() as $error)
        <li> {{$error}}</li>
        
    @endforeach
    
@endif

@endsection


