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
                <div class="ahover size_img_partners_f">
                    <a href="http://www.nbu.bg/en" target="_blank">{!! HTML::image('img/partnersimg/nbu.png','alt',array('width'=>110,'height'=>85)) !!}</a>&nbsp;&nbsp;
                    <a href="http://afbulgaria.org/" target="_blank">{!! HTML::image('img/partnersimg/AFBBG3.png','alt',array('width'=>80,'height'=>80)) !!}</a>&nbsp;&nbsp;
                    <a href="http://momkasglass.com/bg/" target="_blank">{!! HTML::image('img/partnersimg/Momka.png','alt',array('width'=>70,'height'=>70)) !!}</a>&nbsp;&nbsp;
                    <a href="http://www.mzv.cz/sofia/bg/index.html" target="_blank">{!! HTML::image('img/partnersimg/lg_m.jpg','alt',array('width'=>227,'height'=>48)) !!}</a>&nbsp;&nbsp;
                    <a href="http://inhomglass.com/" target="_blank" id="resize">{!! HTML::image('img/partnersimg/inhom1.png','alt',array('width'=>170,'height'=>52)) !!}</a>&nbsp;&nbsp;
                    <a href="http://www.kristian-neiko.com/" target="_blank">{!! HTML::image('img/partnersimg/KrN.png','alt',array('width'=>200,'height'=>30)) !!}</a>&nbsp;&nbsp;
                    <a href="http://www.eurobulsoft.com/" target="_blank">{!! HTML::image('img/partnersimg/eurobulsoft_logo.png','alt',array('width'=>190,'height'=>60)) !!}</a>&nbsp;&nbsp;
                    <a href="http://www.greenpeace.org/bulgaria/bg/" target="_blank">{!! HTML::image('img/partnersimg/Greenpeace.svg.png','alt',array('width'=>200,'height'=>30)) !!}</a>&nbsp;&nbsp;
                    <a href="http://www.zazemiata.org/v1/" target="_blank">{!! HTML::image('img/partnersimg/ZZ_FOE_BG_LONG_RGB.png','alt',array('width'=>170,'height'=>50)) !!}</a>&nbsp;&nbsp;
                    <a href="http://www.ecopack.bg/en/" target="_blank">{!! HTML::image('img/partnersimg/ekopac.png','alt',array('width'=>170,'height'=>50)) !!}</a>&nbsp;&nbsp;
                </div><br>
                <h4 class="partnersName2">{{ trans('partners.institutions_and_galleries') }}</h4><br>
                <div class="ahover size_img_partners_s">
                    <a href="http://www.uni-vt.bg/bul/" target="_blank">{!! HTML::image('img/partnersimg/vtu.png','alt',array('width'=>100,'height'=>120)) !!}</a>&nbsp;
                    <a href="http://ngpisvetiluka.com/" target="_blank">{!! HTML::image('img/partnersimg/rumi1.png','alt',array('width'=>120,'height'=>130)) !!}</a>&nbsp;
                    <a href="http://www.sofia.bg/" target="_blank">{!! HTML::image('img/partnersimg/Sofia.svg.png','alt',array('width'=>100,'height'=>120)) !!}</a>&nbsp;&nbsp;
                    <a href="http://www.sofiahistorymuseum.bg/" target="_blank">{!! HTML::image('img/partnersimg/GIM_Sofia_Logo.png','alt',array('width'=>100,'height'=>100)) !!}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="http://www.varna.bg/" target="_blank">{!! HTML::image('img/partnersimg/varna.png','alt',array('width'=>90,'height'=>120)) !!}</a>&nbsp;&nbsp;
                    <a href="https://culturalcosmos.com/" target="_blank">{!! HTML::image('img/partnersimg/CinemaCosmos_logo_bg.png','alt',array('width'=>100,'height'=>60)) !!}</a>&nbsp;&nbsp;
                    <a href="http://www.uniart.bg/" target="_blank">{!! HTML::image('img/partnersimg/uniart3.png','alt',array('width'=>100,'height'=>120)) !!}</a>&nbsp;
                    <a href="http://www.chervenatatochka.bg/en/" target="_blank">{!! HTML::image('img/partnersimg/chervenatochka.png','alt',array('width'=>115,'height'=>40)) !!}</a>
                    <a href="http://sofia.czechcentres.cz/" target="_blank">{!! HTML::image('img/partnersimg/czcenter.png','alt',array('width'=>130,'height'=>40)) !!}</a>&nbsp;&nbsp;
                    <a href="http://rgfoundation.blogspot.bg/" target="_blank">{!! HTML::image('img/partnersimg/logoR.png','alt',array('width'=>170,'height'=>45)) !!}</a>&nbsp;&nbsp;
                    <a href="http://galeriemeridian.cz/" target="_blank" class="gen_partner">{!! HTML::image('img/partnersimg/gmer.png','alt',array('width'=>145,'height'=>45)) !!}</a>&nbsp;&nbsp;
                    <a href="https://www.nationalartgallerybg.org/" target="_blank" class="gen_partner">{!! HTML::image('img/partnersimg/NHG_logo3.png','alt',array('width'=>195,'height'=>80)) !!}</a>&nbsp;&nbsp;
                </div>
                <br>
                <h4 class="partnersName2">{{ trans('partners.media_partners') }}</h4><br>
                <div class="ahover">
                    <a href="http://knowledge.bg/ " target="_blank">{!! HTML::image('img/partnersimg/znanie_logo.png','alt',array('width'=>133,'height'=>30)) !!}</a>&nbsp;&nbsp;
                    <a href="http://bnr.bg/hristobotev" target="_blank">{!! HTML::image('img/partnersimg/bnr-hr.png','alt',array('width'=>133,'height'=>45)) !!}</a>&nbsp;&nbsp;
                </div>
            </div>
            </section>
          </div>
    </div>
@endsection