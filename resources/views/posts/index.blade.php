@extends('master')

<!-- HEADER -->
@section('title')
Blog
@stop

@section('title_description')
@stop

@section('content')

@foreach($posts as $post)
<h3>
    <a href=''>{{ $post->title }}</a>
</h3>
@endforeach
    
@stop