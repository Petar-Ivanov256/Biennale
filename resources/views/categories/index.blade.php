@extends('layouts.master')
@section('title')
    Категории
@endsection

@section('content')

<table class="table table-striped table-hover ">
  <tbody>
  	@foreach ($categories as $c)
  		<tr>
	      <td>{{ $c->title }}</td>
	      <td><a href="{{ url('/admin/category/edit') . '/' . $c->id }}" class="btn btn-link">Редактиране</a></td>
	      <td>
	      	<form method="POST" action="{{ url('/admin/category/delete') . '/' . $c->id }}">
	      		{{ csrf_field() }}
	      		<button type="submit" class="btn btn-danger">Изтриване</button>
	      	</form>
	    </tr>
	@endforeach
  </tbody>
</table> 

<a href="{{ url('/admin/category/create') }}" class="btn btn-link">Нова категория</a>

@endsection