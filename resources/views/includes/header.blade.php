<nav class="navbar navbar" role="navigation" >
    <div class="container">
        <div class="logo col-md-2">&nbsp;</div>
        <div class="navbar-header col-md-10">
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav" id="navBar" >
                    <li class="dropdown"><a  class="Bien" href="{{ URL::to('/')}}">Бианале</a>
                        <ul class="dropdown-menu" id="dropdown-content">

                            <li>
                                <a class="Program" href="{{ URL::to('/program')}}">Програма</a>
                            </li>
                            <li>
                                <a class="AttendencyForm"href="{{ URL::to('/apply-for-attendance')}}">Форма за участие</a>
                            </li>
                            <li>
                                <a class="About" href="{{ URL::to('/about')}}">За нас</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav" id="navBar">
                    <li>
                        <a class="Schlarships"href="{{ URL::to('/scholarships')}}">Стипендии</a>
                        <ul class="dropdown-menu" id="dropdown-content">
                            <li>  <a href="#">Бакалавър</a></li>
                            <li> <a href="#">Магистър</a></li>
                            <li> <a href="#">Докторант</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav" id="navBar">
                    <li>
                        <a class="Authors"href="{{ URL::to('/authors')}}">Автори</a>
                    </li>
                    <li>
                        <a class="Events"href="{{ URL::to('/events')}}">Събития</a>
                    </li>
                    <li>
                        <a class="News"href="{{ URL::to('/news')}}">Новини</a>
                    </li>
                    <li>
                        <a class="Partners" href="{{ URL::to('/partners')}}">Партньори</a>
                    </li>
                    <li>
                        <a class="Archives" href="{{ URL::to('/archive')}}">Архиви</a>
                    </li>
                    <li>
                        <a class="Contacts" href="{{ URL::to('/contact')}}">Контакти</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right" id="navBar">
                    <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>