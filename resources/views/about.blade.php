@extends('layouts.master')
@section('title')
    За нас
@endsection

@section('content')
    <div id="SideDate" class="container-fluid">
        <p>27.09-02.10</p>
    </div>
    <div  class="col-lg-1 container-fluid">
        <p id="SuzIstoria">Създаваме история</p>
        <p id="purvoMezdunarodno">Първото международно биенале за стъкло в България</p>
    </div>
    <div class="container">
        <section>
            <div>
                <h1 class="name1">Нашата визия</h1>
                <p class="textAbout">
                    Нашата визия е общество, за което изкуството е неразделна част и жизвота и света,<br>
                    за да спомогне за осъществяването на пъстроцветното бъдеще за идните поколения.<br>
                    Работейки в тази посока, ние вдъхновяваме авторите по света, творящи в областта на<br>
                    художествето стъкло, да представят и споделят своите знания. Целта ни е развитие на<br>
                    изкуството от стъкло Европа и по-специанлно в изочната част на континента.<br>
                    Ние припознаваме определени ценности като екзистенциални за достигането на<br>
                    нашите мисия и визия. Като екип от артисти самите ние сме мотивирани от<br>
                    следните ценности: уважение,сътрудничество, качество, новаторство, обогатяване на<br>
                    познанията в областта, вдъхновение и позитивно мислене.<br>
                </p>
            </div>
           </section>
        <div class="picAbout container"></div>
        <div>
            <section>
                <h2 class="name2">Екип</h2>
                <div>
                    <button type="button" class="aboutButtons btn-lg" data-toggle="modal" data-target="#myModal">
                        Арт Директор
                    </button><br>
                    <button type="button" class="aboutButtons btn-lg" data-toggle="modal" data-target="#myModal">
                        Кординатори
                    </button><br>
                    <button type="button" class="aboutButtons btn-lg" data-toggle="modal" data-target="#myModal">
                        Жури
                    </button><br>
                    <button type="button" class="aboutButtons btn-lg" data-toggle="modal" data-target="#myModal">
                        Графичен дизаин
                    </button><br>
                    <button type="button" class="aboutButtons btn-lg" data-toggle="modal" data-target="#myModal">
                        Уеб дизаин
                    </button><br>
                </div>
            </section>
        </div>
    </div>




@endsection


