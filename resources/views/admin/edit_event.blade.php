@extends('layouts.master')
@section('title')
    Admin events
@endsection

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/datetime-picker/picker.min.css') }}">
@endsection

@section('content')
        <form class="form-horizontal"  action="{{ URL::to('/admin/editEvent') }}" method="POST">
            <input type="hidden" name="id" value="{{$event->id}}" />
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <fieldset>
                <div class="form-group">
                    <label for="title" class="col-lg-2 control-label">Заглавие</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Заглавие" value="{{$event->title}}" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="place" class="col-lg-2 control-label">Място</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="place" name="place" placeholder="Място" value="{{$event->place}}" autofocus>
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
                    </div>
                </div>
                <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Описание</label>
                    <div class="col-lg-6">
                        <textarea class="form-control" name="description" id="textArea">{{$event->description}}</textarea>
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