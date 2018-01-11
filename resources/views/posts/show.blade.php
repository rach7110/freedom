@extends('master')

<!-- HEADER -->
@section('title')
{{ $post->title }}
@stop

@section('title_description')
@stop

@section('content')
    <!-- BACK TO BLOG LIST -->
    <a href="{{route('blog')}}">< Blog</a>

    @yield('post-content')
@stop