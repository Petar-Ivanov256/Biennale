@extends('layouts.master')
@section('title')
    Автори
@endsection

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('/multi-select/css/multi-select.css') }}">
@endsection

@section('content')
    
	<form class="form-horizontal" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	  <fieldset>
	    <div class="form-group">
	      <label for="name" class="col-lg-2 control-label">Име</label>
	      <div class="col-lg-6">
	        <input type="text" class="form-control" id="name" name="name" value="{{ Request::old('name') }}" autofocus>
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="country" class="col-lg-2 control-label">Държава</label>
	      <div class="col-lg-6">
	        <input type="text" class="form-control" id="country" name="country" value="{{ Request::old('country') }}" >
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="email" class="col-lg-2 control-label">E-mail</label>
	      <div class="col-lg-6">
	        <input type="text" class="form-control" id="email" name="email" value="{{ Request::old('email') }}" >
	      </div>
	    </div>
	    <div class="form-group">
      		<label for="info" class="col-lg-2 control-label">Информация</label>
      		<div class="col-lg-6">
        		<textarea class="form-control" rows="3" id="info" name="info">{{ Request::old('info') }}</textarea>
      		</div>
    	</div>
    	<div class="form-group">
      		<label for="info_en" class="col-lg-2 control-label">Информация на английски</label>
      		<div class="col-lg-6">
        		<textarea class="form-control" rows="3" id="info_en" name="info_en">{{ Request::old('info_en') }}</textarea>
      		</div>
    	</div>
    	<div class="form-group">
	    	<label for="photo" class="col-lg-2 control-label">Снимка</label>
	    	<input type="file" name="photo" id="photo">
	    </div>
	    <div class="form-group">
	    	<label for="work" class="col-lg-2 control-label">Творби</label>
	    	<div class="col-lg-10">
		        <select multiple id="work" name="works[]" class="form-control">
		        	@foreach ($works as $work)
		        		<option value="{{ $work->id }}">{{ $work->englishTitle }}</option>
		        	@endforeach
		        </select>
		      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	        <button type="reset" class="btn btn-default">Изчисти</button>
	        <button type="submit" class="btn btn-primary">Добави</button>
	      </div>
	    </div>
	  </fieldset>
	</form>

@endsection

@section('foot')
	<script type="text/javascript" src="{{ asset('multi-select/js/jquery.multi-select.js') }}"></script>
	<script type="text/javascript">$('#work').multiSelect()</script>
@endsection