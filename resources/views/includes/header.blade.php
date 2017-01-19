<nav class="navbar navbar-default" >
        <div class="container">
         <div class="navbar-header col-md-11">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#targetNav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="logo col-sm-2">&nbsp;</div>
        <div class="collapse navbar-collapse col-md-12" id="targetNav">
            <ul class="nav navbar-nav myNavbar" id="navBar" >
                <li class="dropdown"><a  class="Bien" href="{{ URL::to('/')}}">Бианале</a>
                    <ul class="dropdown-menu" id="dropdown-content">
                        <li>
                            <a class="Program subMenu" href="{{ URL::to('/program')}}">Програма</a>
                        </li>
                        <li>
                            <a class="AttendencyForm subMenu" href="{{ URL::to('/apply-for-attendance')}}">{{ trans('header.form') }}</a>
                        </li>
                        <li>
                            <a class="About subMenu" href="{{ URL::to('/about')}}">{{ trans('header.about') }}</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav myNavbar" id="navBar">
                <li>
                    <a id="mainMenuScholer" class="Schlarships" href="#">Стипендии</a>
                    <ul class="dropdown-menu" id="dropdown-content">
                        <li class="diplay-horizontal"> <a class="subMenu" href="{{ URL::to('/bachelor')}}">Бакалавър</a></li>
                        <li class="diplay-horizontal"> <a class="subMenu" href="{{ URL::to('/master')}}">Магистър</a></li>
                        <li class="diplay-horizontal"> <a class="subMenu" href="{{ URL::to('/phd')}}">Докторант</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav myNavbar" id="navBar">
                <li>
                    <a class="mainMenuComponents" href="{{ URL::to('/authors')}}">Автори</a>
                </li>
                <li>
                    <a class="mainMenuComponents" href="{{ URL::to('/events')}}">Събития</a>
                </li>
                <li>
                    <a class="mainMenuComponents" href="{{ URL::to('/partners')}}">Партньори</a>
                </li>
                <li>
                    <a class="mainMenuComponents"  href="{{ URL::to('/archive')}}">Архив</a>
                </li>
                <li>
                    <a class="mainMenuComponents"  href="{{ URL::to('/contact')}}">Контакти</a>
                </li>
            </ul>
            <ul class="nav navbar-nav myNavbar" id="IconsMenuComponents">
                @if(Auth::check())
                    <li><a href="#">{{ Auth::user()->name }}</a></li>

                    @if (Auth::user()->isAdmin())
                        <li><a href="{{ URL::to('/admin') }}">Админ</a></li>
                    @endif

                    <li><a href="{{ URL::to('/logout') }}">Изход</a></li>
                @else
                    <li><a href="{{ URL::to('/register') }}">Регистрация</a></li>
                    <li><a href="{{ URL::to('/signin') }}">Вход</a></li>
                @endif


                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                <li><a href={{url('https://www.facebook.com/')}}><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href={{url('https://www.instagram.com/')}}><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href={{url('https://www.pinterest.com/')}}><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            </ul>
            <ul class="language_bar_chooser nav navbar-nav myNavbar" id="navBar">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
</nav>