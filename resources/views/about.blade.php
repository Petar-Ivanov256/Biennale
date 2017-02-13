@extends('layouts.master')
@section('title')
    {{ trans('titles.about') }}
@endsection

@section('content')
     <div class="container">
        <div class="row">
             <div class="col-xs-12 col-sm-6 col-lg-5 aboutleft" id="change">
                    <h1 class="name1">{{ trans('about.vision') }}</h1>
                    <p class="textAbout text-justify">
                        {{ trans('about.vision_content') }}
                    </p>
                    <p  class="textAbout text-justify">
                        {{ trans('about.vision_content_second') }}
                    </p>
                    <h2 class="name1">{{ trans('about.team') }}</h2>
                    <div>
                        <button type="button" class="aboutButtons btn-lg" data-target="#team-1">
                            {{ trans('about.art_director') }}
                        </button><br>
                        <!-- Modal -->
                        <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel"> Арт Директор</h4>
                                    </div>
                                    <div class="modal-body">
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="aboutButtons btn-lg" data-target="#team-2">
                            {{ trans('about.coordinators') }}
                        </button><br>
                        <!-- Modal -->
                        <div class="modal fade bs-example-modal-lg" id="mycoordinatorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel"> Координатори</h4>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="aboutButtons btn-lg" data-target="#team-3">
                            {{ trans('about.jury') }}
                        </button><br>
                        <!-- Modal -->
                        <div class="modal fade bs-example-modal-lg" id="myJuryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel"> Жури</h4>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="aboutButtons btn-lg" data-target="#team-4">
                            {{ trans('about.graph_design') }}
                        </button><br>
                        <!-- Modal -->
                        <div class="modal fade bs-example-modal-lg" id="myDesignModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Графичен дизайн</h4>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="aboutButtons btn-lg" data-target="#team-5">
                            {{ trans('about.web_design') }}
                        </button><br>
                        <!-- Modal -->
                        <div class="modal fade bs-example-modal-lg" id="myWebModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Уеб дизайн</h4>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="aboutButtons btn-lg" data-target="#team-6">
                            {{ trans('about.workshops') }}
                        </button><br>
                        <button type="button" class="aboutButtons btn-lg" data-target="#team-7">
                            {{ trans('about.lecturers') }}
                        </button><br>
                        {{-- <button type="button" class="aboutButtons btn-lg" data-target="#team-8">
                            {{ trans('about.video') }}
                        </button><br> --}}
                    </div>
                </div>
            <section>
                {{-- <div class="col-md-5 picAbout" id="change-1">
                  {!! HTML::image('img/picturesFromAbout.jpg')!!}
                </div> --}}
                <div class="col-md-5 picAbout hide" id="team-1">
                    <img class="center-block" src="{{ asset('/img/team/art_director_konstantin valchev_patron.jpg') }}">
                    <h2 class="text-center art-head">Доц. д-р Константин Вълчев <br> {{--{{ trans('about.art_director') }}--}}</h2>
                    <article class="text-justify txt-article">
                        Като художник моите творчески търсения са инспирирани най-вече от стъклото именно защото
                        то се различава силно от другите традиционни материали. Опитвам се да изтъкна максимално
                        качествата и възможностите на този материал, чиято сила на въздействие се дължи изцяло на
                        светлината. Главната ми цел е с помощта на комбинацията от различните по форма, големина и
                        дебелина пластични обеми да концентрирам и събера светлината в определения обект, скулптура
                        или композиция от стъклени елементи, които от своя страна да я пречупват, излъчват, поглъщат
                        и отразяват по определен начин ...
                    </article>
                </div>
                <div class="col-md-5 picAbout hide" id="team-2">
                    <article>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/alexandra veleva.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Александра Велева</h4>
                                <p>
                                    главен координатор на Международна биенале на стъклото
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4>София – Хара Хадзопулу</h4>
                                <p>
                                    главен координатор на Международна биенале на стъклото
                                </p>
                            </div>
                        </div>

                        <br><br>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/flora_dyulgeryan.jpg') }}">
                                <br>
                        <div class="textunderimg">
                                <h4>Флора Дюлгерян</h4>
                                <p>
                                    координатор на Международно биенале
                                    на стъклото за град Варна
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 shrink-pic">
                            <img src="{{ asset('/img/team/denica_todorova.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Деница Тодорова</h4>
                                <p>
                                    координатор на Международно биенале
                                    на стъклото за град Велико Търново
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4>Данко Калчев</h4>
                                <p>
                                    координатор на Международно биенале
                                    на стъклото за град Белослав
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/elizar_milev_koordinator_ngpi.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Елизар Милев</h4>
                                <p>
                                    координатор на Международно биенале
                                    на стъклото за НГПИ „Св. Лука“
                                </p>
                            </div>
                        </div>
                   </article>
                </div>
                <div class="col-md-5 picAbout hide" id="team-3">
                    <h2>{{ trans('about.jury') }}</h2>
                    <article>
                        Очаквайте
                    </article>
                </div>
                <div class="col-md-5 picAbout hide" id="team-4">
                    <h2>{{ trans('about.graph_design') }}</h2>
                    <article>
                        Ана Балева, Тодор Георгиев, Галин Ганчев
                    </article>
                </div>
                <div class="col-md-5 picAbout hide" id="team-5">
                    <h2>{{ trans('about.web_design') }}</h2>
                    <article>
                        Снимки на Димитър Бакърджиев, Ивайло Стоянов, Петър Иванов
                        <br>
                        Снимка: Нонка Христова /IT project manager/
                    </article>
                </div>
                <div class="col-md-5 picAbout hide" id="team-6">
                    <h2>{{ trans('about.workshops') }}</h2>
                    <article>
                        {{-- <img src="{{ asset('/img/team/raya_todorova.jpg') }}"> --}}

                        <div class="col-md-5">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4>Райна Тасева</h4>
                                <p>детски творчески работилници</p>
                            </div>

                        </div>
                        <div class="col-md-5">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4>Рая Сотирова</h4>
                                <p>детски творчески работилници</p>
                            </div>

                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/veselina gekova.JPG') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Веселина Гекова</h4>
                                <p>детски творчески работилници</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/alexandra veleva.JPG') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Александра Велева</h4>
                                <p>детски творчески работилници</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4>София-Хара Хадзопулу</h4>
                                <p>детски творчески работилници</p>
                            </div>
                        </div>

                        <br>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/alexander_tasev.JPG') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Александър Тасев</h4>
                                <p>творческа работилница “Fusing and slumping</p>
                           </div>

                        </div>
                        <div class="col-md-5 art-shop-sv">
                            <img src="{{ asset('/img/team/stefan_velev.JPG') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Стефан Велев</h4>
                                <p>творческа работилница “Fusing and slumping</p>
                            </div>
                      </div>

                        <br>
                        <div class="col-md-5 art-shop-sv">
                            <img src="{{ asset('/img/team/ondrej_strnadel.JPG') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Ondrej Strnadel</h4>
                                <p>творческа работилница за духано стъкло – майстор-духач</p>
                            </div>
                        </div>
                        <div class="col-md-5 art-shop-sv">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4></h4>
                                <p>творческа работилница за духано стъкло – майстор-духач</p>
                            </div>
                        </div>
                        <div class="col-md-5 art-shop-sv">
                            <img src="{{ asset('/img/team/Lilia_Pangelova.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Лилия Пангелова</h4>
                                <p>творческа работилница за духано стъкло – помощник-духач</p>
                            </div>
                        </div>

                        <br>
                        <div class="col-md-5 art-shop-sv">
                            <img src="{{ asset('/img/team/milan_krajicek.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Милан Крайчек</h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-5 art-shop-sv">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4>Дана Замечникова</h4>
                                <p></p>
                            </div>
                        </div>

                    </article>
                </div>
                <div class="col-md-5 picAbout hide" id="team-7">
                    <h2>{{ trans('about.lecturers') }}</h2>
                    <article>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/zdenek_lhotsky.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Зденек Лхотски</h4>
                            </div>
                        </div>

                        <div class="col-md-5">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4>Дана Замечникова</h4>
                            </div>
                        </div>

                        <br>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/milan_krajicek.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Милан Крайчек</h4>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/alexandra veleva.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Александра Велева</h4>
                            </div>
                        </div>
                        <div class="col-md-5">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4>София-Хара Хадзопулу</h4>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/denica_todorova.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Деница Тодорова</h4>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/elizar_milev_koordinator_ngpi.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Елизар Милев</h4>
                            </div>
                        </div>

                    </article>
                </div>
            </section>
              </div>
           </div>
@endsection

@section('foot')

<script type="text/javascript">
    $('.aboutButtons').click(function (e) {
        $('.picAbout').addClass('hide');
        let id = $(this).attr('data-target');
        console.log(id);
        $(id).removeClass('hide');
    });
</script>

@endsection