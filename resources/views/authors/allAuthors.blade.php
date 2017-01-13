@extends('layouts.master')
@section('title')
    Автори
@endsection

@section('content')
    
	<table>
		@foreach ($authors as $author)
			<tr>
				<td>{{ $author->name }}</td>
				<td><img src="{{ $author->photo }}" width="50" height="50"></td>
				<td>
					<a href="#" id="visibility-btn" data-id="{{ $author->id }}" data-visibility="{{ $author->isVisible }}" >
						{{ $author->isVisible ? 'Make invisible' : 'Make visible' }}
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

	<a href="{{ URL::to('/admin/authors/add') }}">Нов автор</a>

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
		               		element.text('Make invisible');
		               		element.attr('data-visibility', '1');
		               	} else {
		               		element.text('Make visible');
		               		element.attr('data-visibility', '0');
		               	}
		            },
               error: function (e) {
                  console.log(e);
               }
            });
         }

         $('#visibility-btn').on('click', toggleVisibility);
	</script>
@endsection