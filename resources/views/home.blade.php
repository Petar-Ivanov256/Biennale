@extends('layouts.master')
@section('title')
    {{ trans('titles.home') }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 move-home-left" id="change">
             <div class=" img-responsive biennalehome1" id="biennale-home-1">
                      @if(LaravelLocalization::getCurrentLocale() == 'en')
                         {!! HTML::image('img/homepageimg/hero-image-en.jpg') !!}
                         @else
                         {!! HTML::image('img/homepageimg/hero-image-bg.jpeg') !!}
                         @endif
             </div>
                <div class="text-under-img">
                   <p class="text-input-p">
                       {{ trans('home.text-p') }}
                   </p>
                </div>
             <div class="img-responsive biennalehome2" id="biennale-home-2">
                 @if(LaravelLocalization::getCurrentLocale() == 'en')
                 {!! HTML::image('img/homepageimg/participate-en.jpg') !!}
                     @else
                     {!! HTML::image('img/homepageimg/participate-bg.jpg') !!}
                     @endif
             </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5 move-ochakvaite" id="change">
                <h3 class="homepageOchakvaite" id="homepageOchakvaite-change"> {{ trans('home.comingSoon') }}</h3>
            </div>
        </div>
    </div>

      <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <!--  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li> -->
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                {!! HTML::image('img/homepageimg/portrait_1.jpg') !!}
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                {!! HTML::image('img/homepageimg/portrait_2.jpg') !!}
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


@endsection