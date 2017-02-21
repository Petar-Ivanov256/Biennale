@extends('layouts.master')
@section('title')
    {{ trans('titles.events') }}
@endsection

@section('head')

<link rel="stylesheet" type="text/css" href="{{ asset('/photoswipe/css/photoswipe.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/photoswipe/css/default-skin.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/photoswipe/css/style.css') }}">

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
                    <li><a href="#1">{{ trans('events.events_menu_exhibitions') }}</a></li>
                    <li><a href="#2">{{ trans('events.events_menu_lectures') }}</a></li>
                    <li><a href="#3" data-toggle="collapse">{{ trans('events.events_menu_workshops') }}</a></li>
                    <li><a href="#4">{{ trans('events.events_menu_competitions') }}</a></li>
                    <li><a href="#4">{{ trans('events.events_menu_campaigns') }}</a></li>
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
        <div class="col-md-9 programa" id="event-back">
             <div id="1" class="events-p"><p>{{ trans('events.events_menu_exhibitions') }}<p></div><br>
                @foreach($events as $event)
                    @if (LaravelLocalization::getCurrentLocale() == 'en')
                        <div class="col-md-5" onclick="getDetails({{ $event->id }}, '{{LaravelLocalization::getCurrentLocale()}}')">
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
                        <div class="col-md-5" onclick="getDetails({{ $event->id }}, '{{LaravelLocalization::getCurrentLocale()}}')">
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

{{-- Magic gallery --}}
{{-- <div>
    <h2>First gallery:</h2>

  <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">

    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
      <a href="https://farm3.staticflickr.com/2567/5697107145_a4c2eaa0cd_o.jpg" itemprop="contentUrl" data-size="1024x1024">
          <img src="https://farm3.staticflickr.com/2567/5697107145_3c27ff3cd1_m.jpg" itemprop="thumbnail" alt="Image description" />
      </a>
      <figcaption itemprop="caption description">Image caption  1</figcaption>
                                          
    </figure>

    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
      <a href="https://farm2.staticflickr.com/1043/5186867718_06b2e9e551_b.jpg" itemprop="contentUrl" data-size="964x1024">
          <img src="https://farm2.staticflickr.com/1043/5186867718_06b2e9e551_m.jpg" itemprop="thumbnail" alt="Image description" />
      </a>
      <figcaption itemprop="caption description">Image caption 2</figcaption>
    </figure>

    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
      <a href="https://farm7.staticflickr.com/6175/6176698785_7dee72237e_b.jpg" itemprop="contentUrl" data-size="1024x683">
          <img src="https://farm7.staticflickr.com/6175/6176698785_7dee72237e_m.jpg" itemprop="thumbnail" alt="Image description" />
      </a>
      <figcaption itemprop="caption description">Image caption 3</figcaption>
    </figure>

    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
      <a href="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_b.jpg" itemprop="contentUrl" data-size="1024x768">
          <img src="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_m.jpg" itemprop="thumbnail" alt="Image description" />
      </a>
      <figcaption itemprop="caption description">Image caption 4</figcaption>
    </figure>


  </div>

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    Slides wrapper with overflow:hidden.
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

          </div>

        </div>

</div>

</div> --}}

<script type="text/javascript" src="{{ asset('/photoswipe/js/photoswipe.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/photoswipe/js/photoswipe-ui-default.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/photoswipe/js/index.js') }}"></script>

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