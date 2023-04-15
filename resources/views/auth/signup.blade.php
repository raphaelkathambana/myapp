@extends('layout.app')

@section('content')
@include('layout.back')
    <h1>Sign Up Below</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\RegisterController@store']) !!}
        <div class="flex flex-column gap medium">
            {!! Form::text('name', '', ['class' => 'input', 'placeholder' => 'Name']) !!}
            @error('name')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            {!! Form::email('email', '', ['class' => 'input', 'placeholder' => 'Email']) !!}
            {!! Form::text('username', '', ['class' => 'input', 'placeholder' => 'Username']) !!}
            {!! Form::password('password', ['class' => 'input', 'placeholder' => 'Passowrd']) !!}
            {!! Form::password('password_confirmation', ['class' => 'input', 'placeholder' => 'Repeat Password']) !!}
            <div>
                {!! Form::checkbox('remember', '') !!}
                {!! Form::label('remember', "Remember Me") !!}
            </div>
            {!! Form::submit("Sign Up!", []) !!}
        </div>
    {!! Form::close() !!}
@endsection
