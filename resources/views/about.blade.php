@extends('layouts.master')
@section('title')
    За нас
@endsection

@section('content')
    <h1>{{ trans('test.hello_test') }}</h1>
    <div class="container">
          <div class="col-md-3 SideDate">
                <p>27.09-02.10</p>
            </div>
        </div>
        <div  class="container">
            <div class="col-sm-1">
                <p id="SuzIstoria">Създаваме<br>история</p>
                <p id="purvoMezdunarodno">Първото международно<br>биенале за стъкло<br>в България</p>
            </div>
        </div>

    <div class="container">
        <div class="col-lg-12">
             <div class="col-xs-12 col-sm-6 col-lg-5 aboutleft" id="change">
                    <h1 class="name1">Нашата визия</h1>
                    <p class="textAbout">
                        Международно биенале на стъклото е първото по рода си събитие, което се състои края на месец септември на всеки две години в България.
                        Събитията на биеналето се провеждат в три града - столицата София, морският град Варна и град Белослав, известен с фабриката си за стъкло.
                        Нашата визия е общество, за което изкуството е неразделна част  от живота и света, за да спомогне за осъществяването на пъстроцветно бъдеще за идните поколения.
                        Работейки в тази посока, ние вдъхновяваме авторите по света, творящи в областта на художественото стъкло, да представят и споделят своите знания.
                        Целта ни е развитие на изкуството от стъкло в Европа и по-специално в източната част на континента. Ние припознаваме определени ценности като екзистенциални за достигането на нашите мисия и визия.
                        Като екип от артисти самите ние сме мотивирани от следните ценности: уважение, сътрудничество, качество, новаторство, обогатяване на познанията в областта, вдъхновение и позитивно мислене.
                    </p>
                    <h2 class="name1">Екип</h2>
                    <div>
                        <button type="button" class="aboutButtons btn-lg" data-toggle="modal" data-target="#myModal">
                            Арт Директор
                        </button><br>
                        <!-- Modal -->
                        <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel"> Арт Директор</h4>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="aboutButtons btn-lg" data-toggle="modal" data-target="#mycoordinatorModal">
                            Координатори
                        </button><br>
                        <!-- Modal -->
                        <div class="modal fade bs-example-modal-lg" id="mycoordinatorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel"> Координатори</h4>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="aboutButtons btn-lg" data-toggle="modal" data-target="#myJuryModal">
                            Жури
                        </button><br>
                        <!-- Modal -->
                        <div class="modal fade bs-example-modal-lg" id="myJuryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel"> Жури</h4>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="aboutButtons btn-lg" data-toggle="modal" data-target="#myDesignModal">
                            Графичен дизаин
                        </button><br>
                        <!-- Modal -->
                        <div class="modal fade bs-example-modal-lg" id="myDesignModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Графичен дизаин</h4>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="aboutButtons btn-lg" data-toggle="modal" data-target="#myWebModal">
                            Уеб дизаин
                        </button><br>
                        <!-- Modal -->
                        <div class="modal fade bs-example-modal-lg" id="myWebModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Уеб дизаин</h4>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <section>
                <div class="col-lg-5 picAbout" id="change-1">
                    {!! HTML::image('img/picturesFromAbout.jpg')!!}
                </div>
            </section>
              </div>

           </div>

        </div>

@endsection


