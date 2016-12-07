@extends('layouts.master')
@section('title')
    Начало
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 SideDate">
                <p>27.09-02.10</p>
            </div>
        </div>
    </div>
    <div  class="container">
        <div class="row">
            <div class="col-sm-1">
                <p id="SuzIstoria">Създаваме<br>история</p>
                <p id="purvoMezdunarodno">Първото международно<br>биенале за стъкло<br>в България</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
             <div class="biennalehome1">
                 {!! HTML::image('img/homepageimg/biennalehome.jpg') !!}
             </div>
             <div class="biennalehome2">
                 {!! HTML::image('img/homepageimg/biennalehome2.jpg') !!}
             </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-11">
                    <h3 class="homepageOchakvaite">Очаквайте</h3>
                </div>
            </div>
        </div>
    </div>

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                {!! HTML::image('img/homepageimg/biennalehome3.jpg') !!}
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>The atmosphere in New York is lorem ipsum.</p>
                </div>
            </div>

            <div class="item">
                {!! HTML::image('img/homepageimg/biennalehome3.jpg') !!}
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago - A night we won't forget.</p>
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