@extends('layouts.master')
@section('title')
    {{ trans('titles.events') }}
@endsection

@section('content')
     <div class="container" id="top">
        <div class="row">
        <div class="col-md-9 event-left" id="event-back">
            <div class="col-md-2 prgdata">
                <p>Събития</p>
                <p>Период</p>
            </div>
            <div>
                <div>
                <ul class="events-menu">
                    <li><a href="#1">Изложби</a></li>
                    <li><a href="#2">Лекции</a></li>
                    <li><a href="#3" data-toggle="collapse">Творчески работилници</a></li>
                    <li><a href="#4">Конкурси</a></li>
                    <li><a href="#4">Кампании</a></li>
                    <li id="biennale-week">Седмица на биеналето</li>
                </ul>
                </div>
                <div id="3" class="collapse">
                    <ul class="months">
                        <li><a href="#00">Декември (2016)</a></li>
                        <li><a href="#01">Януари</a></li>
                        <li><a href="#02">Февруари</a></li>
                        <li><a href="#03">Март</a></li>
                        <li><a href="#04">Април</a></li>
                        <li><a href="#05">Май</a></li>
                        <li><a href="#06">Юни</a></li>
                        <li><a href="#07">Юли</a></li>
                        <li><a href="#08">Август</a></li>
                        <li><a href="#09">Септември</a></li>
                        <li><a href="#10">Октомври</a></li>
                        <li><a href="#11">Ноември</a></li>
                        <li><a href="#12">Декември</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Izlozbi-->
        <div class="col-md-9 programa" id="event-back">
             <div id="1" class="events-p"><p>Изложби<p></div><br>
                @foreach($events as $event)
                    @if (LaravelLocalization::getCurrentLocale() == 'en')
                        <div class="col-lg-4" onclick="getDetails({{ $event->id }}, '{{LaravelLocalization::getCurrentLocale()}}')">
                            <a href="#details" class="abackcolor">
                                <img src="{{$event->photo}}">
                                {{--{!! HTML::image('img/eventsimg/pic1.jpg') !!}--}}
                                <br>
                                <span class="ptagleft" id="left-aligndate"> {{date('d.m', strtotime($event->start))}}-{{date('d.m', strtotime($event->start))}}</span>
                                <span class="ptagleft" id="right-alignhour">{{date('H:i', strtotime($event->end))}}-{{date('H:i', strtotime($event->end))}}</span>
                                <span class="ptagleft" id="left-aligncity">{{$event->place_en}}</span>
                                <span class="ptagleft" id="right-alignaddress">{{$event->participants_en}}</span>
                            </a>
                            <br>
                            <div class="textunderimg">
                                <h4>{{$event->title_en}}</h4>
                                <p>
                                    {!! substr($event->description_en, 0, 75) . '...' !!}
                                </p>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-4" onclick="getDetails({{ $event->id }}, '{{LaravelLocalization::getCurrentLocale()}}')">
                            <a href="#details" class="abackcolor">
                                <img src="{{$event->photo}}">
                                {{--{!! HTML::image('img/eventsimg/pic1.jpg') !!}--}}
                                <br>
                                <span class="ptagleft" id="left-aligndate"> {{date('d.m', strtotime($event->start))}}-{{date('d.m', strtotime($event->start))}}</span>
                                <span class="ptagleft" id="right-alignhour">{{date('H:i', strtotime($event->end))}}-{{date('H:i', strtotime($event->end))}}</span>
                                <span class="ptagleft" id="left-aligncity">{{$event->place}}</span>
                                <span class="ptagleft" id="right-alignaddress">{{$event->participants}}</span>
                            </a>
                            <br>
                            <div class="textunderimg">
                                <h4>{{$event->title}}</h4>
                                <p>
                                    {!! substr($event->description, 0, 75) . '...' !!}
                                </p>
                            </div>
                        </div>
                    @endif
            @endforeach
        </div>
    </div>
 </div>

<div class="container">
    <div class="row">
        <div class="col-md-5 programadetails" id="details">
            <h2 id="event-category"></h2>
            <img src="" id="details-img">
            <div class="ptagleftprogramdetails">
                <span class="oneprogdet">Дата</span>
                <span class="twoprogdet" id="details-date"></span>
                <span class="oneprogdet">Час</span>
                <span class="twoprogdet" id="details-time"></span>
                <span class="oneprogdet">Място</span>
                {{--<span class="twoprogdet" id="details-location">Галерия Райко Алексиев <a href="{{url('https://www.google.bg/maps/place/Galeria+Rayko+Aleksiev/@42.6940046,23.3264532,17z/data=!3m1!4b1!4m5!3m4!1s0x40aa8573cd8ef9e7:0x65f0adc8c2fca7!8m2!3d42.6940046!4d23.3286419?hl=bg')}}" class="programapdirection">виж картата</a></span>--}}
                <span class="twoprogdet" id="details-location"></span>
                <span class="oneprogdet">Участници</span>
                <span class="twoprogdet" id="details-artist"></span>
                <span class="oneprogdet">Вход</span>
                <span class="twoprogdet" id="details-entrance"></span><br>
            </div>
            <div>
                <p class="progdettxt text-justify" id="event-description">

                </p>
            </div>
            <a href="#top" class="back-to-top"><span class="ptagleftdetailss"></span><span class="ptagleftdetailss">Обратно към всички</span></a>
        </div>
        <section>
            {{-- <div class=" col-md-6 programa" id="change">
                <header>
                    <h2 class="programadet">Други изложби</h2>
                </header>
                <div class="col-md-5">
                    <a href="#" class="abackcolor">
                        {!! HTML::image('img/eventsimg/pic9.jpg') !!}
                        <br>
                        <span class="ptagleftdetails" id="left-aligndate">27.09-29.09</span>
                        <span class="ptagleft"  id="right-alignhour">София</span>
                    </a>
                    <br>
                    <div class="textunderimg">
                        <h4>Querat voluptatem</h4>
                        <p>
                            Duis aute irure dolor in reprehenderit in volup
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <a href="#">
                        {!! HTML::image('img/eventsimg/pic9.jpg') !!}
                        <br>
                        <span class="ptagleftdetails" id="left-aligndate">27.09-29.09</span>
                        <span class="ptagleft"  id="right-alignhour">София</span>
                    </a>
                    <br>
                    <div class="textunderimg">
                        <h4>Querat voluptatem</h4>
                        <p>
                            Duis aute irure dolor in reprehenderit in volup
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <a href="#">
                        {!! HTML::image('img/eventsimg/pic9.jpg') !!}
                        <br>
                        <span class="ptagleftdetails" id="left-aligndate">27.09-29.09</span>
                        <span class="ptagleft"  id="right-alignhour">София</span>
                    </a>
                    <br>
                    <div class="textunderimg">
                        <h4>Querat voluptatem</h4>
                        <p>
                            Duis aute irure dolor in reprehenderit in volup
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <a href="#">
                        {!! HTML::image('img/eventsimg/pic9.jpg') !!}
                        <br>
                        <span class="ptagleftdetails" id="left-aligndate">27.09-29.09</span>
                        <span class="ptagleft"  id="right-alignhour">София</span>
                    </a>
                    <br>
                    <div class="textunderimg">
                        <h4>Querat voluptatem</h4>
                        <p>
                            Duis aute irure dolor in reprehenderit in volup
                        </p>
                    </div>
                </div>
            </div> --}}
        </section>
    </div>
</div>
@endsection

@section('foot')

<script type="text/javascript">

$(document).ready(getDetails(1,'{{LaravelLocalization::getCurrentLocale()}}'));

function getDetails(id, locale) {
    let url = '{{ url('/events/getDetails') }}';
    url += '/' + id;

    if(locale == 'en'){
        $.ajax({
            method: "GET",
            url: url
        }).done(function(event) {
            console.log(event);
            console.log(event.event.start);
            $('#event-category').text(event.category.title_en);
            $('#details-date').text(event.event.start);
            $('#details-time').text(event.event.start + ' - ' + event.event.end);
            $('#details-location').text(event.event.place_en);
            $('#details-artist').text(event.event.participants_en);
            $('#details-entrance').text(event.event.entrance_en);
            $('#details-img').attr('src', event.event.photo);
            $('#event-description').html(event.event.description_en);
        });
    }
    else{
        $.ajax({
            method: "GET",
            url: url
        }).done(function(event) {
            console.log(event);
            console.log(event.event.start);
            $('#event-category').text(event.category.title);
            $('#details-date').text(event.event.start);
            $('#details-time').text(event.event.start + ' - ' + event.event.end);
            $('#details-location').text(event.event.place);
            $('#details-artist').text(event.event.participants);
            $('#details-entrance').text(event.event.entrance);
            $('#details-img').attr('src', event.event.photo);
            $('#event-description').html(event.event.description);
        });
    }
}

</script>

@endsection