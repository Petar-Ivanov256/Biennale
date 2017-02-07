@extends('layouts.master')
@section('title')
    Admin events
@endsection

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/datetime-picker/picker.min.css') }}">
@endsection

@section('content')
        <form class="form-horizontal"  action="{{ URL::to('/admin/editEvent') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{$event->id}}" />
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <fieldset>
                <div class="form-group">
                    <label for="title" class="col-lg-2 control-label">Заглавие</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Заглавие" value="{{$event->title}}" autofocus>
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="title_en" class="col-lg-2 control-label">Заглавие на английски</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="title_en" name="title_en" placeholder="English title" value="{{$event->title_en}}" >
                        @if ($errors->has('title_en'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title_en') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="place" class="col-lg-2 control-label">Място</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="place" name="place" placeholder="Място" value="{{$event->place}}">
                        @if ($errors->has('place'))
                            <span class="help-block">
                                <strong>{{ $errors->first('place') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="place" class="col-lg-2 control-label">Артист</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="artist" name="artist" placeholder="Артист" value="{{ $event->artist }}">
                        @if ($errors->has('artist'))
                            <span class="help-block">
                                <strong>{{ $errors->first('artist') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="place" class="col-lg-2 control-label">Вход</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="entrance" name="entrance" placeholder="Вход" value="{{ $event->entrance }}">
                        @if ($errors->has('entrance'))
                            <span class="help-block">
                                <strong>{{ $errors->first('entrance') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="start" class="col-lg-2 control-label">Начало</label>
                    <div class="col-lg-6">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type="text" class="form-control" id="start" name="start" value="{{ $event->start }}" >
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        @if ($errors->has('start'))
                            <span class="help-block">
                                <strong>{{ $errors->first('start') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="end" class="col-lg-2 control-label">Край</label>
                    <div class="col-lg-6">
                        <div class='input-group date' id='datetimepicker2'>
                            <input type="text" class="form-control" id="end" name="end" value="{{ $event->end }}" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        @if ($errors->has('end'))
                            <span class="help-block">
                                <strong>{{ $errors->first('end') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                  <label for="select" class="col-lg-2 control-label">Категория</label>
                  <div class="col-lg-6">
                    <select class="form-control" id="select" name="category">
                        @foreach ($categories as $c)
                            @if ($c == $currentCategory)
                                <option value="{{ $c->id }}" selected>{{ $c->title }}</option>
                            @else
                                <option value="{{ $c->id }}">{{ $c->title }}</option>
                            @endif
                        @endforeach
                    </select>
                    @if ($errors->has('category'))
                        <span class="help-block">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Описание</label>
                    <div class="col-lg-6">
                        <textarea class="form-control" name="description" id="textArea">{{$event->description}}</textarea>
                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="textArea_en" class="col-lg-2 control-label">Описание на английски</label>
                    <div class="col-lg-6">
                        <textarea class="form-control" name="description_en" id="textArea_en">{{$event->description_en}}</textarea>
                        @if ($errors->has('description_en'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description_en') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <input id="pic" type="file" name="pic">
                        @if ($errors->has('pic'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pic') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>

        <script src="{{ URL::asset('js/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ URL::asset('js/tinymceSettings.js') }}"></script>
@endsection

@section('foot')
    <script type="text/javascript" src="{{ URL:: asset('/datetime-picker/moment-with-locales.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL:: asset('/datetime-picker/picker.min.js') }}"></script>
    <script>
        $(function() {
            $('#datetimepicker1').datetimepicker({ locale: 'bg' });
            $('#datetimepicker2').datetimepicker({ locale: 'bg' });
        });
    </script>
@stop