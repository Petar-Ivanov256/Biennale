@extends('layouts.master')
@section('title')
    Партньори
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
                <p id="SuzIstoria">Създаваме<br>история</p>
                <p id="purvoMezdunarodno">Първото международно<br>биенале за стъкло<br>в България</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-lg-12">
            <div class="col-xs-12 col-sm-6 col-lg-5 firsttxt">
                <h1 class="partnersName">Направи дарение</h1>
                <hr class="hr1">
                <p class="p1">
                    Имате ли отношение към съвременното изкуство? Вярвате ли, че изкуство
                    има силата отвори сърцата и съзнанието ни? Искате ли да подкрепите
                    талантливи артисти да създават нови творби? И най-вече искатели в България
                    да се развие по-разнообразен културен живот?<br><br>
                    С вашата подкрепа Международното биенале на стъклото ще организира незабравими
                    събития. Нашият екип влага цялата енергия и генерира нови идеи, чрез които да
                    разнообрази творческата сцена в София и България. Стани част от това приключение!<br><br>
                    За повече информация как може да ни подкрепите, моля пишете ни на
                    <span><a class="emailAdress" href="mailto:glassbiennalebg@gmail.com">glassbiennalebg@gmail.com</a></span> или се обадете на <a href="tel:+359889567488" class="telefonCordinator">+359 889 567 488</a><br>
                </p>
                <h3 class="partnersName1">Възможности</h3>
                <hr>
                <p class="p1">
                    Ако искате да научите повече за възможността да станете част от нашия екип, който ще
                    организира следващото биенале през 2019 година, моля пишете ни на  <span><a class="emailAdress" href="mailto:glassbiennalebg@gmail.com">glassbiennalebg@gmail.com</a></span>
                </p>
           </div>
           <section>
            <div class="col-xs-12 col-sm-6 col-md-5 chashfond">
                <h3 class="partnersName1">Спонсори и партньори</h3>
                <hr>
                <h4 class="partnersName2">Главни партньори</h4><br>
                <div class="ahover">
                    <a href="#">{!! HTML::image('img/partnersimg/americanfoundation.jpg','alt',array('width'=>60,'height'=>60)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/vector.png') !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/Forbeslogo.jpg','alt',array('width'=>100,'height'=>40)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/hugoboss.jpg','alt',array('width'=>100,'height'=>50)) !!}</a>&nbsp;&nbsp;
                </div><br>
                <h4 class="partnersName2">Инстиуции</h4><br>
                <div class="ahover">
                    <a href="#" id="resize">{!! HTML::image('img/partnersimg/corporatelogo.jpg','alt',array('width'=>100,'height'=>30)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/canonlogo.jpg','alt',array('width'=>100,'height'=>50)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/Forbeslogo.jpg','alt',array('width'=>100,'height'=>40)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/hugoboss.jpg','alt',array('width'=>100,'height'=>50)) !!}</a>&nbsp;&nbsp;<br><br>
                    <a href="#">{!! HTML::image('img/partnersimg/carlogo.jpg','alt',array('width'=>100,'height'=>100)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/Intellogo.jpg','alt',array('width'=>80,'height'=>80)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/salat.jpg','alt',array('width'=>100,'height'=>50)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/saltStack.jpg','alt',array('width'=>100,'height'=>50)) !!}</a>&nbsp;&nbsp;
                </div><br>
                <h4 class="partnersName2">Медийни партньори</h4><br>
                <div class="ahover">
                    <a href="#">{!! HTML::image('img/partnersimg/corporatelogo.jpg','alt',array('width'=>100,'height'=>30)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/canonlogo.jpg','alt',array('width'=>100,'height'=>50)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/Forbeslogo.jpg','alt',array('width'=>100,'height'=>40)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/hugoboss.jpg','alt',array('width'=>100,'height'=>50)) !!}</a>&nbsp;&nbsp;
                </div>
            </div>
            </section>
          </div>
    </div>
@endsection