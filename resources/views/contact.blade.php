@extends('layouts.master')
@section('title')
    {{ trans('titles.contacts') }}
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

        <div  class="container">
            <div class="row">
                  <div class="col-md-5 contact" id="change">
                        <h1 class="Title1">{{ trans('titles.contacts') }}</h1><br>
                        <p id="contactText">
                            {{ trans('contacts.biennale') }}<br>
                            {{ trans('contacts.city') }}<br>
                            {{ trans('contacts.street') }}<br>
                        </p>
                        <p>
                            <a href="mailto:glassbiennalebg@gmail.com" id="emailCordinator">glassbiennalebg@gmail.com</a>
                        </p>
                        <div class="divspancontact">
                            <span id="nameForContact">{{ trans('contacts.alex') }}</span>
                            <span class="contactrightspan"><a href="mailto:alex.kotseva@gmail.com" id="emailCordinator">alex.kotseva@gmail.com</a></span>
                            <span id="cordinator">{{ trans('contacts.coordinator') }}</span>
                            <span class="contactrightspan"><a href="tel:+359887288667" class="telefonCordinator">+359 887 288 667</a></span>
                            <span id="nameForContact">{{ trans('contacts.sofia') }}</span>
                            <span class="contactrightspan"><a href="mailto:sofia.hadzopoulu@gmail.com" id="emailCordinator">sofia.hadzopoulu@gmail.com</a></span>
                            <span id="cordinator">{{ trans('contacts.coordinator') }}</span>
                            <span class="contactrightspan"><a href="tel:+359886923081" class="telefonCordinator">+359 886 923 081</a></span>
                        </div>
                    </div>
                    <div class="col-md-7 moveleft-cotact" id="change">
                        <h2 class="Title1" >{{ trans('contacts.form') }}</h2>
                        <form method="POST" action="{{ URL::to('/contact/send-mail') }}" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-group contentContactForm">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="{{ trans('contacts.name') }}*" value="{{ Request::old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group contentContactForm">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail*" value="{{ Request::old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group contentContactForm">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="{{ trans('contacts.title') }}*" value="{{ Request::old('title') }}">
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group contentContactForm">
                                <div class="col-md-5">
                                    <textarea class="form-control" id="message" name="message" cols="25" rows="5" placeholder="Съобщение*">
                                        {{ Request::old('message') }}
                                    </textarea>
                                    @if ($errors->has('message'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('message') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5" id="submitButton">
                                    <button type="submit" class="contactButon">{{ trans('contacts.send') }}&nbsp;<i class="fa fa-chevron-circle-right" id="fa-fa-chevron-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br>

        <!-- TODO Validations for contact Form--->

@endsection
