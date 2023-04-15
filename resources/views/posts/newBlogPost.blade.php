@extends('layout.app')

@section('content')
<h1>Create New Blog</h1>
{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store']) !!}
    <div>
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', '', ['class' => 'form', 'placeholder' => 'Title']) }}
    </div>
    <div>
        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body', '', ['id' => 'editor', 'class' => 'form', 'placeholder' => 'Body']) }}
    </div>
    <div class="flex flex-jc-a">
        {!! Form::submit('Submit', ['class' => 'btn-submit']) !!}
        @include('layout.back')
    </div>
{!! Form::close() !!}
@endsection
