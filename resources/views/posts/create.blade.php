@extends('layouts.app')

@section('title','CreatePage')    

@include('includes.navbar')

@section('content')
<h1>Create Post</h1>

<form action="/posts"   method="post">
    @csrf
<input type="text" name="title"  placeholder="Enter title">

<input type="submit" name="submit">

</form>


@endsection


