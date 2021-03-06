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
                    <h2 class="bachelor-header">{{ trans('scholarship.rules_and_winners') }}</h2><br>
                    <button class="learn-more">{{ trans('scholarship.rules_btn') }}</button>
                    <button class="learn-more">{{ trans('scholarship.jury_btn') }}</button>
                    <button class="learn-more">{{ trans('scholarship.winners') }}</button><br><br>
                    <p class="second-p-paragraph text-justify" id="firstscholarpar">
                        {!! trans('scholarship.phd_rules') !!}
                    </p>
                    <div class="second-p-paragraph">
                        <span class="bachelor-span">{{ trans('about.art_director_name') }}</span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/valchev.jpg') !!}</span><br><br>
                        <span class="bachelor-span">{{ trans('about.zdenek_lhodski') }}</span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/zdenek.jpg') !!}</span><br><br>
                        <span class="bachelor-span">{{ trans('about.dana_zzamechnikova') }}</span>
                        <span class="picspan">  {!! HTML::image('img/scholarships/zamecnikova12.jpg') !!}</span><br><br>
                        <span class="bachelor-span">{{ trans('about.milan_krajek') }}</span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/milan12.jpg') !!}</span><br><br>
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