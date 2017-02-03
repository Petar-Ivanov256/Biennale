@extends('layouts.master')
@section('title')
    Категории
@endsection

@section('content')

<form class="form-horizontal col-md-6" method="POST" action="{{ url('/admin/category/edit') . '/' . $category->id }}">
	<fieldset>
		{{ csrf_field() }}
		<div class="form-group">
	      <label for="title" class="col-lg-2 control-label">Име на категория</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" id="title" name="title" autofocus value="{{ $category->title }}">
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="title-en" class="col-lg-2 control-label">Име на категория на английски</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" id="title-en" name="title_en" value="{{ $category->title_en }}">
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	        <button type="reset" class="btn btn-default">Изчисти</button>
	        <button type="submit" class="btn btn-primary">Редактирай</button>
	      </div>
	    </div>
	</fieldset>
</form>

@endsection