<nav class="navbar navbar" role="navigation" >
    <div class="container">
        <div class="logo col-md-2">&nbsp;</div>
        <div class="navbar-header col-md-10">
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav" id="navBar" >
                    <li class="dropdown"><a  class="Bien" href="{{ URL::to('/')}}">Бианале</a>
                        <ul class="dropdown-menu" id="dropdown-content">

                            <li>
                                <a id="subMenu" class="Program" href="{{ URL::to('/program')}}">Програма</a>
                            </li>
                            <li>
                                <a id="subMenu" class="AttendencyForm"href="{{ URL::to('/apply-for-attendance')}}">Форма за участие</a>
                            </li>
                            <li>
                                <a id="subMenu" class="About" href="{{ URL::to('/about')}}">За нас</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav" id="navBar">
                    <li>
                        <a id="mainMenuComponents" class="Schlarships"href="{{ URL::to('/scholarships')}}">Стипендии</a>
                        <ul class="dropdown-menu" id="dropdown-content">
                            <li> <a id="subMenu" href="#">Бакалавър</a></li>
                            <li> <a id="subMenu" href="#">Магистър</a></li>
                            <li> <a id="subMenu" href="#">Докторант</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav" id="navBar">
                    <li>
                        <a id="mainMenuComponents" class="Authors"href="{{ URL::to('/authors')}}">Автори</a>
                    </li>
                    <li>
                        <a id="mainMenuComponents" class="Events"href="{{ URL::to('/events')}}">Събития</a>
                    </li>
                    <li>
                        <a id="mainMenuComponents" class="Partners" href="{{ URL::to('/partners')}}">Партньори</a>
                    </li>
                    <li>
                        <a id="mainMenuComponents" class="Archives" href="{{ URL::to('/archive')}}">Архиви</a>
                    </li>
                    <li>
                        <a id="mainMenuComponents" class="Contacts" href="{{ URL::to('/contact')}}">Контакти</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right" id="IconsMenuComponents">
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
            </div>
        </div>
    </div>
</nav>