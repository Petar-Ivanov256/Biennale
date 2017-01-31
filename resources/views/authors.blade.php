@extends('layouts.master')
@section('title')
    Автори
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 SideDate">
                <p>27.09-02.10</p>
            </div>
        </div>
    </div>
    <div  class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-1">
                <p id="SuzIstoria">Създаваме история</p>
                <p id="purvoMezdunarodno">Първото международно<br>биенале за стъкло<br>в България</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 authors-move" id="return-authors">
                <div class="col-md-4 col-lg-4 contestants">
                    <h2 class="title-Authors">Автори <span class="span-authors-data">2017</span></h2>
                    <hr>
                    <ul class="authors-people" id="space-author-li">
                        <li><a href="#1" data-toggle="collapse">Alex Smith<br><span class="country-authors">Великобритания</span></a></li>
                        <li><a>Ana Markowska<br><span class="country-authors">Полша</span></a></li>
                        <li><a>Anton Ivanov<br><span class="country-authors">България</span></a></li>
                    </ul>
                </div>
                <div class="col-md-5 col-lg-5">
                    <h2 class="title-Authors">Информация и творби</h2>
                    <hr>
                    <div id="1" class="collapse">
                        <h3 class="info-name">Alex Smith</h3>
                        <ul class="info-about-person">
                            <li>Bulgaria</li>
                            <li>male</li>
                            <li>b. Varna</li>
                        </ul>
                        <p class="info-autor-about text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel nisi pulvinar, laoreet turpis quis,
                            venenatis turpis. Aenean egestas, nibh sed scelerisque iaculis, risus tortor lobortis arcu, non
                            consectetur mi nibh id ex. Quisque ultricies pellentesque aliquam. Sed pretium nunc at turpis feugiat
                            , sit amet finibus ipsum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                            per inceptos himenaeos. Fusce eu nisi lacinia, gravida nibh a, tristique magna. Cras sem est, lacinia
                            et laoreet sit amet, semper id erat. Sed dapibus lorem ut pellentesque laoreet. In quis erat nisl.
                        </p>
                        <br>
                        <div class="authors-pic">
                            <div class="col-md-6">
                                <div>
                                    {!! HTML::image('img/authors/pic1autr.jpg') !!}
                                    <br><br>
                                    <div class="info-authors-backgcolor" id="backgcolo-info-authors">
                                        <p class="info-authors-text-under-pic">
                                            Duis aute irure dolor in reprehenderit
                                        </p>
                                        <p class="info-about-tech">
                                            in volup
                                        </p><br><br>
                                    </div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                {!! HTML::image('img/authors/pic1autr.jpg') !!}
                                <br><br>
                                <div class="info-authors-backgcolor" id="backgcolo-info-authors">
                                    <p class="info-authors-text-under-pic">
                                        Duis aute irure dolor in reprehenderit
                                    </p>
                                    <p class="info-about-tech">
                                        in volup
                                    </p><br><br>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection