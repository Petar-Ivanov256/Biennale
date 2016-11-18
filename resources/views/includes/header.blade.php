<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>
<div class="container-fluid">
    <div class="navbar-header">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav" id="navBar" >
            <li class="dropdown"><a  class="Bien" href="{{ URL::to('/')}}">Бианале</a>
                <ul class="dropdown-menu" id="dropdown-content">

                    <li>
                        <a href="{{ URL::to('/program')}}">Програма</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/terms')}}">Регламент</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/apply-for-attendance')}}">Форма за участие</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/about')}}">За нас</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/vision')}}">Визия</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav" id="navBar">
            <li>
                <a href="{{ URL::to('/scholarships')}}">Стипендии</a>
                <ul class="dropdown-menu" id="dropdown-content">
                    <li>  <a href="#">Бакалавър</a></li>
                    <li> <a href="#">Магистър</a></li>
                    <li> <a href="#">Докторант</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav" id="navBar">
            <li>
                <a href="{{ URL::to('/authors')}}">Автори</a>
            </li>
            <li>
                <a href="{{ URL::to('/events')}}">Събития</a>
            </li>
            <li>
                <a href="{{ URL::to('/news')}}">Новини</a>
            </li>
            <li>
                <a href="{{ URL::to('/partners')}}">Партньори</a>
            </li>
            <li>
                <a href="{{ URL::to('/archive')}}">Архиви</a>
            </li>
            <li>
                <a href="{{ URL::to('/contact')}}">Контакти</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right" id="navBar">
            <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span></a></li>
        </ul>
    </div>
</div>
<div>
</div>

</body>
</html>