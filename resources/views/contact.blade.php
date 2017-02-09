@extends('layouts.master')
@section('title')
    {{ trans('titles.contacts') }}
@endsection

@section('content')
         <div  class="container">
            <div class="row">
                  <div class="col-md-5 contact" id="change">
                        <h1 class="Title1">{{ trans('titles.contacts') }}</h1><br>
                        <p>
                            <a href="mailto:glassbiennalebg@gmail.com" id="emailCordinator">glassbiennalebg@gmail.com</a>
                        </p>
                        <div class="divspancontact">
                            <p id="cordinator">{{ trans('contacts.coordinator') }}</p>
                            <p id="nameForContact_A">{{ trans('contacts.alex') }}</p>
                            <p id="nameForContact_S">{{ trans('contacts.sofia') }}</p>
                        </div>
                    </div>
                    <div class="col-md-7 moveleft-cotact" id="change">
                        <h2 class="Title1" >{{ trans('contacts.form') }}</h2>
                        <form method="POST" action="{{ URL::to(App::getLocale() . '/contact/send-mail') }}" class="form-horizontal">
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
