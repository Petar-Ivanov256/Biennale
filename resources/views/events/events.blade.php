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
                    <li><a onclick="getAllCat()">{{ trans('events.all') }}</a></li>
                    <li><a onclick="getCategory('Exhibition')">{{ trans('events.events_menu_exhibitions') }}</a></li>
                    <li><a onclick="getCategory('Lecture')">{{ trans('events.events_menu_lectures') }}</a></li>
                    <li><a onclick="getCategory('Workshop')" data-toggle="collapse">{{ trans('events.events_menu_workshops') }}</a></li>
                    <li><a onclick="getCategory('Contest')">{{ trans('events.events_menu_competitions') }}</a></li>
                    <li><a onclick="getCategory('Campaign')">{{ trans('events.events_menu_campaigns') }}</a></li>
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
             <div id="show_cat" class="events-p"><p>{{ trans('events.events_menu_exhibitions') }}<p></div><br>
            <div class="filter-events">
                @foreach($events as $event)
                    @if (LaravelLocalization::getCurrentLocale() == 'en')
                        <div class="col-md-4 {{$event->category->title_en}} all" onclick="getDetails({{ $event->id }}, '{{LaravelLocalization::getCurrentLocale()}}')">
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
            <div class="gallery-container" id="gallery-container">
                <a class="gallery" id="img-ref" href="">
                    <img src="" id="details-img">
                </a>
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


<script type="text/javascript">
    function getCategory(element) {
        element = '.'+element;
        $('.all').show()
        if($('.filter-events > :not('+element+')').is(":visible")) {
            $('.filter-events > :not(' + element + ')').hide()
        }
    }

    function getAllCat() {
        $('.all').show()
    }
</script>    
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
            $('#details-img').attr('src', event.event.photo1);
            $('#img-ref').attr('href', event.event.photo1);
            if(event.event.photo2 != null){
                if (!$('#img2').length){
                    $('#gallery-container').append('<a class="gallery" id="photo2" href=""><img class="gal-img" id="img2" src=""/></a>');
                    $('#photo2').attr('href', event.event.photo2);
                    $('#img2').attr('src', event.event.photo2);
                }
            }
            if(event.event.photo3 != null){
                if (!$('#img3').length) {
                    $('#gallery-container').append('<a class="gallery" id="photo3" href=""><img class="gal-img" id="img3" src=""/></a>');
                    $('#photo3').attr('href', event.event.photo3);
                    $('#img3').attr('src', event.event.photo3);
                }
            }
            if(event.event.photo4 != null){
                if (!$('#img4').length) {
                    $('#gallery-container').append('<a class="gallery" id="photo4" href=""><img class="gal-img" id="img4" src=""/></a>');
                    $('#photo4').attr('href', event.event.photo4);
                    $('#img4').attr('src', event.event.photo4);
                }
            }
            if(event.event.photo5 != null){
                if (!$('#img5').length) {
                    $('#gallery-container').append('<a class="gallery" id="photo5" href=""><img class="gal-img" id="img5" src=""/></a>');
                    $('#photo5').attr('href', event.event.photo5);
                    $('#img5').attr('src', event.event.photo5);
                }
            }
            if(event.event.photo6 != null){
                if (!$('#img6').length) {
                    $('#gallery-container').append('<a class="gallery" id="photo6" href=""><img class="gal-img" id="img6" src=""/></a>');
                    $('#photo6').attr('href', event.event.photo6);
                    $('#img6').attr('src', event.event.photo6);
                }
            }
            if(event.event.photo7 != null){
                if (!$('#img7').length) {
                    $('#gallery-container').append('<a class="gallery" id="photo7" href=""><img class="gal-img" id="img7" src=""/></a>');
                    $('#photo7').attr('href', event.event.photo7);
                    $('#img7').attr('src', event.event.photo7);
                }
            }
            if(event.event.photo8 != null){
                if (!$('#img8').length) {
                    $('#gallery-container').append('<a class="gallery" id="photo8" href=""><img class="gal-img" id="img8" src=""/></a>');
                    $('#photo8').attr('href', event.event.photo8);
                    $('#img8').attr('src', event.event.photo8);
                }
            }
            if(event.event.photo9 != null){
                if (!$('#img9').length) {
                    $('#gallery-container').append('<a class="gallery" id="photo9" href=""><img class="gal-img" id="img9" src=""/></a>');
                    $('#photo9').attr('href', event.event.photo9);
                    $('#img9').attr('src', event.event.photo9);
                }
            }
            if(event.event.photo10 != null){
                if (!$('#img10').length) {
                    $('#gallery-container').append('<a class="gallery" id="photo10" href=""><img class="gal-img" id="img10" src=""/></a>');
                    $('#photo10').attr('href', event.event.photo10);
                    $('#img10').attr('src', event.event.photo10);
                }
            }
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
            $('#details-img').attr('src', event.event.photo1);
            $('#img-ref').attr('href', event.event.photo1);
            if(event.event.photo2 != null){
                if (!$('#img2').length){
                    $('#gallery-container').append('<a class="gallery" id="photo2" href=""><img class="gal-img" id="img2" src=""/></a>');
                    $('#photo2').attr('href', event.event.photo2);
                    $('#img2').attr('src', event.event.photo2);
                }
            }
            if(event.event.photo3 != null){
                if (!$('#img3').length) {
                    $('#gallery-container').append('<a class="gallery" id="photo3" href=""><img class="gal-img" id="img3" src=""/></a>');
                    $('#photo3').attr('href', event.event.photo3);
                    $('#img3').attr('src', event.event.photo3);
                }
            }
            if(event.event.photo4 != null){
                if (!$('#img4').length) {
                    $('#gallery-container').append('<a class="gallery" id="photo4" href=""><img class="gal-img" id="img4" src=""/></a>');
                    $('#photo4').attr('href', event.event.photo4);
                    $('#img4').attr('src', event.event.photo4);
                }
            }
            if(event.event.photo5 != null){
                if (!$('#img5').length) {
                    $('#gallery-container').append('<a class="gallery" id="photo5" href=""><img class="gal-img" id="img5" src=""/></a>');
                    $('#photo5').attr('href', event.event.photo5);
                    $('#img5').attr('src', event.event.photo5);
                }
            }
            if(event.event.photo6 != null){
                if (!$('#img6').length) {
                    $('#gallery-container').append('<a class="gallery" id="photo6" href=""><img class="gal-img" id="img6" src=""/></a>');
                    $('#photo6').attr('href', event.event.photo6);
                    $('#img6').attr('src', event.event.photo6);
                }
            }
            if(event.event.photo7 != null){
                if (!$('#img7').length) {
                    $('#gallery-container').append('<a class="gallery" id="photo7" href=""><img class="gal-img" id="img7" src=""/></a>');
                    $('#photo7').attr('href', event.event.photo7);
                    $('#img7').attr('src', event.event.photo7);
                }
            }
            if(event.event.photo8 != null){
                if (!$('#img8').length) {
                    $('#gallery-container').append('<a class="gallery" id="photo8" href=""><img class="gal-img" id="img8" src=""/></a>');
                    $('#photo8').attr('href', event.event.photo8);
                    $('#img8').attr('src', event.event.photo8);
                }
            }
            if(event.event.photo9 != null){
                if (!$('#img9').length) {
                    $('#gallery-container').append('<a class="gallery" id="photo9" href=""><img class="gal-img" id="img9" src=""/></a>');
                    $('#photo9').attr('href', event.event.photo9);
                    $('#img9').attr('src', event.event.photo9);
                }
            }
            if(event.event.photo10 != null){
                if (!$('#img10').length) {
                    $('#gallery-container').append('<a class="gallery" id="photo10" href=""><img class="gal-img" id="img10" src=""/></a>');
                    $('#photo10').attr('href', event.event.photo10);
                    $('#img10').attr('src', event.event.photo10);
                }
            }
            $('#event-description').html(event.event.description);
        });
    }
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
            }
        });
    });
</script>

@endsection