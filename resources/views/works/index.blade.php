@extends('layouts.master')
@section('title')
    Творби
@endsection

@section('content')
<div class="container">
    <div  class="col-md-12" style="margin-left: 250px">
        <table class="table table-striped table-hover">
        	@foreach ($works as $work)
        		<tr>
        			<td>{{ $work->englishTitle }}</td>
        			<td><img src="{{ $work->photo1 }}" width="50" height="50"></td>
        			<td><a href="{{ URL::to('/admin/works/edit/' . $work->id) }}">Редактиране</a></td>
        			<td>
        				<form method="POST" action="{{ URL::to('/admin/works/delete/' . $work->id) }}">
        					<input type="hidden" id="token" name="_token" value="{{{ csrf_token() }}}" />
        					<button class="btn btn-danger" type="submit">Изтриване</button>
        				</form>
        			</td>
        		</tr>
        	@endforeach
        </table>

        <a href="{{ URL::to('/admin/works/add') }}" class="btn btn-primary">Нова творба</a>
    </div>
</div>
@endsection