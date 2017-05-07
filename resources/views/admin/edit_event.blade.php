@extends('layouts.master')
@section('title')
    Admin events
@endsection

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/datetime-picker/picker.min.css') }}">
@endsection

@section('content')
    <div class="col-md-12" style="margin-left: 250px">
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
                    <label for="title" class="col-lg-2 control-label">Място_en</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="place_en" name="place_en" placeholder="Място_en" value="{{$event->place_en}}" autofocus>
                        @if ($errors->has('place_en'))
                            <span class="help-block">
                                <strong>{{ $errors->first('place_en') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="participants" class="col-lg-2 control-label">Участници</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="participants" name="participants" placeholder="Участници" value="{{ $event->participants }}">
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
                        <input type="text" class="form-control" id="participants_en" name="participants_en" placeholder="Participants" value="{{ $event->participants_en }}">
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
                        <input type="text" class="form-control" id="entrance" name="entrance" placeholder="Вход" value="{{ $event->entrance }}">
                        @if ($errors->has('entrance'))
                            <span class="help-block">
                                <strong>{{ $errors->first('entrance') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="place_en" class="col-lg-2 control-label">Вход_en</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="entrance_en" name="entrance_en" placeholder="Вход_en" value="{{ $event->entrance_en }}">
                        @if ($errors->has('entrance_en'))
                            <span class="help-block">
                                <strong>{{ $errors->first('entrance_en') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-lg-2 control-label">Поредност</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="order_num" name="order_num" placeholder="Поредност" value="{{ $event->order_num }}" autofocus>
                        @if ($errors->has('order_num'))
                            <span class="help-block">
                                <strong>{{ $errors->first('order_num') }}</strong>
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
                    <label for="pic1" class="col-lg-2 control-label">Снимка 1</label>
                    <div class="col-lg-6">
                        <input id="pic1" type="file" name="pic1" class="form-control">
                        @if ($errors->has('pic1'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pic1') }}</strong>
                            </span>
                        @endif
                        @if ($event->photo1)
                          <img src="{{ $event->photo1 }}" max=50 height=50>
                        @else
                          <div class="">Не е въведена снимка 1</div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="pic2" class="col-lg-2 control-label">Снимка 2</label>
                    <div class="col-lg-6">
                        <input id="pic2" type="file" name="pic2" class="form-control">
                        @if ($errors->has('pic2'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pic2') }}</strong>
                            </span>
                        @endif
                        @if ($event->photo2)
                          <img src="{{ $event->photo2 }}" max=50 height=50>
                        @else
                          <div class="">Не е въведена снимка 2</div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="pic3" class="col-lg-2 control-label">Снимка 3</label>
                    <div class="col-lg-6">
                        <input id="pic3" type="file" name="pic3" class="form-control">
                        @if ($errors->has('pic3'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pic3') }}</strong>
                            </span>
                        @endif
                        @if ($event->photo3)
                          <img src="{{ $event->photo3 }}" max=50 height=50>
                        @else
                          <div class="">Не е въведена снимка 3</div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="pic4" class="col-lg-2 control-label">Снимка 4</label>
                    <div class="col-lg-6">
                        <input id="pic4" type="file" name="pic4" class="form-control">
                        @if ($errors->has('pic4'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pic4') }}</strong>
                            </span>
                        @endif
                        @if ($event->photo4)
                          <img src="{{ $event->photo4 }}" max=50 height=50>
                        @else
                          <div class="">Не е въведена снимка 4</div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="pic5" class="col-lg-2 control-label">Снимка 5</label>
                    <div class="col-lg-6">
                        <input id="pic5" type="file" name="pic5" class="form-control">
                        @if ($errors->has('pic5'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pic5') }}</strong>
                            </span>
                        @endif
                        @if ($event->photo5)
                          <img src="{{ $event->photo5 }}" max=50 height=50>
                        @else
                          <div class="">Не е въведена снимка 5</div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="pic6" class="col-lg-2 control-label">Снимка 6</label>
                    <div class="col-lg-6">
                        <input id="pic6" type="file" name="pic6" class="form-control">
                        @if ($errors->has('pic6'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pic6') }}</strong>
                            </span>
                        @endif
                        @if ($event->photo6)
                          <img src="{{ $event->photo6 }}" max=50 height=50>
                        @else
                          <div class="">Не е въведена снимка 6</div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="pic7" class="col-lg-2 control-label">Снимка 7</label>
                    <div class="col-lg-6">
                        <input id="pic7" type="file" name="pic7" class="form-control">
                        @if ($errors->has('pic7'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pic7') }}</strong>
                            </span>
                        @endif
                        @if ($event->photo7)
                          <img src="{{ $event->photo7 }}" max=50 height=50>
                        @else
                          <div class="">Не е въведена снимка 7</div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="pic8" class="col-lg-2 control-label">Снимка 8</label>
                    <div class="col-lg-6">
                        <input id="pic8" type="file" name="pic8" class="form-control">
                        @if ($errors->has('pic8'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pic8') }}</strong>
                            </span>
                        @endif
                        @if ($event->photo8)
                          <img src="{{ $event->photo8 }}" max=50 height=50>
                        @else
                          <div class="">Не е въведена снимка 8</div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="pic9" class="col-lg-2 control-label">Снимка 9</label>
                    <div class="col-lg-6">
                        <input id="pic9" type="file" name="pic9" class="form-control">
                        @if ($errors->has('pic9'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pic9') }}</strong>
                            </span>
                        @endif
                        @if ($event->photo9)
                          <img src="{{ $event->photo9 }}" max=50 height=50>
                        @else
                          <div class="">Не е въведена снимка 9</div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="pic10" class="col-lg-2 control-label">Снимка 10</label>
                    <div class="col-lg-6">
                        <input id="pic10" type="file" name="pic10" class="form-control">
                        @if ($errors->has('pic10'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pic10') }}</strong>
                            </span>
                        @endif
                        @if ($event->photo10)
                          <img src="{{ $event->photo10 }}" max=50 height=50>
                        @else
                          <div class="">Не е въведена снимка 10</div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div id="map" class="col-lg-6 col-lg-offset-2" style="min-height: 500px"></div>
                </div>

                <div class="form-group">
                    <label for="lat" class="col-lg-2 control-label">Географска ширина</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="lat" name="lat" value="{{ $event->latitude }}">
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
                        <input type="text" class="form-control" id="lng" name="lng" value="{{ $event->longitude }}">
                        @if ($errors->has('lng'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lng') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                  <label for="isVisible" class="col-lg-2 control-label">Видимо</label>
                  <div class="col-lg-6">
                    <input id="isVisible" type="checkbox" name="isVisible" {{ $event->isVisible ? "checked" : "" }}>
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
    </div>

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
            let coordinates = { lat: parseFloat($('#lat').val()), lng: parseFloat($('#lng').val()) };
            map = new google.maps.Map(document.getElementById('map'), {
              center: coordinates,
              zoom: 15
            });

            let marker = new google.maps.Marker({
                position: coordinates,
                map: map
            });

            google.maps.event.addListener(map, "click", function(event) {
                let lat = event.latLng.lat();
                let lng = event.latLng.lng();

                marker.setPosition({ lat: lat, lng: lng });

                $('#lat').val(lat);
                $('#lng').val(lng);
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBccFrd4wr6hE1qHkf1JbdYfLuRHSibPQk&callback=initMap"
    async defer></script>
@stop
