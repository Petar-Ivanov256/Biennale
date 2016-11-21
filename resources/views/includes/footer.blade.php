<!DOCTYPE html>
<html>
<head>
</head>
<body>
<hr>
<footer id="BladeFooter">
    <div class="col-sm-1" id="Shape1">
        {!! HTML::image('img/logo.png') !!}
    </div>
    <div class="col-sm-2" id="Shape1">
        {!! HTML::image('img/vector.png') !!}
    </div>
    <div class="col-sm-2">
        <ul>
            <li>
                <a  href="{{ URL::to('/program')}}">Програма</a>
            </li>
            <li>
                <a href="{{ URL::to('/apply-for-attendance')}}">Форма за участие</a>
            </li>
            <li>
                <a  href="{{ URL::to('/about')}}">За нас</a>
            </li>
            <li>
                <a  href="{{ URL::to('/vision')}}">Визия</a>
            </li>
        </ul>
    </div>
    <div class="col-md-2">
        <ul>
            <li>
                <a href="#">Стипендии за бакалаври</a>
            </li>
            <li>
                <a href="#">Стипендии за магистри</a>
            </li>
            <li>
                <a href="#">Стипендии за докторанти</a>
            </li>
            <li>
                <a href="{{ URL::to('/authors')}}">Автори</a>
            </li>
        </ul>
    </div>
    <div class="col-md-1">
        <ul>
            <li>
                <a href="#">Изложби</a>
            </li>
            <li>
                <a href="#">Ателиета</a>
            </li>
            <li>
                <a href="#">Лекции</a>
            </li>
            <li>
                <a href="#">Галерия</a>
            </li>
        </ul>
    </div>
    <div class="col-md-2">
        <ul>
            <li>
                <a href="{{ URL::to('/about')}}">За нас</a>
            </li>
            <li>
                <a href="{{ URL::to('/partners')}}">Партньори</a>
            </li>
            <li>
                <a href="{{ URL::to('/contact')}}">Контакти</a>
            <li>
                <a href="{{ URL::to('/archive')}}">Архиви</a>
            </li>
        </ul>
    </div>
    <div class="col-md-2">
        <form>
            <label for="email" id="Newsletter">Месечен бюлетин</label><br>
            <input type="email" name="email" placeholder="e-mail" id="e-mail">
            <input type="submit" value="Запиши се">
        </form>

    </div>
</footer>
</body>
</html>