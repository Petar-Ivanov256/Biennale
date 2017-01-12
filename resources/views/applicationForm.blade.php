@extends('layouts.master')
@section('title')
    Записване за участие
@endsection

@section('content')
    <h1>Dase sloji saobhstenie che formata e praten ama da e gotino naprimer s javascript</h1>
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
            <div class="col-md-12">
                <div class="col-md-5 application-form-part-one" id="change">
                    <h1 class="title-reglament">Регламент</h1>
                    <h3 class="sub-title">
                        Разгледайте опциите, попълнете апликационната форма и заявете своето участие.
                    </h3>
                    <div>
                        <hr>
                        <a href="#REALIZED-ART-PIECE" data-toggle="collapse" class="a-drop-down">РЕАЛИЗИРАНА ТВОРБА</a>
                        <hr>
                        <div id="REALIZED-ART-PIECE" class="collapse">
                            <p class="text-p">
                                Изискванията за участие с реализирана творба в стъкло включват попълване на апликационната
                                форма и качване на снимка с размери минимум 300 DPI, над 3000 пиксела по широката страна,
                                препоръчително на бял фон.<br><br>
                                Краен срок за участие с реализирана творба <span class="color-red">01.04.2017 г.</span>
                                <hr>
                            </p>
                        </div>
                    </div>
                    <div>
                        <hr>
                        <a href="#PROJECT" data-toggle="collapse" class="a-drop-down">НЕРЕАЛИЗИРАНА ТВОРБА</a>
                        <hr>
                        <div id="PROJECT" class="collapse">
                            <p class="text-p">
                                Изискванията за участие с нереализирана творба / макет; визуализация; технически чертеж с размери; художествена рисунка/
                                включват попълване на апликационната форма и качване на снимка (в .jpg; .jpeg или .png) на проектa. След реализиране на проекта
                                е необходимо изпращане на информация и снимка с размери минимум 300 DPI, над 3000 пиксела по широката страна,
                                препоръчително на бял фон на реализираната творба на <a href="mailto:glassbiennalebg@gmail.com:" id="emailCordinator">glassbiennalebg@gmail.com</a>.
                                Прикаченият файл трябва да съдържа Вашето име и името на проекта.<br><br>
                                Краен срок за изпращане на проект - <span class="color-red">01.03.2017.</span><br><br>
                                Краен срок за изпращане на снимка на реализираната творба – <span class="color-red" >01.07.2017 г.</span><br><br>
                             <hr>
                            </p>
                        </div>
                    </div>
                    <div>
                        <hr>
                        <a href="#PROJECT-FOR-BLOWN-GLASS" data-toggle="collapse" class="a-drop-down">ИДЕЕН ПРОЕКТ ЗА ДУХАНО СТЪКЛО</a>
                        <hr>
                        <div id="PROJECT-FOR-BLOWN-GLASS" class="collapse">
                            <p class="text-p">
                                Ако имате желание, може да приложите проект за духано стъкло - снимка на макет; визуализация; художествена рисунка; технически чертеж с размери,
                                който да бъде реализиран в град Белослав като част от демонстрациите по време на Международно Биенале на Стъклото. Творбата ще бъде издухана от
                                чешкия майстор-духач Ондрeй Стрнадел и изложена в галерия в град Варна.<br><br>
                                Необходимо е да изпратите проект като включите неговото и Вашето име на
                                <a href="mailto:glassbiennalebg@gmail.com:" id="emailCordinator">glassbiennalebg@gmail.com</a> до <span class="color-red" >01.07.2017 г.</span><br><br>
                                <span class="color-red"> Не е необходимо да се попълва апликационната форма.</span>
                            <hr>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 application-form-part-one" id="change">
                    <h1 class="title-reglament">Форма за участие</h1>
                    <h3 class="appl-form-head">Лична информация</h3><br>
                <form method="POST" action="{{ URL::to('/apply') }}" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Име и фамилия*" value="{{ Request::old('name') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="text" class="form-control" id="country" name="country" placeholder="Държава*" value="{{ Request::old('country') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail*" value="{{ Request::old('email') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="tel" class="form-control" id="phone-number" name="phoneNumber" placeholder="Телефон*" value="{{ Request::old('phoneNumber') }}">
                            </div>
                        </div>
                        <h3 class="appl-form-head">Информация за творбата</h3><br>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Оригинално заглавие*" value="{{ Request::old('title') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="text" class="form-control" id="en-title" name="englishTitle" placeholder="Заглавие на английски език*" value="{{ Request::old('englishTitle') }}">
                            </div>
                        </div>
                        <h3 class="sub-title-technique">Техника*</h3>
                        <div class="form-group">

                            <ul class="columns-application-from">

                                @foreach($techniques as $technique)

                                    <li class="app-form-technique"><input type="checkbox" name="technique[]" class="rad" id="button-{{ $technique->id }}" value="{{$technique->id}}" /><label for="button-{{ $technique->id }}">{{$technique->name}}</label></li>

                                @endforeach

                            </ul>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="text" class="form-control" id="dimensions" name="dimensions" placeholder="Размери (в/ш/д)*" value="{{ Request::old('dimensions') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <textarea class="form-control" rows="3" id="installation-guide" name="installationGuide" placeholder="Насоки за поставяне*">{{ Request::old('name') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="text" class="form-control" id="year" name="year" placeholder="Година на създаване*" value="{{ Request::old('name') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 contentContactForm">
                                <input type="text" class="form-control" id="synopsis" name="synopsis" placeholder="Синопсис*" value="{{ Request::old('name') }}">
                            </div>
                        </div>

                    <div>
                        <input type="file" name="file-7" id="file-7" class="inputfile inputfile-6"/>
                        <label for="file-7"><span>Снимка на творба 1*</span><strong class="choose-span">Избери</strong></label>
                        <br>
                        <span class="max-Mb">максимум 4MB</span>

                     </div>
                    <br>
                    <div>
                        <input type="file" name="file-8" id="file-8" class="inputfile inputfile-6"/>
                        <label for="file-8"><span>Снимка на творба 2*</span><strong class="choose-span">Избери</strong></label>
                        <br>
                        <span class="max-Mb">максимум 4MB</span>
        
                    </div>
                    <div class="col-md-8 form-group content-app">
                        <p>
                           <span><input type="checkbox" required id="terms"></span>
                            <label for="terms">
                                <span>Съгласен съм творбата ми да бъде инсталирана в галерийното<br> простраство
                                    от специално подбран екип на Международното биенале на стъкло, България 2017 година.<br>
                                </span>
                            </label>
                        </p>
                    <div>
                    </div>
                    
                        <div class="form-group">
                            <div class="col-md-5" id="submitButton">
                                <button type="submit" class="contactButon">Изпрати&nbsp;<i class="fa fa-chevron-circle-right" id="fa-fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- TODO Validations for application Form - last three items --->
@endsection
