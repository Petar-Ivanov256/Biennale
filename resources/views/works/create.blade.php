@extends('layouts.master')
@section('title')
    Нова творба
@endsection

@section('content')

<form class="form-horizontal" method="POST" action="{{ url('/admin/works/add') }}" enctype="multipart/form-data">
  <fieldset>
  	{{ csrf_field() }}
    <div class="form-group">
      <label for="title" class="col-lg-2 control-label">Заглавие*</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="title" name="title" value="{{ Request::old('title') }}" autofocus>
      </div>
    </div>
    <div class="form-group">
      <label for="englishTitle" class="col-lg-2 control-label">Заглавие на английски*</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="englishTitle" name="englishTitle" value="{{ Request::old('englishTitle') }}">
      </div>
    </div>
    <div class="form-group">
        <label for="" class="col-lg-2 control-label">Техника*</label>
        <ul class="columns-application-from">

            @foreach($techniques as $technique)

                <li class="app-form-technique">
                  <input type="checkbox" name="technique[]" class="rad" id="button-{{ $technique->id }}" value="{{$technique->id}}" />
                  <label for="button-{{ $technique->id }}">{{$technique->name}}</label>
                </li>

            @endforeach

        </ul>
    </div>
    <div class="form-group">
      <label for="dimensions" class="col-lg-2 control-label">Размери*</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="dimensions" name="dimensions" placeholder="в/ш/д" value="{{ Request::old('dimensions') }}">
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Насоки за поставяне*</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea" name="installationGuide">{{ Request::old('installationGuide') }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="year" class="col-lg-2 control-label">Година на създаване*</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="year" name="year" value="{{ Request::old('year') }}">
      </div>
    </div>
    <div class="form-group">
      <label for="synopsis" class="col-lg-2 control-label">Синопсис*</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="synopsis" name="synopsis" value="{{ Request::old('synopsis') }}">
      </div>
    </div>
    <div class="form-group">
      <label for="synopsis_en" class="col-lg-2 control-label">Синопсис на английски*</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="synopsis_en" name="synopsis_en" value="{{ Request::old('synopsis_en') }}">
      </div>
    </div>
    <div class="form-group">
      <label for="photo1" class="col-lg-2 control-label">Снимка 1*</label>
      <div class="col-lg-10">
        <input type="file" class="form-control" id="photo1" name="photo1" value="{{ Request::old('photo1') }}">
      </div>
    </div>
    <div class="form-group">
      <label for="photo2" class="col-lg-2 control-label">Снимка 2*</label>
      <div class="col-lg-10">
        <input type="file" class="form-control" id="photo2" name="photo2" value="{{ Request::old('photo2') }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Изчисти</button>
        <button type="submit" class="btn btn-primary">Добави</button>
      </div>
    </div>
  </fieldset>
</form>

@endsection