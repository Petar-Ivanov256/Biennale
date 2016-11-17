@extends('pages.ApplyForAttendanceForm')
@section('content')

    {!! Form::open(['action' => 'FormsController@applyForAttendanceForm', 'method' => 'post']) !!}
    {!!Form::label('test', 'Test')!!}
    {!!Form::text('test', 'Text here')!!}
    {!!Form::token()!!}
    {!! Form::submit('Send text!', array('class' => 'btn btn-primary'))!!}
    {!! Form::close() !!}


    @if(!empty($data))
        <h1>{{$data}}</h1>
    @endif
@stop