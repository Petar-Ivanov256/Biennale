@extends('layouts.master')
@section('title')
    Записване за участие
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-5 application-form-part-one">
                    <h1>Регламент</h1>
                    <h3>
                        Разгледайте опциите, попълнете апликационната форма и заявете своето участие.
                    </h3>
                    <div>
                        <hr>
                        <a href="#REALIZED-ART-PIECE" data-toggle="collapse">РЕАЛИЗИРАНА ТВОРБА</a>
                        <hr>
                        <div id="REALIZED-ART-PIECE" class="collapse">
                            <p>
                                Изискванията за участие с реализирана творба в стъкло включват попълване на апликационната
                                форма и качване на снимка с размери минимум 300 DPI, над 3000 пиксела по широката страна,
                                препоръчително на бял фон.<br><br>
                                Краен срок за участие с реализирана творба 01.04.2017
                                <hr>
                            </p>
                        </div>
                    </div>
                    <div>
                        <hr>
                        <a href="#PROJECT" data-toggle="collapse">НЕРЕАЛИЗИРАНА ТВОРБА</a>
                        <hr>
                        <div id="PROJECT" class="collapse">
                            <p>
                                Изискванията за участие с нереализирана творба / макет; визуализация; технически чертеж с размери; художествена рисунка/
                                включват попълване на апликационната форма и качване на снимка (в .jpg; .jpeg или .png) на проектa. След реализиране на проекта
                                е необходимо изпращане на информация и снимка с размери минимум 300 DPI, над 3000 пиксела по широката страна,
                                препоръчително на бял фон на реализираната творба на <a href="mailto:glassbiennalebg@gmail.com:" id="emailCordinator">glassbiennalebg@gmail.com</a>.
                                Прикаченият файл трябва да съдържа Вашето име и името на проекта.<br><br>
                                Краен срок за изпращане на проект - 01.03.2017.<br><br>
                                Краен срок за изпращане на снимка на реализираната творба – 01.07.2017.<br><br>
                             <hr>
                            </p>
                        </div>
                    </div>
                    <div>
                        <hr>
                        <a href="#PROJECT-FOR-BLOWN-GLASS" data-toggle="collapse">ИДЕЕН ПРОЕКТ ЗА ДУХАНО СТЪКЛО</a>
                        <hr>
                        <div id="PROJECT-FOR-BLOWN-GLASS" class="collapse">
                            <p>
                                Ако имате желание, може да приложите проект за духано стъкло - снимка на макет; визуализация; художествена рисунка; технически чертеж с размери,
                                който да бъде реализиран в град Белослав като част от демонстрациите по време на Международно Биенале на Стъклото. Творбата ще бъде издухана от
                                чешкия майстор-духач Ондрeй Стрнадел и изложена в галерия в град Варна.
                                Необходимо е да изпратите проект като включите неговото и Вашето име на <a href="mailto:glassbiennalebg@gmail.com:" id="emailCordinator">glassbiennalebg@gmail.com</a> до 01.07.2017 г.<br>
                                Не е необходимо да се попълва апликационната форма.
                            <hr>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 application-form-part-two">
                    <h1>Форма за участие</h1><br>
                    <button class="private-info">Лична информация</button>
                    <button class="private-info">Информация за творбата</button><br><br><br>
                    <form method="POST" action="{{ URL::to('/apply') }}" class="form-horizontal">
                        <div class="form-group">
                           <!-- <label for="name" class="col-lg-2 control-label">Име и фамилия</label>-->
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Име и фамилия" value="{{ Request::old('name') }}">
                            </div>
                        </div>
                        <div class="form-group">
                          <!--  <label for="country" class="col-lg-2 control-label">Държава</label>-->
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="country" name="country" placeholder="Държава" value="{{ Request::old('country') }}">
                            </div>
                        </div>
                        <div class="form-group">
                          <!--  <label for="email" class="col-lg-2 control-label">E-mail</label>-->
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="{{ Request::old('email') }}">
                            </div>
                        </div>
                        <div class="form-group">
                          <!--  <label for="phone-number" class="col-lg-2 control-label">Телефон</label>-->
                            <div class="col-md-6">
                                <input type="tel" class="form-control" id="phone-number" name="phoneNumber" placeholder="Телефон" value="{{ Request::old('phoneNumber') }}">
                            </div>
                        </div>
                        <div class="form-group">
                           <!-- <label for="title" class="col-lg-2 control-label">Оригинално заглавие</label>-->
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Оригинално заглавие" value="{{ Request::old('title') }}">
                            </div>
                        </div>
                        <div class="form-group">
                         <!--   <label for="en-title" class="col-lg-2 control-label">Заглавие на английски език</label>-->
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="en-title" name="englishTitle" placeholder="Заглавие на английски език" value="{{ Request::old('englishTitle') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <h3>Техника</h3>
                            <ul>

                                @foreach($techniques as $technique)

                                    <li><label><input type="checkbox" name="technique[]" value="{{$technique->id}}" /> {{$technique->name}}</label></li>

                                @endforeach

                            </ul>
                        </div>
                        <div class="form-group">
                            <label for="dimensions" class="col-lg-2 control-label">Размери (в/ш/д)</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="dimensions" name="dimensions" placeholder="в / ш / д" value="{{ Request::old('dimensions') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="installation-guide" class="col-lg-2 control-label">Насоки за поставяне</label>
                            <div class="col-md-4">
                                <textarea class="form-control" rows="3" id="installation-guide" name="installationGuide">{{ Request::old('name') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="year" class="col-lg-2 control-label">Година на създаване</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="year" name="year" placeholder="Година на създаване" value="{{ Request::old('name') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="synopsis" class="col-lg-2 control-label">Синопсис</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="synopsis" name="synopsis" placeholder="Синопсис" value="{{ Request::old('name') }}">
                            </div>
                        </div>
                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                        <div class="form-group">
                            <div class="col-md-4 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary">Изпрати</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
