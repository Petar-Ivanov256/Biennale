@extends('layouts.master')
@section('title')
    Събития
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
    <div class="container" id="top">
        <div class="col-lg-9">
            <div class="col-md-2 prgdata">
                <p>Събития</p>
                <p>Период</p>
            </div>
            <div>
                <div>
                <ul class="events-menu">
                    <li><a href="#1">Изложби</a></li>
                    <li><a href="#2">Лекции</a></li>
                    <li><a href="#3" data-toggle="collapse">Творчески ателиета</a></li>
                    <li><a href="#4">Конкурси</a></li>
                    <li id="biennale-week">Седмица на биеналето</li>
                </ul>
                </div>
                <div id="3" class="collapse">
                    <ul class="months">
                        <li><a href="#">Февруари</a></li>
                        <li><a href="#">Март</a></li>
                        <li><a href="#">Април</a></li>
                        <li><a href="#">Май</a></li>
                        <li><a href="#">Юни</a></li>
                        <li><a href="#">Юли</a></li>
                        <li><a href="#">Август</a></li>
                        <li><a href="#">Септември</a></li>
                        <li><a href="#">Октомври</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-9" id="change">
            <div id="1" class="events-p"><p>Изложби<p></div><br>
            <div class="col-lg-4 programa">
                <a href="#" class="abackcolor">
                    {!! HTML::image('img/eventsimg/pic1.jpg') !!}
                    <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>
            </div>
            <div class="col-lg-4 programa">
               <a href="#">
                   {!! HTML::image('img/eventsimg/pic2.jpg') !!}
                   <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>
            </div>
            <div class="col-lg-4 programa">
                <a href="#">
                    {!! HTML::image('img/eventsimg/pic3.jpg') !!}
                    <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-9" id="change">
            <div class="col-lg-4 programa">
                <a href="#" class="abackcolor">
                    {!! HTML::image('img/eventsimg/pic4.jpg') !!}
                    <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>
            </div>
            <div class="col-lg-4 programa">
                <a href="#">
                    {!! HTML::image('img/eventsimg/pic5.jpg') !!}
                    <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>

            </div>
            <div class="col-lg-4 programa">
                <a href="#">
                    {!! HTML::image('img/eventsimg/pic3.jpg') !!}
                    <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>
            </div>
        </div>


        <div class="col-lg-9" id="change">
            <div id="2" class="events-p"><p>Лекции<p></div><br>
            <div class="col-lg-4 programa">
                <a href="#" class="abackcolor">
                    {!! HTML::image('img/eventsimg/pic1.jpg') !!}
                    <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>
            </div>
            <div class="col-lg-4 programa">
                <a href="#">
                    {!! HTML::image('img/eventsimg/pic2.jpg') !!}
                    <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>
            </div>
            <div class="col-lg-4 programa">
                <a href="#">
                    {!! HTML::image('img/eventsimg/pic3.jpg') !!}
                    <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-9" id="change">
            <div class="col-lg-4 programa">
                <a href="#" class="abackcolor">
                    {!! HTML::image('img/eventsimg/pic4.jpg') !!}
                    <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>
            </div>
            <div class="col-lg-4 programa">
                <a href="#">
                    {!! HTML::image('img/eventsimg/pic5.jpg') !!}
                    <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>

            </div>
            <div class="col-lg-4 programa">
                <a href="#">
                    {!! HTML::image('img/eventsimg/pic3.jpg') !!}
                    <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-9" id="change">
            <div id="4" class="events-p"><p>Конкурси<p></div><br>
            <div class="col-lg-4 programa">
                <a href="#" class="abackcolor">
                    {!! HTML::image('img/eventsimg/pic1.jpg') !!}
                    <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>
            </div>
            <div class="col-lg-4 programa">
                <a href="#">
                    {!! HTML::image('img/eventsimg/pic2.jpg') !!}
                    <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>
            </div>
            <div class="col-lg-4 programa">
                <a href="#">
                    {!! HTML::image('img/eventsimg/pic3.jpg') !!}
                    <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-9" id="change">
            <div class="col-lg-4 programa">
                <a href="#" class="abackcolor">
                    {!! HTML::image('img/eventsimg/pic4.jpg') !!}
                    <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>
            </div>
            <div class="col-lg-4 programa">
                <a href="#">
                    {!! HTML::image('img/eventsimg/pic5.jpg') !!}
                    <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>

            </div>
            <div class="col-lg-4 programa">
                <a href="#">
                    {!! HTML::image('img/eventsimg/pic3.jpg') !!}
                    <br>
                    <span class="ptagleft" id="left-aligndate">27.09-29.09</span>
                    <span class="ptagleft" id="right-alignhour">10:00-18:00</span>
                    <span class="ptagleft" id="left-aligncity">София</span>
                    <span class="ptagleft" id="right-alignaddress">Райко Алексиев</span>
                </a>
                <br>
                <div class="col-lg-12 textunderimg">
                    <h4>Querat voluptatem</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in volup
                    </p>
                </div>
            </div>
        </div>





    </div>







































    <div class="container">
        <div class="col-lg-12">
            <div class="col-lg-6 programadetails" id="change">
                <h2>Творческа работилница</h2>
                {!! HTML::image('img/eventsimg/pic8.jpg') !!}
                <div class="ptagleftprogramdetails">
                    <span class="oneprogdet">Дата</span>
                    <span class="twoprogdet">Сряда 27/09/2017</span>
                    <span class="oneprogdet">Час</span>
                    <span class="twoprogdet">18:00-20:00</span>
                    <span class="oneprogdet">Място</span>
                    <span class="twoprogdet">Галерия Райко Алексиев <a href="#" class="programapdirection">виж картата</a></span>
                    <span class="oneprogdet">Артисти</span>
                    <span class="twoprogdet">дипломанти "Стъкло" НБУ</span>
                    <span class="oneprogdet">Вход</span>
                    <span class="twoprogdet">Безплатен</span><br>
                </div>
                <div>
                    <p class="progdettxt">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Donec commodo varius nunc id ullamcorper. Aliquam eget mi commodo, pharetra tellus non, elementum magna.
                        Morbi aliquet ipsum sed urna egestas eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et
                        ultrices posuere cubilia Curae; Nullam felis mi, iaculis quis justo vel, tempus egestas est. Class aptent
                        taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec vitae diam odio.
                        Pellentesque ipsum odio, pharetra a dui at, venenatis laoreet lorem. Phasellus in justo sed nunc cursus
                        aliquet. Suspendisse cursus magna pulvinar, molestie elit nec, fringilla lorem.
                    </p>
                </div>
                <a href="#top" class="back-to-top"><span class="ptagleftdetailss"></span><span class="ptagleftdetailss">Обратно към всички</span></a>
            </div>
            <section>
                <div class="container">
                    <div class="col-lg-6" id="change">
                        <header>
                            <h2 class="programadet">Други изложби</h2>
                        </header>

                        <div class="col-lg-4 programa">
                            <a href="#" class="abackcolor">
                                {!! HTML::image('img/eventsimg/pic9.jpg') !!}
                                <br>
                                <span class="ptagleftdetails" id="left-aligndate">27.09-29.09</span>
                                <span class="ptagleft"  id="right-alignhour">София</span>
                            </a>
                            <br>
                            <div class="col-lg-12 textunderimg">
                                <h4>Querat voluptatem</h4>
                                <p>
                                    Duis aute irure dolor in reprehenderit in volup
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 programa">
                            <a href="#">
                                {!! HTML::image('img/eventsimg/pic9.jpg') !!}
                                <br>
                                <span class="ptagleftdetails" id="left-aligndate">27.09-29.09</span>
                                <span class="ptagleft"  id="right-alignhour">София</span>
                            </a>
                            <br>
                            <div class="col-lg-12 textunderimg">
                                <h4>Querat voluptatem</h4>
                                <p>
                                    Duis aute irure dolor in reprehenderit in volup
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" id="change">
                        <div class="col-lg-4 programa">
                            <a href="#" class="abackcolor">
                                {!! HTML::image('img/eventsimg/pic9.jpg') !!}
                                <br>

                                <span class="ptagleftdetails" id="left-aligndate">27.09-29.09</span>
                                <span class="ptagleft"  id="right-alignhour">София</span>
                            </a>
                            <br>
                            <div class="col-lg-12 textunderimg">
                                <h4>Querat voluptatem</h4>
                                <p>
                                    Duis aute irure dolor in reprehenderit in volup
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 programa">
                            <a href="#">
                                {!! HTML::image('img/eventsimg/pic9.jpg') !!}
                                <br>
                                <span class="ptagleftdetails" id="left-aligndate">27.09-29.09</span>
                                <span class="ptagleft"  id="right-alignhour">София</span>
                            </a>
                            <br>
                            <div class="col-lg-12 textunderimg">
                                <h4>Querat voluptatem</h4>
                                <p>
                                    Duis aute irure dolor in reprehenderit in volup
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
</div>
@endsection