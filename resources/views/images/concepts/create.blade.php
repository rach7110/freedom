@extends('layouts.images')
<head>
    <title>Image Concepts</title>
</head>

@section('content')
    <h1>Image Concepts</h1>
    <h3>This is where we will allow the user to upload image(-s)</h3>
    
    <form action="{{route('image')}}" method="post">
        {!! csrf_field() !!}
        <input type="submit" value="Submit">
    </form>
@stop