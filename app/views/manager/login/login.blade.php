@extends('Layout.default')

@section('content')
    <div id="login">
        {{ Form::open(array('action' => 'Manager\ManagerController@postLogin')) }}
            <label>Username:</label>
            {{ Form::text('username') }}
            <label>Password:</label>
            {{ Form::password('password'); }}
            <label></label>
            {{ Form::submit('Login') }}
        {{ Form::close() }}
    </div>
@stop
