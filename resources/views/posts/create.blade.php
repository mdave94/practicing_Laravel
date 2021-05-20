@extends('layouts.app')

@section('title','CreatePage')    

@include('includes.navbar')

@section('content')


<form action="/posts"   method="post">
    @csrf
<input type="text" name="title"  placeholder="Enter title">

<input type="submit" name="submit">

</form>


@endsection


