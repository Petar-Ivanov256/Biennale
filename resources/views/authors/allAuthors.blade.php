@extends('layouts.master')
@section('title')
    Автори
@endsection

@section('content')
    
	<table>
		@foreach ($authors as $author)
			<tr>
				<td>{{ $author->name }}</td>
				<td><img src="{{ asset('../' . $author->photo) }}" width="50" height="50"></td>
				<td><a href="{{ URL::to('/admin/authors/edit/' . $author->id) }}">Редактиране</a></td>
				<td>
					<form method="POST" action="{{ URL::to('/admin/authors/delete/' . $author->id) }}">
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
						<button type="submit">Изтриване</button>
					</form>
				</td>
			</tr>
		@endforeach
	</table>

	<a href="{{ URL::to('/admin/authors/add') }}">Нов автор</a>

@endsection