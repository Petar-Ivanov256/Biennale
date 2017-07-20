@extends('layouts.master')
@section('title')
    {{ trans('titles.bachelor') }}
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
                        {!! trans('scholarship.bac_rules') !!}
                    </p>
                    <div class="second-p-paragraph">
                        <span class="bachelor-span">{{ trans('about.art_director_name') }}</span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/valchev.jpg') !!}</span><br><br>
                        <span class="bachelor-span">{{ trans('scholarship.lilia_baleva') }}</span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/lilia1.jpg') !!}</span><br><br>
                        <span class="bachelor-span">{{ trans('scholarship.vladimir_dimitrov') }}</span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/vlad.jpg') !!}</span><br><br>
                        <span class="bachelor-span">{{ trans('about.alex') }}</span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/alexandra1.jpg') !!}</span><br><br>
                        <span class="bachelor-span">{{ trans('about.sofia') }}</span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/sofia12.jpg') !!}</span><br><br>
                    </div>
                    <div class="second-p-paragraph">
                        <span class="bachelor-span"> {{ trans('scholarship.ralica_vaceva') }}<br><span class="full-scholarship">{{ trans('scholarship.fullscholarship') }}</span></span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/ralica.jpg') !!}</span><br><br>
                        <br><br><br><br><br>
                        <p class="text-justify">
                            {{ trans('scholarship.bachlor_txt') }}<br><br>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    @endsection