<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>
<div class="container-fluid">
    <div class="navbar-header">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="{{ URL::to('/')}}">Бианале
                    <span class="caret"></span></a>
                <ul  class="dropdown-menu" id="drop">
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
            <li>
                <a href="{{ URL::to('/scholarships')}}">Стипендии</a>
            </li>
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
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span></a></li>
        </ul>
    </div>
</div>
<div>
</div>
</body>
</html>