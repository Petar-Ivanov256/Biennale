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
                        <button type="button" class="aboutButtons btn-lg" data-target="#team-2">
                            {{ trans('about.coordinators') }}
                        </button><br>
                        
                        <button type="button" class="aboutButtons btn-lg" data-target="#team-3">
                            {{ trans('about.jury') }}
                        </button><br>
                        
                        <button type="button" class="aboutButtons btn-lg" data-target="#team-4">
                            {{ trans('about.graph_design') }}
                        </button><br>
                        
                        <button type="button" class="aboutButtons btn-lg" data-target="#team-5">
                            {{ trans('about.web_design') }}
                        </button><br>
                        
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
                            <img src="{{ asset('/img/team/alexandra veleva1.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>{{ trans('about.alex') }}</h4>
                                <p>
                                    {{ trans('about.about_alex_sofia') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4>{{ trans('about.sofia') }}</h4>
                                <p>
                                    {{ trans('about.about_alex_sofia') }}
                                </p>
                            </div>
                        </div>

                        <br><br>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/flora_dyulgeryan.jpg') }}">
                                <br>
                        <div class="textunderimg">
                                <h4>{{ trans('about.flora') }}</h4>
                                <p>
                                    {{ trans('about.about_flora') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 shrink-pic">
                            <img src="{{ asset('/img/team/denica_todorova.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>{{ trans('about.denica') }}</h4>
                                <p>
                                    {{ trans('about.about_denica') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4>{{ trans('about.danko') }}</h4>
                                <p>
                                    {{ trans('about.about_danko') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/elizar_milev_koordinator_ngpi1.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>{{ trans('about.elizar') }}</h4>
                                <p>
                                    {{ trans('about.about_elizar') }}
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
                        <div class="col-md-5">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4>{{ trans('about.ana') }}</h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4>{{ trans('about.todor') }}</h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4>{{ trans('about.galin') }}</h4>
                                <p></p>
                            </div>
                        </div>

                    </article>
                </div>
                <div class="col-md-5 picAbout hide" id="team-5">
                    <h2>{{ trans('about.web_design') }}</h2>
                    <article>
                        <div class="col-md-5">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4>{{ trans('about.dimitar') }}</h4>
                                <p></p>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-5">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4>{{ trans('about.petar') }}</h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4>{{ trans('about.ivo') }}</h4>
                                <p></p>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-5">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4>{{ trans('about.nonka') }}</h4>
                                <p>IT project manager</p>
                            </div>
                        </div>

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
                            <img src="{{ asset('/img/team/raya_todorova1.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Рая Сотирова</h4>
                                <p>детски творчески работилници</p>
                            </div>

                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/veselina gekova1.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Веселина Гекова</h4>
                                <p>детски творчески работилници</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/alexandra veleva1.jpg') }}">
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
                            <img src="{{ asset('/img/team/alexander_tasev1.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Александър Тасев</h4>
                                <p>творческа работилница “Fusing and slumping</p>
                           </div>

                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/stefan_velev1.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Стефан Велев</h4>
                                <p>творческа работилница “Fusing and slumping</p>
                            </div>
                      </div>

                        <br>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/ondrej_strnadel1.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Ondrej Strnadel</h4>
                                <p>творческа работилница за духано стъкло – майстор-духач</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            {!! HTML::image('img/images.png') !!}
                            <br>
                            <div class="textunderimg">
                                <h4></h4>
                                <p>творческа работилница за духано стъкло – майстор-духач</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/Lilia_Pangelova.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Лилия Пангелова</h4>
                                <p>творческа работилница за духано стъкло – помощник-духач</p>
                            </div>
                        </div>

                        <br>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/milan_krajicek1.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Милан Крайчек</h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-5">
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
                            <img src="{{ asset('/img/team/milan_krajicek1.jpg') }}">
                            <br>
                            <div class="textunderimg">
                                <h4>Милан Крайчек</h4>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/alexandra veleva1.jpg') }}">
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
                            <img src="{{ asset('/img/team/elizar_milev_koordinator_ngpi1.jpg') }}">
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