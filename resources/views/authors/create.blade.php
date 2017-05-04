@extends('layouts.master')
@section('title')
    Автори
@endsection

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('/multi-select/css/multi-select.css') }}">
@endsection

@section('content')
<div class="container">
	<div  class="col-md-12" style="margin-left: 250px">
		<form class="form-horizontal" method="POST" enctype="multipart/form-data">
		  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		  <fieldset>
		    <div class="form-group">
		      <label for="name" class="col-lg-2 control-label">Име</label>
		      <div class="col-lg-6">
		        <input type="text" class="form-control" id="name" name="name" value="{{ Request::old('name') }}" autofocus>
		        @if ($errors->has('name'))
		            <span class="help-block">
		                <strong>{{ $errors->first('name') }}</strong>
		            </span>
		        @endif
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="name_en" class="col-lg-2 control-label">Име на английски</label>
		      <div class="col-lg-6">
		        <input type="text" class="form-control" id="name_en" name="name_en" value="{{ Request::old('name_en') }}">
		        @if ($errors->has('name_en'))
		            <span class="help-block">
		                <strong>{{ $errors->first('name_en') }}</strong>
		            </span>
		        @endif
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="country" class="col-lg-2 control-label">Държава</label>
		      <div class="col-lg-6">
		        <select class="form-control" id="country" name="country">
		            @foreach ($countries as $country)
		                <option value="{{ $country->id }}" {{ old('country') == $country->id ? "selected" : "" }}>{{ App::getLocale() == 'bg' ? $country->title : $country->title_en }}</option>
		            @endforeach
		        </select>
		        @if ($errors->has('country'))
		            <span class="help-block">
		                <strong>{{ $errors->first('country') }}</strong>
		            </span>
		        @endif
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="gender" class="col-lg-2 control-label">Пол</label>
		      <div class="col-lg-6">
		        <input id="male" type="radio" name="gender" value="0" {{ old('gender') == 0 ? "checked" : "" }}><label for="male">Мъж</label>
		        <input id="female" type="radio" name="gender" value="1" {{ old('gender') == 1 ? "checked" : "" }}><label for="female">Жена</label>
		        @if ($errors->has('gender'))
		            <span class="help-block">
		                <strong>{{ $errors->first('gender') }}</strong>
		            </span>
		        @endif
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="email" class="col-lg-2 control-label">E-mail</label>
		      <div class="col-lg-6">
		        <input type="text" class="form-control" id="email" name="email" value="{{ Request::old('email') }}" >
		        @if ($errors->has('email'))
		            <span class="help-block">
		                <strong>{{ $errors->first('email') }}</strong>
		            </span>
		        @endif
		      </div>
		    </div>
		    <div class="form-group">
		  		<label for="info" class="col-lg-2 control-label">Информация</label>
		  		<div class="col-lg-6">
		    		<textarea class="form-control" rows="3" id="info" name="info">{{ Request::old('info') }}</textarea>
		    		@if ($errors->has('info'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('info') }}</strong>
		                </span>
		            @endif
		  		</div>
			</div>
			<div class="form-group">
		  		<label for="info_en" class="col-lg-2 control-label">Информация на английски</label>
		  		<div class="col-lg-6">
		    		<textarea class="form-control" rows="3" id="info_en" name="info_en">{{ Request::old('info_en') }}</textarea>
		    		@if ($errors->has('info_en'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('info_en') }}</strong>
		                </span>
		            @endif
		  		</div>
			</div>
			<div class="form-group">
		    	<label for="photo" class="col-lg-2 control-label">Снимка</label>
		    	<div class="col-lg-6">
		    		<input type="file" name="photo" id="photo">
			    	@if ($errors->has('photo'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('photo') }}</strong>
		                </span>
		            @endif
		    	</div>
		    </div>
		    <div class="form-group">
		    	<label for="work" class="col-lg-2 control-label">Творби</label>
		    	<div class="col-lg-10">
			        <select multiple id="work" name="works[]" class="form-control">
			        	@foreach ($works as $work)
			        		<option value="{{ $work->id }}">{{ $work->englishTitle }}</option>
			        	@endforeach
			        </select>
			        @if ($errors->has('works'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('works') }}</strong>
		                </span>
		            @endif
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
    </div>
</div>
@endsection

@section('foot')
	<script type="text/javascript" src="{{ asset('multi-select/js/jquery.multi-select.js') }}"></script>
	<script type="text/javascript">$('#work').multiSelect()</script>
@endsection
