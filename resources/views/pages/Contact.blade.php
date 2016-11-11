<!doctype html>
<html>
<head>
    <title>Contact</title>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div>
        <!-- main content -->
        <div>
            <form id="contact_form" action="#" method="post">
                <div class="row">
                    <label for="name">Your Name</label><br>
                    <input id="name" class="yourName" name="name" type="text" placeholder="Enter your name">
                </div>
                <div class="row">
                    <label for="email">Your E-mail</label><br>
                    <input id="email" class="yourEmail" name="email" type="email" placeholder="Enter your E-mail">
                </div>
                <div class="row">
                    <label for="Message">Your Message</label><br>
                    <textarea id="Message" class="yourMassage" name="message" cols="70" rows="10"></textarea><br>
                </div>
                <div class="row">
                    <label>Attach File</label><br>
                    <input id="submit_file" type="file" name="file"><br>
                </div>
                <div class='container'>
                    <!--TODO validations and snapchats
                     <label for='scaptcha' >Enter the code above here:</label>
                    <input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>
                    <span id='contactus_scaptcha_errorloc' class='error'></span>
                    <div class='short_explanation'>Can't read the image?
                     <a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.</div>-->
                </div>
                <input id="submit_button" type="submit" value="Send">
            </form><br>
            <img src="#" alt="Individual Pictures" id="imageContact"/>
            <p id="contactFormPeopleOne">
                - доц. д-р Константин Вълчев - Арт директор<br>
                - Александра Велева - Координатор<br>
                - София - Хара Хадзопулу - Координатор
            </p>
            <img src="#" alt="Group Picture" id="imageContact"/>
            <p id="contactFormPeopleTwo">
                - координатор НБУ</br>
                - Галин Галин, Анна Балева и Теодор Георгиев - графични
                дизайнери<br>
                - координатор сайт<br>
                - координатор ПР<br>
                - координатор фотография<br>
                - Елизар Милев - координатор на биеналето в "Приложно
                училище Св. Лука"<br>
                - Калчев - координатор на биеналето в "ИНХОМ - Белослав" и
                Варна<br>
            </p>
        </div>
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
</body>
</html>