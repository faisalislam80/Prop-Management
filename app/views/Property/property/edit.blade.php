@extends('Layout.default')

@section('content')

    <div id="property">
        <h2>Edit property {{ $property->name }}</h2>
        <p class="success">

        </p>
        {{ Form::open(array('action' => 'Property\Property\PropertyController@putUpdate','method'=>'PUT')) }}

        {{ Form::hidden('id',$property->id) }}

        <label for="">Name:</label>
        {{ Form::text('name',$property->name) }}
        <p class="error">{{ $errors->first('name') }}</p>

        <label for="">Address:</label>
        {{ Form::text('address',$property->address) }}
        <p class="error">{{ $errors->first('address') }}</p>

        <label for="">City:</label>
        {{ Form::text('city',$property->city) }}
        <p class="error">{{ $errors->first('city') }}</p>

        <label for="">State:</label>
        {{ Form::text('state',$property->state) }}
        <p class="error">{{ $errors->first('state') }}</p>

        <label for="">zip:</label>
        {{ Form::text('zip',$property->zip) }}
        <p class="error">{{ $errors->first('zip') }}</p>


        <label for="">phone:</label>
        {{ Form::text('phone',$property->phone) }}
        <p class="error">{{ $errors->first('phone') }}</p>

        <label for="">cell:</label>
        {{ Form::text('cell',$property->cell) }}
        <p class="error">{{ $errors->first('cell') }}</p>

        <label for=""></label>
        {{ Form::submit('Edit Property') }}

        {{ Form::close() }}
    </div>

@stop
