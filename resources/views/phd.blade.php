@extends('layouts.master')
@section('title')
    {{ trans('titles.phd') }}
@endsection
@section('content')
     <div class="container">
        <div class="row">
            <div class="col-md-5 first-paragraph" id="change">
                    <h1 class="bachelor-header">{{ trans('scholarship.geninfo') }}</h1>
                    <hr>
                    <h4 class="bachelor-header2">
                        {{ trans('scholarship.info1') }}
                    </h4>
                    <p class="first-p-paragraph text-justify">
                        {{ trans('scholarship.info2') }}
                        <br><br>
                        {{ trans('scholarship.info3') }}
                    </p>
                </div>
                <div class="col-md-6 second-paragraph" id="change">
                    <h2 class="bachelor-header">Условия и минали победители</h2><br>
                    <button class="learn-more">{{ trans('scholarship.rules_btn') }}</button>
                    <button class="learn-more">{{ trans('scholarship.jury_btn') }}</button>
                    <button class="learn-more">{{ trans('scholarship.winners') }}</button><br><br>
                    <p class="second-p-paragraph text-justify" id="firstscholarpar">
                      <!--  <span class="bachelor-header2">
                            Правила за участие в конкурс за пълна стипендия в специалност „Стъкло“, с продължителност от три семестъра,
                            образователна степен  <span class="bac">ДОКТОР</span> в Нов български университет за периода 2017 – 2020г
                        </span><br><br>
                        <span class="numb-colour">1.</span> Творбата да бъде дипломен магистърски проект, защитен успешно.<br><br>
                        <span class="numb-colour">2.</span> Кандидатът да е положил успешно приемните изпити в НБУ и да е предварително приет като
                        редовен докторант в областта на стъклото в Нов български университет.<br><br>
                        <span class="numb-colour">3.</span> Творбата да е представена от фотографии с характеристики: 300 DPI минимум,
                        над 3000 пиксела по широката страна, препоръчително на бял фон.<br><br>
                        <span class="numb-colour">4.</span> Да са описани размери, техника и име на автора.<br><br>
                        <span class="numb-colour">5.</span> Да е описана концепция/синопсис или техника на осъществяване на процеса
                        по изработката в свободен текст от 200 - 300 думи, в pdf файл.<br><br>
                        <span class="numb-colour">6.</span> Да се представи творческа автобиография (на български и английски език).<br><br>
                        <span class="numb-colour">7.</span> Да се представи мотивационно писмо (на български и английски език).<br><br>
                        <span class="numb-colour">8.</span> Да се представи портфолио в дигитален формат /един PDF файл/.<br><br>
                        <span class="imp-span">
                            Гореспоменатите снимки и документи се изпращат на електронна поща: <a href="mailto:glassbiennalebg@gmail.com:" id="emailCordinator">glassbiennalebg@gmail.com</a> до 15.09.2017 г.,
                            след тази дата ще се състои комисията за избиране на стипендиант.
                        </span>-->

                    </p>
                    <div class="second-p-paragraph">
                        <span class="bachelor-span">{{ trans('about.art_director_name') }}</span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/konstantin valchev_patron.jpg') !!}</span><br><br>
                        <span class="bachelor-span">{{ trans('about.zdenek_lhodski') }}</span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/zdenek-lhotsky.jpg') !!}</span><br><br>
                        <span class="bachelor-span">{{ trans('about.dana_zzamechnikova') }}</span>
                        <span class="picspan">  {!! HTML::image('img/images.png') !!}</span><br><br>
                        <span class="bachelor-span">{{ trans('about.milan_krajek') }}</span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/milan-krajicek.jpg') !!}</span><br><br>
                    <!-- <span class="bachelor-span">гл. ас. д-р Владимир Димитров</span>
                    <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>
                    <span class="bachelor-span">д-р Анжела Данева</span>
                    <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>
                    <span class="bachelor-span">Алексей Христов</span>
                    <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>-->
                    </div>
                    <div class="second-p-paragraph">
                      <!--  <span class="bachelor-span">Маритин Иванов<br><span class="full-scholarship">пълна стипендия</span></span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>
                        <span class="bachelor-span">Виктор Николов</span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/pic2.jpg') !!}</span><br><br>
                        <br><br><br><br><br>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam cursus nisl in maximus elementum. Maecenas a augue convallis, dapibus orci in, dapibus nibh.
                            Donec efficitur arcu at augue laoreet dictum. In quis dolor velit. Etiam viverra sit amet mauris quis porttitor. Aenean blandit ante sed dui rhoncus, ac
                            tincidunt nisi tempor. In nec tortor a ipsum pharetra fringilla. Mauris viverra scelerisque risus at vehicula. Proin at consectetur tellus. Praesent nunc
                            sapien, porttitor vitae maximus in, cursus et nunc. Etiam blandit, eros vehicula tempus lobortis, elit purus scelerisque est, auctor volutpat augue arcu
                            sed nisi.
                        </p>-->
                    </div>
                </div>
            </div>
        </div>
@endsection