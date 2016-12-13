@extends('layouts.master')
@section('title')
    Програма
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 SideDate">
                <p>27.09-02.10</p>
            </div>
        </div>
    </div>
    <div  class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-1">
                <p id="SuzIstoria">Създаваме история</p>
                <p id="purvoMezdunarodno">Първото международно<br>биенале за стъкло<br>в България</p>
            </div>
        </div>
    </div>
    <div class="container">

            <div class="col-xs-12 col-sm-6 col-lg-10">
                <div class="col-md-2 programData">
                    <p>Дата</p>
                </div>
                <div>
                    <ul class="lihorizontal">
                        <li><a href="#">ср. 27.09</a></li>
                        <li><a href="#">чет.28.09</a></li>
                        <li><a href="#">пет.29.09</a></li>
                        <li><a href="#">съб.30.09</a></li>
                        <li><a href="#">нед.01.10</a></li>
                        <li><a href="#">пон.02.10</a></li>
                    </ul>
                </div>
            </div>
         </div>

    <div class="container">
           <div class="col-lg-12">
                <div class="col-lg-3 programa">
                    <a href="#">{!! HTML::image('img/programimg/pic1.jpg') !!}

                            <span class="ptagleft">27.09-29.09</span>
                            <span class="ptagleft">10:00-18:00</span>
                            <hr>
                            <span class="ptagleft">София</span>
                            <span class="ptagleft">Райко Алексиев</span>

                    </a>
                </div>
                <div class="col-lg-3 programa">
                    {!! HTML::image('img/programimg/pic2.jpg') !!}
                </div>
                <div class="col-lg-3 programa">
                    {!! HTML::image('img/programimg/pic3.jpg') !!}
                </div>
            </div>
            </div>
@endsection