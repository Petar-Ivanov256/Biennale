@extends('layouts.master')
@section('title')
    Автори
@endsection

@section('content')
<div class="container">
	<div  class="col-md-12 wadmin-css" id="admin-back">
		<table class="table table-striped table-hover">
			@foreach ($authors as $author)
				<tr>
					<td><a href="{{ url('/authors/' . $author->id) }}">{{ $author->name }}</a></td>
					<td><img src="{{ $author->photo }}" width="50" height="50"></td>
					<td>
						<a href="#" class="visibility-btn" data-id="{{ $author->id }}" data-visibility="{{ $author->isVisible }}" >
							{{ $author->isVisible ? 'Скрий' : 'Покажи' }}
						</a>
					</td>
					<td><a href="{{ URL::to('/admin/authors/edit/' . $author->id) }}">Редактиране</a></td>
					<td>
						<form method="POST" action="{{ URL::to('/admin/authors/delete/' . $author->id) }}">
							<input type="hidden" id="token" name="_token" value="{{{ csrf_token() }}}" />
							<button type="submit">Изтриване</button>
						</form>
					</td>
				</tr>
			@endforeach
		</table>

		<a class="btn btn-primary" href="{{ URL::to('/admin/authors/add') }}">Нов автор</a>
	</div>
</div>

@endsection

@section('foot')
	<script type="text/javascript">
		let token = '{{ csrf_token() }}';
		let url = '{{ url('/admin/authors/toggleVisibility') }}';

		function toggleVisibility(){
			let element = $(this);
			let authorId = element.attr('data-id');

            $.ajax({
               type: 'PUT',
               url: url + "/" + authorId,
               data: {
               	_token: token
               },
               success: function(data) {
		               	if(element.attr('data-visibility') == 0) {
		               		element.text('Скрий');
		               		element.attr('data-visibility', '1');
		               	} else {
		               		element.text('Покажи');
		               		element.attr('data-visibility', '0');
		               	}
		            },
               error: function (e) {
                  console.log(e);
               }
            });
         }

         $('.visibility-btn').on('click', toggleVisibility);
	</script>
@endsection
