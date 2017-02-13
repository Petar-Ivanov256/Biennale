@extends('layouts.master')
@section('title')
    {{ trans('titles.authors') }}
@endsection

@section('content')
      <div class="container">
        <div class="row">
            <div class="">
                <div class="col-md-4 contestants authors-move" id="return-authors">
                    <h2 class="title-Authors">Автори <span class="span-authors-data">2017</span></h2>
                    <hr>
                    <ul class="authors-people" id="space-author-li">
                        <li><a href="#1" data-toggle="collapse">Alex Smith<br><span class="country-authors">Великобритания</span></a></li>
                        <li><a>Ana Markowska<br><span class="country-authors">Полша</span></a></li>
                        <li><a>Anton Ivanov<br><span class="country-authors">България</span></a></li>
                    </ul>
                </div>
                <div class="col-md-6 sub-authors-move" id="sub-authors-move-return">
                    <h2 class="title-Authors">Информация и творби</h2>
                    <hr>
                    <div id="1" class="collapse">
                        <h3 class="info-name">Alex Smith</h3>
                        <ul class="info-about-person">
                            <li>Bulgaria</li>
                            <li>male</li>
                            <li>b. Varna</li>
                        </ul>
                        <p class="info-autor-about text-justify">

                        </p>
                        <br>
                        <div class="authors-pic">
                             <div class="col-md-5 portfolio-item">
                                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                                       {!! HTML::image('img/images.png') !!}
                                    </a>
                                 <br><br>
                                 <div class="info-authors-backgcolor" id="backgcolo-info-authors">
                                     <p class="info-authors-text-under-pic">
                                         Duis aute irure dolor in reprehenderit
                                     </p>
                                     <p class="info-about-tech">
                                         in volup
                                     </p><br><br>
                                 </div>
                             </div>


                        <!--   <div class="col-md-5">
                                <div>

                                    <br><br>
                                    <div class="info-authors-backgcolor" id="backgcolo-info-authors">
                                        <p class="info-authors-text-under-pic">
                                            Duis aute irure dolor in reprehenderit
                                        </p>
                                        <p class="info-about-tech">
                                            in volup
                                        </p><br><br>
                                    </div>
                                </div><br>
                            </div>-->
                            <div class="col-md-5">
                                {!! HTML::image('img/images.png') !!}
                                <br><br>
                                <div class="info-authors-backgcolor" id="backgcolo-info-authors">
                                    <p class="info-authors-text-under-pic">
                                        Duis aute irure dolor in reprehenderit
                                    </p>
                                    <p class="info-about-tech">
                                        in volup
                                    </p><br><br>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
      <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                      <div class="rl">
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-lg-8 col-lg-offset-2">
                          <div class="modal-body">
                              <h2>Project Title</h2>
                              <hr class="star-primary">
                              {!! HTML::image('img/images.png') !!}
                              <p>
                                  Test page
                              </p>
                              <ul class="list-inline item-details">

                              </ul>
                              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

@endsection