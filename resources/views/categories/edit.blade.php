@extends('layouts.master')
@section('title')
    Категории
@endsection

@section('content')
<div class="container">
	<div  class="col-md-12 admin-css" id="admin-back">
		<form class="form-horizontal col-md-6" method="POST" action="{{ url('/admin/category/edit') . '/' . $category->id }}">
			<fieldset>
				{{ csrf_field() }}
				<div class="form-group">
			      <label for="title" class="col-lg-2 control-label">Име на категория</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="title" name="title" autofocus value="{{ $category->title }}">
			        @if ($errors->has('title'))
					    <span class="help-block">
					        <strong>{{ $errors->first('title') }}</strong>
					    </span>
					@endif
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="title-en" class="col-lg-2 control-label">Име на категория на английски</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="title-en" name="title_en" value="{{ $category->title_en }}">
			        @if ($errors->has('title_en'))
					    <span class="help-block">
					        <strong>{{ $errors->first('title_en') }}</strong>
					    </span>
					@endif
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
	</div>
</div>
@endsection