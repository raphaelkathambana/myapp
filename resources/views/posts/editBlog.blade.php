@extends('layout.app')

@section('content')
@include('layout.back')
<h1>Edit Blog Post</h1>

{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id]]) !!}
    <div>
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', $post->title, ['class' => 'form', 'placeholder' => 'Title']) }}
    </div>
    <div>
        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body', $post->body, ['id' => 'editor', 'class' => 'form', 'placeholder' => 'Body']) }}
    </div>
    {!! Form::hidden('_method', 'PUT') !!}
    {!! Form::submit('Submit', ['class' => 'btn-submit']) !!}
{!! Form::close() !!}
@endsection
