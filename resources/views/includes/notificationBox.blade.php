{{-- @if (isset($errors) && count($errors) > 0)
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4>Грешка!</h4>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

@if (session('success'))
	<div class="alert alert-dismissible alert-success">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  {{ session('success') }}
	</div>
@endif