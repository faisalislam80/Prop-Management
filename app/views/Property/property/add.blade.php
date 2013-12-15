@extends('Layout.default')

@section('content')

    <div id="property">
        <h2>Add a new property</h2>

        {{ Form::open(array('action' => 'Property\Property\PropertyController@postAdd')) }}

        <label for="">Name:</label>
        {{ Form::text('name') }}
        <p class="error">{{ $errors->first('name') }}</p>

        <label for="">Address:</label>
        {{ Form::text('address') }}
        <p class="error">{{ $errors->first('address') }}</p>

        <label for="">City:</label>
        {{ Form::text('city') }}
        <p class="error">{{ $errors->first('city') }}</p>

        <label for="">State:</label>
        {{ Form::text('state') }}
        <p class="error">{{ $errors->first('state') }}</p>

        <label for="">zip:</label>
        {{ Form::text('zip') }}
        <p class="error">{{ $errors->first('zip') }}</p>


        <label for="">phone:</label>
        {{ Form::text('phone') }}
        <p class="error">{{ $errors->first('phone') }}</p>

        <label for="">cell:</label>
        {{ Form::text('cell') }}
        <p class="error">{{ $errors->first('cell') }}</p>

        <label for=""></label>
        {{ Form::submit('Add Property') }}

        {{ Form::close() }}
    </div>

@stop