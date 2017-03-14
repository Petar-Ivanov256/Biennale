@extends('layouts.master')
@section('title')
    {{ trans('titles.partners') }}
@endsection

@section('content')
      <div class="container">
        <div class="row">
            <div class="col-md-5 firsttxt" id="change">
                <h1 class="partnersName">{{ trans('partners.make_a_donation_title') }}</h1>
                <hr class="hr1">
                <p class="p1 text-justify">
                    {{ trans('partners.make_a_donation_one') }}<br><br>
                    {{ trans('partners.make_a_donation_two') }}<br><br>
                    {{ trans('partners.make_a_donation_three') }}
                    <span><a class="emailAdress" href="mailto:glassbiennalebg@gmail.com">glassbiennalebg@gmail.com</a></span><br>
                </p>
                <h3 class="partnersName1">{{ trans('partners.careers_title') }}</h3>
                <hr>
                <p class="p1 text-justify">
                    {{ trans('partners.careers') }} <span><a class="emailAdress" href="mailto:glassbiennalebg@gmail.com">glassbiennalebg@gmail.com</a></span>
                </p>
           </div>
           <section>
            <div class="col-md-5 chashfond" id="change">
                <h3 class="partnersName1">{{ trans('partners.sponsors_and_partners') }}</h3>
                <hr>
                <h4 class="partnersName2">{{ trans('partners.general_sponsor') }}</h4><br>
                <div class="ahover">
                    <p class="gen_partner">Tianaderrah Foundation</p>&nbsp;
                </div><br>
                <h4 class="partnersName2">{{ trans('partners.main_partners') }}</h4><br>
                <div class="ahover">
                    <a href="#" id="resize">{!! HTML::image('img/partnersimg/inhom1.jpg','alt',array('width'=>190,'height'=>60)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/KrN.png','alt',array('width'=>200,'height'=>30)) !!}</a><br><br>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/eurobulsoft_logo.png','alt',array('width'=>160,'height'=>60)) !!}</a>&nbsp&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/Greenpeace.svg.png','alt',array('width'=>200,'height'=>30)) !!}</a>&nbsp;&nbsp;<br><br>
                    <a href="#">{!! HTML::image('img/partnersimg/ZZ_FOE_BG_LONG_RGB.png','alt',array('width'=>170,'height'=>50)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/AFBBG.jpg','alt',array('width'=>80,'height'=>80)) !!}</a>&nbsp;&nbsp;

                </div><br>
                <h4 class="partnersName2">{{ trans('partners.institutions_and_galleries') }}</h4><br>
                <div class="ahover">
                    <a href="#">{!! HTML::image('img/partnersimg/nbu.jpg','alt',array('width'=>110,'height'=>85)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/vtu.png','alt',array('width'=>100,'height'=>120)) !!}</a>&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/rumi1.png','alt',array('width'=>120,'height'=>130)) !!}</a>&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/Sofia.svg.png','alt',array('width'=>100,'height'=>120)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/GIM_Sofia_Logo.jpg','alt',array('width'=>100,'height'=>120)) !!}</a>&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/varna.png','alt',array('width'=>100,'height'=>120)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/CinemaCosmos_logo_bg.jpg','alt',array('width'=>100,'height'=>60)) !!}</a>&nbsp;&nbsp;
                    <a href="#">{!! HTML::image('img/partnersimg/uniart.jpg','alt',array('width'=>110,'height'=>115)) !!}</a>
                </div>
                <br>
                <h4 class="partnersName2">{{ trans('partners.media_partners') }}</h4><br>
                <div class="ahover">
                    <a href="#">{!! HTML::image('img/partnersimg/znanie_logo.jpg','alt',array('width'=>100,'height'=>20)) !!}</a>&nbsp;&nbsp;
                </div>
            </div>
            </section>
          </div>
    </div>
@endsection