@extends('layouts.master')
@section('title')
    Автори
@endsection

@section('content')
    
	<form class="form-horizontal" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	  <fieldset>
	    <div class="form-group">
	      <label for="name" class="col-lg-2 control-label">Име</label>
	      <div class="col-lg-6">
	        <input type="text" class="form-control" id="name" name="name" value="{{ $author->name }}" autofocus>
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="country" class="col-lg-2 control-label">Държава</label>
	      <div class="col-lg-6">
	        <input type="text" class="form-control" id="country" name="country" value="{{ $author->country }}" >
	      </div>
	    </div>
	    <div class="form-group">
      		<label for="info" class="col-lg-2 control-label">Информация</label>
      		<div class="col-lg-10">
        		<textarea class="form-control" rows="3" id="info" name="info">{{ $author->info }}</textarea>
      		</div>
    	</div>
    	<div class="form-group">
	    	<label for="photo" class="col-lg-2 control-label">Снимка</label>
	    	<input type="file" name="photo" id="photo" value="{{ $author->photo }}">
	    	<img src="{{ $author->photo }}" width="50" height="50">
	    </div>
	    <div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	        <button type="reset" class="btn btn-default">Cancel</button>
	        <button type="submit" class="btn btn-primary">Submit</button>
	      </div>
	    </div>
	  </fieldset>
	</form>
	
@endsection