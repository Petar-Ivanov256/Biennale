@extends('layouts.master')
@section('title')
Новини
@endsection

@section('content')
<div class="col-md-8 col-md-offset-2">
    <form method="POST" class="form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <div class="form-group">
            <label for="title" class="col-lg-2 control-label">Заглавие</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="content" name="title" placeholder="Заглавие" value="{{ Request::old('title') }}">
            </div>
        </div>
        <div class="form-group">
            <label for="photo" class="col-lg-2 control-label">Снимка</label>
            <div class="col-md-4">
                <input type='file' class="form-control" id="photo" name="photo" value="{{ Request::old('photo') }}">
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" id="content" name="content">
                {{ Request::old('photo') }}
            </textarea>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">Добави</button>
            </div>
        </div>
    </form>
</div>

<script src="{{ URL::asset('js/tinymce/tinymce.min.js') }}"></script>
<script src="{{ URL::asset('js/tinymceSettings.js') }}"></script>
@endsection