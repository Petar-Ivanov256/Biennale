@extends('layouts.master')
@section('title')
    За нас
@endsection

@section('content')
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
                    <h1 class="name1">{{ trans('about.vision') }}</h1>
                    <p class="textAbout">
                        {{ trans('about.vision_content') }}
                    </p>
                    <h2 class="name1">{{ trans('about.team') }}</h2>
                    <div>
                        <button type="button" class="aboutButtons btn-lg" data-toggle="modal" data-target="#myModal">
                            {{ trans('about.art_director') }}
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
                            {{ trans('about.coordinators') }}
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
                            {{ trans('about.jury') }}
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
                            {{ trans('about.graph_design') }}
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
                            {{ trans('about.web_design') }}
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
@endsection


