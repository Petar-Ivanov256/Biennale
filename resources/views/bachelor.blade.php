@extends('layouts.master')
@section('title')
    {{ trans('titles.bachelor') }}
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
            <div class="col-md-5 first-paragraph" id="change">
                    <h1 class="bachelor-header">Обща информация</h1>
                    <hr>
                    <h4 class="bachelor-header2">
                        Стратегическа цел на "Международно биенале на стъклото" е развитието на художественото стъкло в България
                    </h4>
                    <p class="first-p-paragraph text-justify">
                        Стратегическа цел на Международно биенале на стъклото е развитието на художественото стъкло в България.
                        За постигането на тази цел, в хармония с нашата визия, ние се стремим да инвестираме в развитието на
                        знания и умения на изграждащи се автори, както и ученици от средните училища с потенциал. Затова предоставяме
                        стипендии за обучението им в специалностите по стъкло в Нов български университет. По този начин даваме възможност
                        за разширяване на познанията в областта, което от своя страна е насочено към възможността за нови полета за изява на наши автори и на други международни форуми.
                        Сътрудничеството ни с училища, академии, университети, фабрики и ателиета по света и у нас, е в хармония с нашите възгледи за развитие на потенциала на настоящи и бъдещи автори.<br><br>
                        Международно биенале на стъклото предлага три стипендии (две пълни – за целия курс на обучение и една частична), за специалностите в областта на художественото стъкло в НБУ,
                        в трите степени на образование – бакалавър, магистър и доктор. Те ще бъдат разпределени на заслужили ученици/студенти, които ще бъдат избрани от международно жури, след спазване
                        на определени изисквания от страна на кандидатите. Стипендиите се превеждат по сметка на НБУ, а наградените не могат да изискват паричен еквивалент на стипендията. Стипендиите ще
                        се присъждат при всяко провеждане на биеналето, т.е. на всеки две години, но за получаването им по време на курса на обучение е необходимо студентът да спазва сроковете и правилника
                        на университета, както и да се развива в областта и да участва ежегодно в различни национални и международни форуми.
                    </p>
                </div>
                <div class="col-md-6 second-paragraph" id="change">
                    <h2 class="bachelor-header">Условия и минали победители</h2><br>
                    <button class="learn-more" id="bnt" onclick="setColor();">Правила</button>
                    <button class="learn-more">Жури</button>
                    <button class="learn-more">Победители</button><br><br>
                    <p class="second-p-paragraph text-justify" id="firstscholarpar">
                          <span class="bachelor-header2">
                        Правила за участие в конкурс за пълна стипендия в специалност „Стъклото в изкуството и дизайна“, с прием в трети семестър по
                        договор, образователна степен <span class="bac">БАКАЛАВЪР</span>
                        в Нов български университет за периода 2017 – 2020 г.
                    </span><br><br>
                        <span class="numb-colour">1.</span> Творбата да бъде дипломен проект, защитен успешно през учебната 2016-2017 година в Национална гимназия за приложни изкуства „Св. Лука“, специалност „Силикатен дизайн“.<br><br>
                        <span class="numb-colour">2.</span> Творбата да е представена от фотографии с характеристики: 300 DPI минимум, над 3000 пиксела по широката страна, препоръчително на бял фон.<br><br>
                        <span class="numb-colour">3.</span> Да са описани размери, техника и име на автора.<br><br>
                        <span class="numb-colour">4.</span> Да е описана концепция/синопсис или техника на осъществяване на процеса по изработката в свободен текст от 200 - 300 думи, в pdf файл.<br><br>
                    <span class="imp-span">Гореспоменатите снимки и документи се изпращат на електронна поща: <a href="mailto:glassbiennalebg@gmail.com:" id="emailCordinator">glassbiennalebg@gmail.com</a> до 01.06.2017 г., след тази дата ще се състои комисията за избиране на стипендиант.</span></br><br>
                    За да получи стипендия, победителят в конкурса трябва да положи успешно кандидат-студентски изпит - ТОП и интервю в Департамент "Изящни изкуства", за да бъде приет в Нов български университет
                    в трети семестър по договор.<br><br>
                    <span>Стипендията се превежда директно на сметката на НБУ, като стипендиантът трябва да представя всеки семестър уверение за записан семестър на Екипа на биеналето.
                        По време на обучението студентът трябва да завърши пълен курс на обучение в специалността, да е активен и да взима успешно изпитите си.</span><br><br>
                    Ако спечелилият първо място, не положи успешно или не се яви на кандидат-студентски изпити, наградата се присъжда на предварително оповестена първа резерва.
                    Ако първата резерва не положи успешно или не се яви на кандидат-студентски изпити, наградата се присъжда на предварително оповестена втора резерва. При неуспешно положени
                    кандидат-студентски изпити или неявяване на такива и от втората резерва, награда не се присъжда за съответната година и сумата остава в полза на Екипа на биеналето, който решава как да я оползотвори.
                    </p>
                    <div class="second-p-paragraph">
                        <span class="bachelor-span">доц. д-р Константин Вълчев</span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>
                        <span class="bachelor-span">Лилия Балева</span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>
                        <span class="bachelor-span">гл. ас. д-р Владимир Димитров</span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>
                        <span class="bachelor-span">Александра Велева</span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>
                        <span class="bachelor-span">София-Хара Хадзопулу</span>
                        <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>
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