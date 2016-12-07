@extends('layouts.master')
@section('title')
    За нас
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 SideDate">
                <p>27.09-02.10</p>
            </div>
        </div>
    </div>
    <div  class="container">
        <div class="row">
            <div class="col-sm-1">
                <p id="SuzIstoria">Създаваме<br>история</p>
                <p id="purvoMezdunarodno">Първото международно<br>биенале за стъкло<br>в България</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               <div class="col-lg-6">
                <h1 class="name1">Нашата визия</h1>
                <p class="textAbout">
                    Нашата визия е общество, за което изкуството е неразделна част и жизвота и света,
                    за да спомогне за осъществяването на пъстроцветното бъдеще за идните поколения.
                    Работейки в тази посока, ние вдъхновяваме авторите по света, творящи в областта на
                    художествето стъкло, да представят и споделят своите знания. Целта ни е развитие на
                    изкуството от стъкло в Европа и по-специанлно в изочната част на континента.
                    Ние припознаваме определени ценности като екзистенциални за достигането на
                    нашите мисия и визия. Като екип от артисти самите ние сме мотивирани от
                    следните ценности: уважение,сътрудничество, качество, новаторство, обогатяване на
                    познанията в областта, вдъхновение и позитивно мислене.
                </p>
            </div>
                <div class="picAbout col-md-4"></div>
        <div class="col-md-2">
                <h2 class="name2">Екип</h2>
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
         </div>
      </div>
    </div>
@endsection


