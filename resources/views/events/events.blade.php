@extends('layouts.master')
@section('title')
    {{ trans('titles.events') }}
@endsection

@section('head')

<link rel="stylesheet" type="text/css" href="{{ asset('/css/magnific-popup.css') }}">

@endsection

@section('content')
     <div class="container" id="top">
        <div class="row">
        <div class="col-md-9 event-left" id="event-back">
            <div class="col-md-2 prgdata">
                <p>{{ trans('events.event_title') }}</p>
                <p>{{ trans('events.period') }}</p>
            </div>
            <div>
                <div>
                <ul class="events-menu">
                    <li><a  href="#" onclick="getAllCat()">{{ trans('events.all') }}</a></li>
                    <li><a  href="#" onclick="getCategory('Exhibition', 'Изложби')">{{ trans('events.events_menu_exhibitions') }}</a></li>
                    <li><a  href="#" onclick="getCategory('Lecture','Лекции')">{{ trans('events.events_menu_lectures') }}</a></li>
                    <li><a  href="#" onclick="getCategory('Workshop','Творчески работилници')" data-toggle="collapse">{{ trans('events.events_menu_workshops') }}</a></li>
                    <li><a  href="#" onclick="getCategory('Contest','Конкурси')">{{ trans('events.events_menu_competitions') }}</a></li>
                    <li><a  href="#" onclick="getCategory('Campaign','Кампании')">{{ trans('events.events_menu_campaigns') }}</a></li>
                    <li id="biennale-week">{{ trans('events.events_menu_biennale_week') }}</li>
                </ul>
                </div>
                <div id="3" class="collapse">
                    <ul class="months">
                        <li><a href="#00">{{ trans('events.months_Dec_2016') }}</a></li>
                        <li><a href="#01">{{ trans('events.months_Jan') }}</a></li>
                        <li><a href="#02">{{ trans('events.months_Feb') }}</a></li>
                        <li><a href="#03">{{ trans('events.months_Mar') }}</a></li>
                        <li><a href="#04">{{ trans('events.months_Apr') }}</a></li>
                        <li><a href="#05">{{ trans('events.months_May') }}</a></li>
                        <li><a href="#06">{{ trans('events.months_Jun') }}</a></li>
                        <li><a href="#07">{{ trans('events.months_Jul') }}</a></li>
                        <li><a href="#08">{{ trans('events.months_Aug') }}</a></li>
                        <li><a href="#09">{{ trans('events.months_Sep') }}</a></li>
                        <li><a href="#10">{{ trans('events.months_Oct') }}</a></li>
                        <li><a href="#11">{{ trans('events.months_Nov') }}</a></li>
                        <li><a href="#12">{{ trans('events.months_Dec') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Izlozbi-->
        <div class="col-md-11 programa" id="event-back">
             <div class="events-p"><p id="show_cat" >{{ trans('events.all') }}<p></div><br>
            <div class="filter-events">
                @foreach($events as $event)
                    @if (LaravelLocalization::getCurrentLocale() == 'en')
                        <div class="col-md-4 {{$event->category->title_en}} all" onclick="getDetails({{ $event->id }}, '{{LaravelLocalization::getCurrentLocale()}}')">
                            <div style="display: none" class="event-id">{{$event->id}}</div>
                            <a href="#details" class="abackcolor">
                                <img src="{{$event->photo1}}">
                                {{--{!! HTML::image('img/eventsimg/pic1.jpg') !!}--}}
                                <br>
                                <span class="ptagleft" id="left-aligndate"> {{date('d.m', strtotime($event->start))}}-{{date('d.m', strtotime($event->end))}}</span>
                                <span class="ptagleft" id="right-alignhour">{{date('H:i', strtotime($event->start))}}-{{date('H:i', strtotime($event->end))}}</span>
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
                        <div class="col-md-4 {{$event->category->title_en}} all" onclick="getDetails({{ $event->id }}, '{{LaravelLocalization::getCurrentLocale()}}')">
                            <div style="display: none" class="event-id">{{$event->id}}</div>
                            <a href="#details" class="abackcolor">
                                <img src="{{$event->photo1}}">
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
 </div>

<div class="container">
    <div class="row">
        <div class="col-md-5 programadetails" id="details">
            <h2 id="event-category"></h2>
            {{--<img src="" id="details-img">--}}
            <div class="gallery-container event_program_details" id="gallery-container">
                <a class="gallery" id="img-ref" href="">
                    <img src="" id="details-img">
                </a>
                <div id="inner-gallery"></div>
            </div>
            <div class="ptagleftprogramdetails">
                <span class="oneprogdet">{{ trans('events.date') }}</span>
                <span class="twoprogdet" id="details-date"></span>
                <span class="oneprogdet">{{ trans('events.hour') }}</span>
                <span class="twoprogdet" id="details-time"></span>
                <span class="oneprogdet">{{ trans('events.location') }}</span>
                {{--<span class="twoprogdet" id="details-location">Галерия Райко Алексиев <a href="{{url('https://www.google.bg/maps/place/Galeria+Rayko+Aleksiev/@42.6940046,23.3264532,17z/data=!3m1!4b1!4m5!3m4!1s0x40aa8573cd8ef9e7:0x65f0adc8c2fca7!8m2!3d42.6940046!4d23.3286419?hl=bg')}}" class="programapdirection">виж картата</a></span>--}}
                <span class="twoprogdet" id="details-location"></span>
                <span class="oneprogdet">{{ trans('events.participants') }}</span>
                <span class="twoprogdet" id="details-artist"></span>
                <span class="oneprogdet">{{ trans('events.entrance') }}</span>
                <span class="twoprogdet" id="details-entrance"></span><br>
            </div>
            <div>
                <p class="progdettxt text-justify" id="event-description">

                </p>
            </div>
            <a href="#top" class="back-to-top"><span class="ptagleftdetailss"></span><span class="ptagleftdetailss">{{ trans('events.back_btn') }}</span></a>
        </div>
    </div>
</div>


@endsection

@section('foot')

<script src="{{ URL::asset('js/custom_js/events.js') }}"></script>
<script type="text/javascript">
    function getCategory(category, category_bg) {
        let element = '.'+category;
        if('{{LaravelLocalization::getCurrentLocale()}}' == 'en'){
            $('#show_cat').text(category);
        }else{
            $('#show_cat').text(category_bg);
        }

        $('.all').show()
        if($('.filter-events > :not('+element+')').is(":visible")) {
            $('.filter-events > :not(' + element + ')').hide()
        }
    }

    function getAllCat() {
        if('{{LaravelLocalization::getCurrentLocale()}}' == 'en'){
            $('#show_cat').text('All');
        }else{
            $('#show_cat').text('Всички');
        }
        $('.all').show()
    }
</script>    
<script type="text/javascript">
    $(document).ready(getDetails($('.event-id').first().text(),'{{LaravelLocalization::getCurrentLocale()}}'));
    function getDetails(id, locale) {
        let url = '{{ url('/events/getDetails') }}';
        getDetailsInner(id,locale,url);
    }
</script>

<script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript">

    $('.gallery-container').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            closeBtnInside: true,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
            verticalFit: true,
            },
            gallery: {
                enabled:true
            },
            zoom: {
                enabled: true, // By default it's false, so don't forget to enable it
                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function
                // The "opener" function should return the element from which popup will be zoomed in
                // and to which popup will be scaled down
                // By defailt it looks for an image tag:
                opener: function(openerElement) {
                    // openerElement is the element on which popup was initialized, in this case its <a> tag
                    // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }

        });
    });
</script>

@endsection