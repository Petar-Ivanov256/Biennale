@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($events, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.events.update', $events->id))) !!}

<div class="form-group">
    {!! Form::label('start', 'start', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('start', old('start',$events->start), array('class'=>'form-control datetimepicker')) !!}
        <p class="help-block">start of the event</p>
    </div>
</div><div class="form-group">
    {!! Form::label('end', 'end', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('end', old('end',$events->end), array('class'=>'form-control datetimepicker')) !!}
        <p class="help-block">end of the event</p>
    </div>
</div><div class="form-group">
    {!! Form::label('place', 'place', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('place', old('place',$events->place), array('class'=>'form-control')) !!}
        <p class="help-block">place of the event</p>
    </div>
</div><div class="form-group">
    {!! Form::label('artist', 'artist', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('artist', old('artist',$events->artist), array('class'=>'form-control')) !!}
        <p class="help-block">artist of the event</p>
    </div>
</div><div class="form-group">
    {!! Form::label('entrance', 'entrance', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('entrance', old('entrance',$events->entrance), array('class'=>'form-control')) !!}
        <p class="help-block">entrance of the event</p>
    </div>
</div><div class="form-group">
    {!! Form::label('title', 'title', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('title', old('title',$events->title), array('class'=>'form-control')) !!}
        <p class="help-block">title of the event</p>
    </div>
</div><div class="form-group">
    {!! Form::label('description', 'description', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('description', old('description',$events->description), array('class'=>'form-control')) !!}
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
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.events.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection