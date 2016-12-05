@extends('layouts.master')
@section('title')
    Партньори
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="SideDate">
                <p>27.09-02.10</p>
            </div>
            <div  class="col-lg-1">
                <p id="SuzIstoria">Създаваме история</p><br><br>
                <p id="purvoMezdunarodno">Първото международно биенале за стъкло в България</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
        <div class="col-md-5">
            <h3 class="partnersName1">Направи дарение</h3>
            <hr>
            <p>
                Имате ли отношение към съвременното изкуство? Вярвате ли, че изкуство
                има силата отвори сърцата и съзнанието ни? Искате ли да подкрепите
                талантливи артисти да създават нови творби? И най-вече искатели в България
                да се развие по-разнообразен културен живот?<br><br>
                С вашата подкрепа Международното биенале на стъклото ще организира незабравими
                събития. Нашият екип влага цялата енергия и генерира нови идеи, чрез които да
                разнообрази творческата сцена в София и България. Стани част от това приключение!<br><br>
                За повече информация как може да ни подкрепите, моля пишете ни на
                <span><a class="emailAdress" href="#">glassbiennalebg@gmail.com</a></span> или се обадете на <span class="telfonNomer">+359 889 567 488.</span>
            </p>
        </div>
            <div class="col-md-6">
                <h3>Възможности</h3>
                <hr>
                <p>
                    Ако искате да научите повече за възможността да станете част от нашия екип, който ще
                    организира следващото биенале през 2019 година, моля пишете ни на  <span><a class="emailAdress" href="#">glassbiennalebg@gmail.com</a></span>
                </p>
            </div>
            <div class="col-md-5">
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
      </div>
    </div>
@endsection