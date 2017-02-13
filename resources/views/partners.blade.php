@extends('layouts.master')
@section('title')
    {{ trans('titles.partners') }}
@endsection

@section('content')
      <div class="container">
        <div class="row">
            <div class="col-md-5 firsttxt" id="change">
                <h1 class="partnersName">Направи дарение</h1>
                <hr class="hr1">
                <p class="p1 text-justify">
                    Имате ли отношение към съвременното изкуство? Вярвате ли, че изкуство
                    има силата отвори сърцата и съзнанието ни? Искате ли да подкрепите
                    талантливи артисти да създават нови творби? И най-вече искатели в България
                    да се развие по-разнообразен културен живот?<br><br>
                    С вашата подкрепа Международното биенале на стъклото ще организира незабравими
                    събития. Нашият екип влага цялата енергия и генерира нови идеи, чрез които да
                    разнообрази творческата сцена в София и България. Стани част от това приключение!<br><br>
                    За повече информация как може да ни подкрепите, моля пишете ни на
                    <span><a class="emailAdress" href="mailto:glassbiennalebg@gmail.com">glassbiennalebg@gmail.com</a></span><br>
                </p>
                <h3 class="partnersName1">Възможности</h3>
                <hr>
                <p class="p1 text-justify">
                    Ако искате да научите повече за възможността да станете част от нашия екип,
                    моля пишете ни на  <span><a class="emailAdress" href="mailto:glassbiennalebg@gmail.com">glassbiennalebg@gmail.com</a></span>
                </p>
           </div>
           <section>
            <div class="col-md-5 chashfond" id="change">
                <h3 class="partnersName1">Спонсори и партньори</h3>
                <hr>
                <h4 class="partnersName2">Главен спонсор</h4><br>
                <div class="ahover">
                    <p class="gen_partner">Tianaderrah Foundation</p>&nbsp;
                </div><br>
                <h4 class="partnersName2">Главни партньори</h4><br>
                <div class="ahover">
                    <a href="#" id="resize">{!! HTML::image('img/partnersimg/inhom.jpg','alt',array('width'=>160,'height'=>60)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/KrN.png','alt',array('width'=>200,'height'=>30)) !!}</a><br><br>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/eurobulsoft_logo.png','alt',array('width'=>160,'height'=>60)) !!}</a>&nbsp&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/Greenpeace.svg.png','alt',array('width'=>200,'height'=>30)) !!}</a>&nbsp;&nbsp;<br><br>
                    <a href="#">{!! HTML::image('img/partnersimg/ZZ_FOE_BG_LONG_RGB.png','alt',array('width'=>170,'height'=>50)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/americanfoundation.jpg','alt',array('width'=>80,'height'=>80)) !!}</a>&nbsp;&nbsp;

                </div><br>
                <h4 class="partnersName2">Институции и галерии</h4><br>
                <div class="ahover">
                    <a href="#">{!! HTML::image('img/partnersimg/nbu.jpg','alt',array('width'=>110,'height'=>85)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/vtu.png','alt',array('width'=>100,'height'=>120)) !!}</a>&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/rumi1.png','alt',array('width'=>120,'height'=>130)) !!}</a>&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/Sofia.svg.png','alt',array('width'=>100,'height'=>120)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/GIM_Sofia_Logo.jpg','alt',array('width'=>100,'height'=>120)) !!}</a>&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/varna.png','alt',array('width'=>100,'height'=>120)) !!}</a>&nbsp;&nbsp;

                </div>
            </div>
            </section>
          </div>
    </div>
@endsection