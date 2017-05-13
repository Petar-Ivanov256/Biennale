@extends('layouts.master')
@section('title')
    Редактиране на творба
@endsection

@section('content')
<div class="container">
    <div  class="col-md-12 wadmin-css" id="admin-back">
        <form class="form-horizontal" method="POST" action="{{ url('/admin/works/edit/' . $work->id) }}" enctype="multipart/form-data">
          <fieldset>
          	{{ csrf_field() }}
            <div class="form-group">
              <label for="title" class="col-lg-2 control-label">Заглавие*</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="title" name="title" value="{{ $work->title }}" autofocus>
                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="englishTitle" class="col-lg-2 control-label">Заглавие на английски*</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="englishTitle" name="englishTitle" value="{{ $work->englishTitle }}">
                @if ($errors->has('englishTitle'))
                    <span class="help-block">
                        <strong>{{ $errors->first('englishTitle') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group">
                <label for="" class="col-lg-2 control-label">Техника*</label>
                <div class="col-lg-10">
                  <ul class="columns-application-from">

                      @foreach($techniques as $technique)

                          <li class="app-form-technique">
                            <input type="checkbox" name="technique[]" class="rad" id="button-{{ $technique->id }}" value="{{$technique->id}}"
                            {{ $work->techniques()->find($technique->id) ? "checked" : "" }} />
                            <label for="button-{{ $technique->id }}">{{$technique->name}}</label>
                          </li>

                      @endforeach

                  </ul>
                  @if ($errors->has('technique'))
                      <span class="help-block">
                          <strong>{{ $errors->first('technique') }}</strong>
                      </span>
                  @endif
                </div>
            </div>
            <div class="form-group">
              <label for="dimensions" class="col-lg-2 control-label">Размери*</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="dimensions" name="dimensions" placeholder="в/ш/д" value="{{ $work->dimensions }}">
                @if ($errors->has('dimensions'))
                    <span class="help-block">
                        <strong>{{ $errors->first('dimensions') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="textArea" class="col-lg-2 control-label">Насоки за поставяне*</label>
              <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="textArea" name="installationGuide">{{ $work->installationGuide }}</textarea>
                @if ($errors->has('installationGuide'))
                    <span class="help-block">
                        <strong>{{ $errors->first('installationGuide') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="year" class="col-lg-2 control-label">Година на създаване*</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="year" name="year" value="{{ $work->year }}">
                @if ($errors->has('year'))
                    <span class="help-block">
                        <strong>{{ $errors->first('year') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="synopsis" class="col-lg-2 control-label">Синопсис*</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="synopsis" name="synopsis" value="{{ $work->synopsis }}">
                @if ($errors->has('synopsis'))
                    <span class="help-block">
                        <strong>{{ $errors->first('synopsis') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="synopsis_en" class="col-lg-2 control-label">Синопсис на английски*</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="synopsis_en" name="synopsis_en" value="{{ $work->synopsis_en }}">
                @if ($errors->has('synopsis_en'))
                    <span class="help-block">
                        <strong>{{ $errors->first('synopsis_en') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="photo1" class="col-lg-2 control-label">Снимка 1*</label>
              <div class="col-lg-10">
                <img src="{{ $work->photo1 }}" width="50" height="50">
                <input type="file" class="form-control" id="photo1" name="photo1">
                @if ($errors->has('photo1'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo1') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="photo2" class="col-lg-2 control-label">Снимка 2*</label>
              <div class="col-lg-10">
                <img src="{{ $work->photo2 }}" width="50" height="50">
                <input type="file" class="form-control" id="photo2" name="photo2">
                @if ($errors->has('photo2'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo2') }}</strong>
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