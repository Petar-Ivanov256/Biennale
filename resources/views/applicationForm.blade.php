@extends('layouts.master')
@section('title')
    {{ trans('titles.submission') }}
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
                <div class="col-md-5 application-form-part-one" id="change">
                    <h1 class="title-reglament">{{ trans('form.rules') }}</h1>
                    <h3 class="sub-title">
                        {{ trans('form.see_options') }}
                    </h3>
                    <div>
                        <hr>
                        <a href="#REALIZED-ART-PIECE" data-toggle="collapse" class="a-drop-down">{{ trans('form.art_piece') }}</a>
                        <hr>
                        <div id="REALIZED-ART-PIECE" class="collapse">
                            <p class="text-p text-justify">
                                {{ trans('form.art_piece_content1') }}<br><br>
                                {{ trans('form.art_piece_content2') }} <span class="color-red">01.04.2017 {{ trans('common.year_abr') }}</span>

                            </p>
                            <hr>
                        </div>
                    </div>
                    <div>
                        <hr>
                        <a href="#PROJECT" data-toggle="collapse" class="a-drop-down">{{ trans('form.project') }}</a>
                        <hr>
                        <div id="PROJECT" class="collapse">
                            <p class="text-p text-justify">
                                {{ trans('form.project_content1') }} <a href="mailto:glassbiennalebg@gmail.com:" id="emailCordinator">glassbiennalebg@gmail.com</a>.
                                {{ trans('form.project_content2') }}<br><br>
                                {{ trans('form.project_content3') }} - <span class="color-red">01.03.2017 {{ trans('common.year_abr') }}</span><br><br>
                                {{ trans('form.project_content4') }} - <span class="color-red" >01.07.2017 {{ trans('common.year_abr') }}</span><br><br>

                            </p>
                            <hr>
                        </div>
                    </div>
                    <div>
                        <hr>
                        <a href="#PROJECT-FOR-BLOWN-GLASS" data-toggle="collapse" class="a-drop-down">{{ trans('form.blown_glass') }}</a>
                        <hr>
                        <div id="PROJECT-FOR-BLOWN-GLASS" class="collapse">
                            <p class="text-p text-justify">
                                {{ trans('form.blown_glass_content1') }}<br><br>
                                {{ trans('form.blown_glass_content2') }}
                                <a href="mailto:glassbiennalebg@gmail.com:" id="emailCordinator">glassbiennalebg@gmail.com</a> {{ trans('common.until') }} <span class="color-red" >01.07.2017 {{ trans('common.year_abr') }}</span><br><br>
                                <span class="color-red"> {{ trans('form.blown_glass_content3') }}</span>

                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 application-form-part-one" id="change">
                    <h1 class="title-reglament">{{ trans('form.app_form') }}</h1>
                    <h3 class="appl-form-head">{{ trans('form.personal_info') }}</h3><br>
                <form method="POST" action="{{ URL::to(App::getLocale() . '/apply') }}" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="text" class="form-control" id="name" name="name" placeholder="{{ trans('common.name') }}*" value="{{ Request::old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="text" class="form-control" id="country" name="country" placeholder="{{ trans('common.country') }}*" value="{{ Request::old('country') }}">
                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail*" value="{{ Request::old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="tel" class="form-control" id="phone-number" name="phoneNumber" placeholder="{{ trans('common.phone') }}*" value="{{ Request::old('phoneNumber') }}">
                                @if ($errors->has('phoneNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <div class="contentContactForm_S">
                        <label for="male" class="radio-inline">
                            <input type="radio" name="optradio">{{ trans('form.s_male') }}</label>
                        <label for="female" class="radio-inline">
                            <input type="radio" name="optradio">{{ trans('form.s_female') }}</label>
                    </div>
                        <h3 class="appl-form-head">{{ trans('form.info_art_p') }}</h3><br>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="text" class="form-control" id="title" name="title" placeholder="{{ trans('form.org_name') }}*" value="{{ Request::old('title') }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="text" class="form-control" id="en-title" name="englishTitle" placeholder="{{ trans('form.english_title') }}*" value="{{ Request::old('englishTitle') }}">
                                @if ($errors->has('englishTitle'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('englishTitle') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <h3 class="sub-title-technique">{{ trans('form.techniques') }}*</h3>
                        <div class="form-group">

                            <ul class="columns-application-from">

                                @foreach($techniques as $technique)

                                    <li class="app-form-technique">
                                        <input type="checkbox" name="technique[]" class="rad" id="button-{{ $technique->id }}" value="{{$technique->id}}" {{-- {{ old('technique') ? "checked" : "" }} --}} />
                                        <label for="button-{{ $technique->id }}">{{$technique->name}}</label>
                                    </li>

                                @endforeach
                            </ul>
                            @if ($errors->has('technique'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('technique') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="text" class="form-control" id="dimensions" name="dimensions" placeholder="{{ trans('form.dimensions') }}*" value="{{ Request::old('dimensions') }}">
                                @if ($errors->has('dimensions'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dimensions') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <textarea class="form-control" rows="3" id="installation-guide" name="installationGuide" placeholder="{{ trans('form.install_guide') }}*">{{ Request::old('installationGuide') }}</textarea>
                                @if ($errors->has('installationGuide'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('installationGuide') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="text" class="form-control" id="year" name="year" placeholder="{{ trans('form.year_realization') }}*" value="{{ Request::old('year') }}">
                                @if ($errors->has('year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="text" class="form-control" id="synopsis" name="synopsis" placeholder="{{ trans('form.sinopsis') }}*" value="{{ Request::old('synopsis') }}">
                                @if ($errors->has('synopsis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('synopsis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <div>
                        <input type="file" name="file-7" id="file-7" class="inputfile inputfile-6"/>
                        <label for="file-7"><span>{{ trans('form.pic1') }}*</span><strong class="choose-span">{{ trans('common.browse') }}</strong></label>
                        <br>
                        <span class="max-Mb">{{ trans('common.max') }} 4MB</span>
                        @if ($errors->has('file-7'))
                            <span class="help-block">
                                <strong>{{ $errors->first('file-7') }}</strong>
                            </span>
                        @endif
                     </div>
                    <br>
                    <div>
                        <input type="file" name="file-8" id="file-8" class="inputfile inputfile-6"/>
                        <label for="file-8"><span>{{ trans('form.pic2') }}*</span><strong class="choose-span">{{ trans('common.browse') }}</strong></label>
                        <br>
                        <span class="max-Mb">{{ trans('common.max') }} 4MB</span>
                        @if ($errors->has('file-8'))
                            <span class="help-block">
                                <strong>{{ $errors->first('file-8') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-8 form-group content-app text-justify">
                        <p>
                           <span><input type="checkbox" required id="terms"></span>
                            <label for="terms">
                                <span>
                                    {{ trans('form.agreement1') }}
                                    {{ trans('form.agreement2') }}<br>
                                </span>
                            </label>
                        </p>
                    <div>
                    </div>
                    
                        <div class="form-group">
                            <div class="col-md-5" id="submitButton">
                                <button type="submit" class="contactButon">{{ trans('common.submit') }}&nbsp;<i class="fa fa-chevron-circle-right" id="fa-fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
