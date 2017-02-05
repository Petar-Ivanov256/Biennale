@extends('layouts.master')
@section('title')
    {{ trans('titles.masters') }}
    @endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-sm-1 SideDate">
                <p>27.09-02.10</p>
            </div>
        </div>
    </div>
    <div  class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-sm-1">
                <p id="SuzIstoria">Създаваме история</p>
                <p id="purvoMezdunarodno">Първото международно<br>биенале за стъкло<br>в България</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 first-paragraph" id="change">
                <h1 class="bachelor-header">Обща информация</h1>
                <hr>
                <h4 class="bachelor-header2">
                    Стратегическа цел на "Международно биенале на стъклото" е развитието на художественото стъкло в България
                </h4>
                <p class="first-p-paragraph text-justify">
                    Стратегическа цел на Международно биенале на стъклото е развитието на художественото стъкло в България. За постигането на тази цел,
                    в хармония с нашата визия,ние се стремим да инвестираме в развитието на знания и умения на изграждащи се автори, както и ученици от
                    средните училища с потенциал.Затова предоставяме стипендии за обучението им в специалностите по стъкло в Нов български университет.
                    По този начин даваме възможност за разширяване на познанията в областта, което от своя страна е насочено към възможността за нови полета
                    за изява на наши автори и на други международни форуми. Сътрудничеството ни с училища, академии, университети, фабрики и ателиета по света
                    и у нас, е в хармония с нашите възгледи за развитие на потенциала на настоящи и бъдещи автори. Партньорствата ни с образователни
                    институции включват: Нов български университет, Национална художествена академия, Национална гимназия за приложни изкуства „Св. Лука“, Великотърновски университет „Св. Св. Кирил и Методий“,
                    Национална академия за театрално и филмово изкуство „Кръстьо Сарафов“, Akademie - VOŠ, Gymn. a SOŠUP Světlá nad Sázavou и др.<br><br>
                    Международно биенале на стъклото предлага три стипендии (две пълни – за целия курс на обучение и една частична), за специалностите по стъкло в НБУ, в трите степени на
                    образование – бакалавър, магистър и доктор. Те ще бъдат разпределени на заслужили ученици/студенти, които ще бъдат избрани от международно жури, след спазване на определени изисквания от страна на кандидатите.
                    Стипендиите се превеждат по сметка на НБУ, а наградените не могат да изискват паричен еквивалент на стипендията. Стипендиите ще се присъждат при всяко провеждане на биеналето, т.е. на всеки две години, но за получаването
                    им по време на курса на обучение е необходимо студентът да спазва сроковете и правилника на университета, както и да се развива в областта и да участва ежегодно в различни международни форуми.
                </p>
            </div>
            <div class="col-md-5 second-paragraph" id="change">
                <h2 class="bachelor-header">Условия и минали победители</h2><br>
                <button class="learn-more" id="bnt">Правила</button>
                <button class="learn-more">Жури</button>
                <button class="learn-more">Победители</button><br><br>
                <p class="second-p-paragraph text-justify" id="firstscholarpar">
                        <span class="bachelor-header2">
                        Правила за участие в конкурс за пълна стипендия в специалност „Стъкло“, с продължителност от три семестъра,
                        образователна степен <span class="bac">МАГИСТЪР</span> в Нов български университет за периода 2017 – 2019 г.
                    </span><br><br>
                    <span class="numb-colour">1.</span> Творбата да бъде дипломен проект, защитен успешно или творчески проект, ако кандидатът не е завършил специалностт в областта на стъклото, но ако е завършил специалност,
                    обвързана с художественото стъкло, следва да представи дипломен проект.<br><br>
                    <span class="numb-colour">2.</span> Творбата да е представена от фотографии с характеристики: 300 DPI минимум, над 3000 пиксела по широката страна, препоръчително на бял фон.<br><br>
                    <span class="numb-colour">3.</span> Да са описани размери, техника и име на автора.<br><br>
                    <span class="numb-colour">4.</span> Да е описана концепция/синопсис или техника на осъществяване на процеса по изработката в свободен текст от 200 - 300 думи, в pdf файл.<br><br>
                    <span class="numb-colour">5.</span> Да се представи творческа автобиография (на български и английски език).<br><br>
                    <span class="numb-colour">6.</span> Да се представи мотивационно писмо (на български и английски език).<br><br>
                    <span class="numb-colour">7.</span> Да се представи портфолио в дигитален формат /един PDF файл/.<br><br>
                    <span class="imp-span">Гореспоменатите снимки и документи се изпращат на електронна поща:<a href="mailto:glassbiennalebg@gmail.com:" id="emailCordinator">glassbiennalebg@gmail.com</a> до 15.09.2017 г.,
                       след тази дата ще се състои комисията за избиране на стипендиант.</span><br><br>
                    За да получи стипендия, победителят в конкурса трябва да положи успешно кандидат-студентски изпит в Департамент "Изящни изкуства",
                    за да бъде приет в Нов български университет в трети семестър по договор.<br><br>
                    Стипендията се превежда директно на сметката на НБУ, като стипендиантът трябва да представя всеки семестър уверение за записан семестър на Екипа на биеналето.<br><br>
                    Ако спечелилият първо място, не положи успешно или не се яви на кандидат-студентски изпит, наградата се присъжда на предварително оповестена първа резерва.
                    Ако първата резерва не положи успешно или не се яви на кандидат-студентски изпит, наградата се присъжда на предварително оповестена втора резерва.
                    При неуспешно положени кандидат-студентски изпит или неявяване на такива и от втората резерва, награда не се присъжда за съответната година и сумата остава в полза на Екипа на биеналето,
                    който решава как да я оползотвори.
                </p>
                <div class="second-p-paragraph">
                    <span class="bachelor-span">доц. д-р Константин Вълчев</span>
                    <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>
                    <span class="bachelor-span">Дана Замечникова</span>
                    <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>
                    <span class="bachelor-span">Милан Крайчек</span>
                    <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>
                    <span class="bachelor-span">Юрий Василев</span>
                    <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>
                    <span class="bachelor-span">гл. ас. д-р Владимир Димитров</span>
                    <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>
                    <span class="bachelor-span">д-р Анжела Данева</span>
                    <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>
                    <span class="bachelor-span">Алексей Христов</span>
                    <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>
                </div>
                <div class="second-p-paragraph">
                    <span class="bachelor-span">Маритин Иванов<br><span class="full-scholarship">пълна стипендия</span></span>
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
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection