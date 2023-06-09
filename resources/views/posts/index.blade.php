@extends('layout.app')

@section('content')
<h1>posts</h1>
@if (count($posts) > 0)
    @foreach ($posts as $post)
        <div class="post">
            <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
            <small>Written on {{ $post->created_at }}</small>
        </div>
    @endforeach
@else
<p>no posts yet!</p>
@endif
@endsection
