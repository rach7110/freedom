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
        <!-- Link a page to post title if slug has been saved. -->
        @if($post->slug)
            <a href="{{ route('blog.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
        
        <!-- Otherwise, display post title only. -->
        @else
            {{ $post->title }}
        @endif
    </h3>
@endforeach
    
@stop