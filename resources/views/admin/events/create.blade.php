@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_create-add_new') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::open(array('files' => true, 'route' => config('quickadmin.route').'.events.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group">
    {!! Form::label('start', 'start', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('start', old('start'), array('class'=>'form-control datetimepicker')) !!}
        <p class="help-block">start of the event</p>
    </div>
</div><div class="form-group">
    {!! Form::label('end', 'end', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('end', old('end'), array('class'=>'form-control datetimepicker')) !!}
        <p class="help-block">end of the event</p>
    </div>
</div><div class="form-group">
    {!! Form::label('place', 'place', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('place', old('place'), array('class'=>'form-control')) !!}
        <p class="help-block">place of the event</p>
    </div>
</div><div class="form-group">
    {!! Form::label('artist', 'artist', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('artist', old('artist'), array('class'=>'form-control')) !!}
        <p class="help-block">artist of the event</p>
    </div>
</div><div class="form-group">
    {!! Form::label('entrance', 'entrance', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('entrance', old('entrance'), array('class'=>'form-control')) !!}
        <p class="help-block">entrance of the event</p>
    </div>
</div><div class="form-group">
    {!! Form::label('title', 'title', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('title', old('title'), array('class'=>'form-control')) !!}
        <p class="help-block">title of the event</p>
    </div>
</div><div class="form-group">
    {!! Form::label('description', 'description', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('description', old('description'), array('class'=>'form-control')) !!}
        <p class="help-block">description of the event</p>
    </div>
</div><div class="form-group">
    {!! Form::label('photo', 'photo', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('photo') !!}
        {!! Form::hidden('photo_w', 4096) !!}
        {!! Form::hidden('photo_h', 4096) !!}
        <p class="help-block">photo of the event</p>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-primary')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection