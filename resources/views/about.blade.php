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
                    изкуството от стъкло в Европа и по-специанлно в изочната част на континента.<br>
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
            </section>
        </div>
    </div>
@endsection


