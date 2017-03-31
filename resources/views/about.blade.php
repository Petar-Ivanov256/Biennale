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
                            {{ trans('about.web_design_title') }}
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
                    <h2 class="text-center art-head"> {{ trans('about.art_director_name') }} <br> {{--{{ trans('about.art_director') }}--}}</h2>
                    <article class="text-justify txt-article">
                        {{ trans('about.art_director_description_one') }}<br><br>
                        {{ trans('about.art_director_description_two') }}<br><br>
                        {{ trans('about.art_director_description_three') }}
                    </article>
                </div>
                <div class="col-md-5 picAbout hide" id="team-2">
                    <article>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/sofia1.jpg') }}">
                            <br>
                            <div class="textunderimg-about" id="sofi_pic_alin">
                                <h4>{{ trans('about.sofia') }}</h4>
                                <p>
                                    {{ trans('about.about_alex_sofia') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/alexandra veleva.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.alex') }}</h4>
                                <p>
                                    {{ trans('about.about_alex_sofia') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/flora_dyulgeryan.jpg') }}">
                                <br>
                        <div class="textunderimg-about">
                                <h4>{{ trans('about.flora') }}</h4>
                                <p>
                                    {{ trans('about.about_flora') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 shrink-pic">
                            <img src="{{ asset('/img/team/denica_todorova.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.denica') }}</h4>
                                <p>
                                    {{ trans('about.about_denica') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/danko.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.danko') }}</h4>
                                <p>
                                    {{ trans('about.about_danko') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/elizar_milev_koordinator_ngpi1.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.elizar') }}</h4>
                                <p>
                                    {{ trans('about.about_elizar') }}
                                </p>
                            </div>
                        </div>
                   </article>
                </div>
                <div class="col-md-5 picAbout hide" id="team-3">
                    <h2 class="name1">{{ trans('about.jury') }}</h2>
                    {{--<article>--}}
                        {{--<div class="col-md-5">--}}
                            {{--<img src="{{ asset('/img/team/nathalie.jpg') }}">--}}
                            {{--<br>--}}
                            {{--<div class="textunderimg-about">--}}
                                {{--<h4>{{ trans('about.nathalie_angles') }}</h4>--}}
                                {{--<p></p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</article>--}}
                </div>
                <div class="col-md-5 picAbout hide" id="team-4">
                    <h2 class="name1" >{{ trans('about.graph_design') }}</h2>
                    <article>
                        <div class="col-md-5">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.todor') }}</h4>
                                <p><a href="https://www.behance.net/Tozzi/" target="_blank">https://www.behance.net/Tozzi</a></p>
                            </div>
                        </div>
                        <div class="col-md-5">

                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.galin') }}</h4>
                                <p><a href="https://www.instagram.com/gganchev/" target="_blank" >https://www.instagram.com/gganchev</a></p>
                                <p><a href="https://dribbble.com/gganchev/" target="_blank">https://dribbble.com/gganchev</a></p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-5 picAbout hide" id="team-5">
                    <h2 class="name1">{{ trans('about.web_design') }}</h2>
                    <article>
                        <div class="col-md-12">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.ana') }}</h4>
                                <p><a href="http://www.amitystudio.com/" target="_blank">http://www.amitystudio.com</a></p>
                            </div>
                        </div>
                    </article>
                    <h2 class="name1">{{ trans('about.web_dev') }}</h2>
                    <article>
                        {{--<div class="col-md-12">--}}
                            {{--<figure>--}}
                                {{--<img src="{{ asset('/img/team/web_dev_team.png') }}">--}}
                                {{--<figcaption class="text-center">{{ trans('about.web_dev_team') }}</figcaption>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        <div class="col-md-5">
                            {{--{!! HTML::image('img/images.png') !!}--}}
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.dimitar') }}</h4>
                                <p>
                                    <a href="https://www.facebook.com/dimitar.bakardzhiev.9" target="_blank" class="btn btn-social-icon btn-facebook">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                    <a href="https://github.com/DimitarBakardzhiev" target="_blank" class="btn btn-social-icon btn-github">
                                        <span class="fa fa-github"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <br>

                        <div class="col-md-5">
                            {{--{!! HTML::image('img/images.png') !!}--}}
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.ivo') }}</h4>
                                <p></p>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-5">
                            {{--{!! HTML::image('img/images.png') !!}--}}
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.nonka') }}</h4>
                                <p>IT project manager</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            {{--{!! HTML::image('img/images.png') !!}--}}
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.petar') }}</h4>
                                <p></p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-5 picAbout hide" id="team-6">
                    <h2 class="name1">{{ trans('about.workshops') }}</h2>
                    <article>
                        {{-- <img src="{{ asset('/img/team/raya_todorova.jpg') }}"> --}}
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/alexandra veleva.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.alex') }}</h4>
                                <p>{{ trans('about.workshop_children') }}</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/alexander_tasev1.jpg') }}">
                            <br>
                            <div class="textunderimg-about" id="atasev_workshop">
                                <h4>{{ trans('about.alexander_tasev') }}</h4>
                                <p>{{ trans('about.workshop_fusing') }}</p>
                            </div>

                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/veselina gekova1.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.veselina_gekova') }}</h4>
                                <p>{{ trans('about.workshop_children') }}</p>
                            </div>
                        </div>
                        <div class="col-md-5" id="dana_workshop">
                            <img src="{{ asset('/img/team/zamecnikova.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.dana_zzamechnikova') }}</h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/Lilia_Pangelova.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.lilia_pangelova') }}</h4>
                                <p>{{ trans('about.lilia_pangelova_w') }}</p>
                            </div>
                        </div>
                        <div class="col-md-5" id="milan_workshop">
                            <img src="{{ asset('/img/team/milan_krajicek1.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.milan_krajek') }}</h4>
                                <p></p>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/ondrej_strnadel1.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.ondrej_strnadel') }}</h4>
                                <p>{{ trans('about.ondrej_strnadel_w') }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-5"id="rayna_workshop">
                            <img src="{{ asset('/img/team/raynataseva.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.rayna_taseve') }}</h4>
                                <p>{{ trans('about.workshop_children') }}</p>
                            </div>
                       </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/raya_todorova1.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.raya_sotirova') }}</h4>
                                <p>{{ trans('about.workshop_children') }}</p>
                            </div>

                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/sofia1.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.sofia') }}</h4>
                                <p>{{ trans('about.workshop_children') }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/stefan_velev1.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.stefan_velev') }}</h4>
                                <p>{{ trans('about.workshop_fusing') }}</p>
                            </div>
                      </div>
                    </article>
                </div>
                <div class="col-md-5 picAbout hide" id="team-7">
                    <h2 class="name1">{{ trans('about.lecturers') }}</h2>
                    <article>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/alexandra veleva.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.alex') }}</h4>
                            </div>
                        </div>
                        <div class="col-md-5" id="dana_lek">
                            <img src="{{ asset('/img/team/zamecnikova.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.dana_zzamechnikova') }}</h4>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/denica_todorova.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.denica') }}</h4>
                            </div>
                        </div>
                        <div class="col-md-5" id="elizar_lec">
                            <img src="{{ asset('/img/team/elizar_milev_koordinator_ngpi1.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.elizar') }}</h4>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/zdenek_lhotsky.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.zdenek_lhodski') }}</h4>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/milan_krajicek1.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.milan_krajek') }}</h4>
                            </div>
                        </div>
                       <div class="col-md-5">
                            <img src="{{ asset('/img/team/nathalie.jpg') }}">
                            <br>
                            <div class="textunderimg-about">
                                <h4>{{ trans('about.nathalie_angles') }}</h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('/img/team/sofia1.jpg') }}">
                            <br>
                            <div class="textunderimg-about" id="sofi_lec">
                                <h4>{{ trans('about.sofia') }}</h4>
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