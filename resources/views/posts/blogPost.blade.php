@extends('layout.app')

@section('content')
@include('layout.back')

<h1>{{ $post->title }}</h1>
<article>
    {{ $post->body }}
</article>
<hr>
<small>Written on {{ $post->created_at }}</small>
<hr>
<div class="cont">
    <div class="edit">
        <a href="/posts/{{$post->id}}/edit" class="edit edit-icon edit-icon"></a>
    </div>
    <div class="cloc">
        <div class="delete">
            <a href="/posts/{{$post->id}}/edit" class="delete delete-icon delete-icon"></a>
        </div>
        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id]]) !!}
        {!! Form::hidden('_method', 'DELETE') !!}
        {!! Form::submit('Delete', []) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection
