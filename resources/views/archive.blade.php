@extends('layouts.master')
@section('title')
    Архив
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
        <div class="row">
            <div class="col-md-12 clo-lg-12">
                <div class="col-md-4 move-left-archive">
                    <h2>Архив <span>2017</span></h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula felis justo, pharetra
                        ullamcorper nibh tristique in. Aenean fringilla dignissim ante eget ornare. Sed eu velit quis
                        velit suscipit consectetur pretium quis ligula.Phasellus tincidunt faucibus lorem sit amet sodales. Duis nec consectetur mauris.
                    </p>
                    <ul class="a-manage-collapse">
                        <li><a class="" role="button" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapseExample">
                                <span class="left-archive-span">Артисти</span><span class="color-black-hover"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                            </a></li>
                        <li><a class="" role="button" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapseExample">
                                <span class="left-archive-span">Събития и локации</span> <span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                            </a></li>
                        <li><a class="" role="button" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapseExample">
                                <span class="left-archive-span">Организатори</span><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                            </a></li>
                        <li><a class="" role="button" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapseExample">
                                <span class="left-archive-span">Стипендии</span> <span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                            </a></li>
                    </ul>
                </div>
                <div class="col-md-4 move-left-archive">
                    <button class="learn-more">Победители</button>
                    <button class="learn-more">Участници</button>
                </div>
            </div>
         </div>
    </div>
@endsection