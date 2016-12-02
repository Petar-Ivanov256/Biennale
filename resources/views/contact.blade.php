@extends('layouts.master')
@section('title')
    Контакти
@endsection

@section('content')
    <div id="SideDate">
        <p>27.09-02.10</p>
    </div>
    <div  class="col-lg-1">
        <p id="SuzIstoria">Създаваме история</p>
        <p id="purvoMezdunarodno">Първото международно биенале в България</p>
    </div>
    <div class="col-md-8 col-md-offset-8" id="contact">
        <h2 id="Title2" class="col-md-offset-4" >Контактна Форма</h2>
        <form method="POST" action="{{ URL::to('/apply') }}" class="form-horizontal"><br><br>
            <div class="form-group" id="contentContactForm">
                <div class="col-md-4 col-md-offset-4">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Име и фамилия*" value="{{ Request::old('name') }}">
                </div>
            </div>
            <div class="form-group" id="contentContactForm">
                <div class="col-md-4 col-md-offset-4">
                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail*" value="{{ Request::old('email') }}">
                </div>
            </div>
            <div class="form-group" id="contentContactForm">
                <div class="col-md-4 col-md-offset-4">
                    <input type="text" class="form-control" id="title" name="Title" placeholder="Заглавие*" value="{{ Request::old('englishTitle') }}">
                </div>
            </div>
            <div class="form-group" id="contentContactForm">
                <div class="col-md-4 col-md-offset-4">
                    <textarea class="form-control" id="Message" name="Message" cols="25" rows="5" placeholder="Съобщение*"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-4 col-lg-offset-7" id="submitButton">
                    <button type="submit">Изпрати&nbsp;<i class="fa fa-chevron-circle-right" id="fa-fa-chevron-right"></i></button>
                </div>
            </div>
        </form>
    </div>
@endsection