@extends('layouts.master')
@section('title')
    Събития
@endsection

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/datetime-picker/picker.min.css') }}">
@endsection

@section('content')
    <form class="form-horizontal"  action="{{ URL::to('/admin/createEvent') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <fieldset>
            <legend>Ново събитие</legend>
            <div class="form-group">
                <label for="title" class="col-lg-2 control-label">Заглавие</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Заглавие" value="{{ Request::old('title') }}" autofocus>
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
                    <input type="text" class="form-control" id="title_en" name="title_en" placeholder="English title" value="{{ old('title_en') }}">
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
                    <input type="text" class="form-control" id="place" name="place" placeholder="Място" value="{{ Request::old('place') }}">
                    @if ($errors->has('place'))
                        <span class="help-block">
                            <strong>{{ $errors->first('place') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="participants" class="col-lg-2 control-label">Участници</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="participants" name="participants" placeholder="Участници" value="{{ Request::old('participants') }}">
                    @if ($errors->has('participants'))
                        <span class="help-block">
                            <strong>{{ $errors->first('participants') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="participants_en" class="col-lg-2 control-label">Участници на английски</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="participants_en" name="participants_en" placeholder="Participants" value="{{ Request::old('participants_en') }}">
                    @if ($errors->has('participants_en'))
                        <span class="help-block">
                            <strong>{{ $errors->first('participants_en') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="place" class="col-lg-2 control-label">Вход</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="entrance" name="entrance" placeholder="Вход" value="{{ Request::old('entrance') }}">
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
                        <input type="text" class="form-control" id="start" name="start" value="{{ Request::old('start') }}" />
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
                        <input type="text" class="form-control" id="end" name="end" value="{{ Request::old('end') }}" />
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
                        <option value="{{ $c->id }}">{{ $c->title }}</option>
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
                    <textarea class="form-control" name="description" id="textArea">{{ Request::old('description') }}</textarea>
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
                    <textarea class="form-control" name="description_en" id="textArea_en">{{ old('description_en') }}</textarea>
                    @if ($errors->has('description_en'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description_en') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="pic" class="col-lg-2 control-label">Снимка</label>
                <div class="col-lg-6">
                    <input id="pic" type="file" name="pic" class="form-control">
                    @if ($errors->has('pic'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pic') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div id="map" class="col-lg-6 col-lg-offset-2" style="min-height: 500px"></div>
            </div>

            <div class="form-group">
                <label for="lat" class="col-lg-2 control-label">Географска ширина</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="lat" name="lat" value="{{ Request::old('lat') }}">
                    @if ($errors->has('lat'))
                        <span class="help-block">
                            <strong>{{ $errors->first('lat') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="lng" class="col-lg-2 control-label">Географска дължина</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="lng" name="lng" value="{{ Request::old('lng') }}">
                    @if ($errors->has('lng'))
                        <span class="help-block">
                            <strong>{{ $errors->first('lng') }}</strong>
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
    <script>
        let map;
        function initMap() {
            let coordinatesSofia = {lat: 42.695, lng: 23.322};
            map = new google.maps.Map(document.getElementById('map'), {
              center: coordinatesSofia,
              zoom: 12
            });

            let marker = new google.maps.Marker({
                position: coordinatesSofia,
                map: null // initially is null so that the marker isn't initially visible
            });

            google.maps.event.addListener(map, "click", function(event) {
                let lat = event.latLng.lat();
                let lng = event.latLng.lng();
                
                marker.setPosition({ lat: lat, lng: lng });
                marker.setMap(map);

                $('#lat').val(lat);
                $('#lng').val(lng);
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBccFrd4wr6hE1qHkf1JbdYfLuRHSibPQk&callback=initMap"
    async defer></script>
@stop