@extends('layouts.master')
@section('title')
    Контакти
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
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <h1 class="Title1">Контакти</h1><br>
                        <p id="contactText">
                            Международно биенале на стъклото<br>
                            София 1000, България<br>
                            ул. Номередно №12<br>
                        </p>
                        <p>
                            <a href="mailto:glassbiennalebg@gmail.com" id="emailCordinator">glassbiennalebg@gmail.com</a>
                        </p>
                        <div class="divspancontact">
                            <span id="nameForContact">Александра Велева</span>
                            <span class="contactrightspan"><a href="mailto:alex.kotseva@gmail.com" id="emailCordinator">alex.kotseva@gmail.com</a></span>
                            <span id="cordinator">координатор</span>
                            <span class="contactrightspan"><a href="tel:+359887288667" class="telefonCordinator">+359 887 288 667</a></span>
                            <span id="nameForContact">София-Хара Хадзопулу</span>
                            <span class="contactrightspan"><a href="mailto:sofia.hadzopoulu@gmail.com" id="emailCordinator">sofia.hadzopoulu@gmail.com</a></span>
                            <span id="cordinator">координатор</span>
                            <span class="contactrightspan"><a href="tel:+359887288667" class="telefonCordinator">+359 887 288 667</a></span>
                        </div>
                    </div>
                    <div class="col-lg-8" id="contact">
                        <h2 class="Title1" >Контактна Форма</h2>
                        <form method="POST" action="{{ URL::to('/apply') }}" class="form-horizontal">
                            <div class="form-group" id="contentContactForm">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Име и фамилия*" value="{{ Request::old('name') }}">
                                </div>
                            </div>
                            <div class="form-group" id="contentContactForm">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail*" value="{{ Request::old('email') }}">
                                </div>
                            </div>
                            <div class="form-group" id="contentContactForm">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="title" name="Title" placeholder="Заглавие*" value="{{ Request::old('englishTitle') }}">
                                </div>
                            </div>
                            <div class="form-group" id="contentContactForm">
                                <div class="col-md-5">
                                    <textarea class="form-control" id="Message" name="Message" cols="25" rows="5" placeholder="Съобщение*"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5" id="submitButton">
                                    <button type="submit" class="contactButon">Изпрати&nbsp;<i class="fa fa-chevron-circle-right" id="fa-fa-chevron-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>

        <!-- TODO Validations for contact Form--->

@endsection
