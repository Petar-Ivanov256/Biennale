@extends('layouts.master')
@section('title')
    {{ trans('titles.masters') }}
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
                    за да бъде приет в Нов български университет.<br><br>
                    Стипендията се превежда директно на сметката на НБУ, като стипендиантът трябва да представя всеки семестър уверение за записан семестър на Екипа на биеналето.<br><br>
                    Ако спечелилият първо място, не положи успешно или не се яви на кандидат-студентски изпит, наградата се присъжда на предварително оповестена първа резерва.
                    Ако първата резерва не положи успешно или не се яви на кандидат-студентски изпит, наградата се присъжда на предварително оповестена втора резерва.
                    При неуспешно положени кандидат-студентски изпит или неявяване на такива и от втората резерва, награда не се присъжда за съответната година и сумата остава в полза на Екипа на биеналето,
                    който решава как да я оползотвори.
                </p>
                <div class="second-p-paragraph">
                    <span class="bachelor-span">доц. д-р Константин Вълчев</span>
                    <span class="picspan"> {!! HTML::image('img/scholarships/konstantin valchev_patron.jpg') !!}</span><br><br>
                    <span class="bachelor-span">Зденек Лхотски</span>
                    <span class="picspan"> {!! HTML::image('img/scholarships/zdenek-lhotsky.jpg') !!}</span><br><br>
                    <span class="bachelor-span">Дана Замечникова</span>
                    <span class="picspan">  {!! HTML::image('img/images.png') !!}</span><br><br>
                    <span class="bachelor-span">Милан Крайчек</span>
                    <span class="picspan"> {!! HTML::image('img/scholarships/milan-krajicek.jpg') !!}</span><br><br>
                   <!-- <span class="bachelor-span">гл. ас. д-р Владимир Димитров</span>
                    <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>
                    <span class="bachelor-span">д-р Анжела Данева</span>
                    <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>
                    <span class="bachelor-span">Алексей Христов</span>
                    <span class="picspan"> {!! HTML::image('img/scholarships/pic1.jpg') !!}</span><br><br>-->
                </div>
                <div class="second-p-paragraph">
                   <!-- <span class="bachelor-span">Маритин Иванов<br><span class="full-scholarship">пълна стипендия</span></span>
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