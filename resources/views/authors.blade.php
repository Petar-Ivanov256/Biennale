@extends('layouts.master')
@section('title')
    {{ trans('titles.authors') }}
@endsection

@section('content')
      <div class="container">
        <div class="row">
            <div class="">
                <div class="col-md-4 contestants authors-move" id="return-authors">
                    <h2 class="title-Authors">{{ trans('authors.artists') }} <span class="span-authors-data">2017</span></h2>
                    <hr>
                    <ul class="authors-people" id="space-author-li">
                      {{-- @foreach ($authors as $author)
                        <li><a href="#" data-toggle="collapse"><br>{{ $author->name }}<br><span class="country-authors">{{ $author->country->title_en }}</span></a></li>
                      @endforeach --}}
                        <li class="authors-list" data-toggle="author-1"><a href="#1"><br>{{ trans('about.dana_zzamechnikova') }}<br><span class="country-authors">{{ trans('about.Cz') }}</span></a></li>
                        <li class="authors-list" data-toggle="author-2"><a href="#2"><br>{{ trans('about.konstantin_kalchev') }}<br><span class="country-authors">{{ trans('about.Bul') }}</span></a></li>
                        <li class="authors-list" data-toggle="author-3"><a href="#3"><br>{{ trans('about.milan_krajek') }}<br><span class="country-authors">{{ trans('about.Cz') }}</span></a></li>
                        <li class="authors-list" data-toggle="author-4"><a href="#4"><br>{{ trans('about.ondrej_strnadel') }}<br><span class="country-authors">{{ trans('about.Cz') }}</span></a></li>
                        <li class="authors-list" data-toggle="author-5"><a href="#5"><br>{{ trans('about.zdenek_lhodski') }}<br><span class="country-authors">{{ trans('about.Cz') }}</span></a></li>
                    </ul>
                </div>
                <div class="col-md-6 sub-authors-move" id="sub-authors-move-return">
                    <h2 class="title-Authors">{{ trans('authors.information_and_art_pieces') }}</h2>
                    <hr>
                    <div id="author-1" class="author-details">
                        <h3 class="info-name">{{ trans('about.dana_zzamechnikova') }}</h3>
                        <ul class="info-about-person">
                            <li>{{ trans('about.Cz') }}</li>
                            <li>{{ trans('about.female') }}</li>
                            <li><a href=" http://www.zamecnikova.cz/" target="_blank">http://www.zamecnikova.cz/</a></li>
                        </ul>
                        <p class="info-autor-about text-justify">

                        </p>
                        <br>
                        <div class="authors-pic">
                             <div class="col-md-5 portfolio-item">
                                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                                       {!! HTML::image('img/authors/dana zamecnikova1.jpg') !!}
                                    </a>
                                 <br><br>
                                 <div class="info-authors-backgcolor" id="backgcolo-info-authors">
                                     <p class="info-authors-text-under-pic">

                                     </p>
                                     <p class="info-about-tech">

                                     </p><br><br>
                                 </div>
                             </div>
                            <div class="col-md-5 portfolio-item">
                                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                                    {!! HTML::image('img/authors/dana zamecnikova2.jpg') !!}
                                </a>
                                <br><br>
                                <div class="info-authors-backgcolor" id="backgcolo-info-authors">
                                    <p class="info-authors-text-under-pic">

                                    </p>
                                    <p class="info-about-tech">

                                    </p><br><br>
                                </div>
                            </div>
                    </div>
                </div>

                    <!-- id 2-->
                    <div id="author-2" class="author-details">
                        <h3 class="info-name">{{ trans('about.konstantin_kalchev') }}</h3>
                        <ul class="info-about-person">
                            <li>{{ trans('about.Bul') }}</li>
                            <li>{{ trans('about.male') }}</li>
                            <li><a href="http://www.konstantinvalchev.com/" target="_blank">http://www.konstantinvalchev.com/</a></li>
                        </ul>
                        <p class="info-autor-about text-justify">

                        </p>
                        <br>
                        <div class="authors-pic">
                            <div class="col-md-5 portfolio-item">
                                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                                    {!! HTML::image('img/authors/valchev.jpg') !!}
                                </a>
                                <br><br>
                                <div class="info-authors-backgcolor" id="backgcolo-info-authors">
                                    <p class="info-authors-text-under-pic">

                                    </p>
                                    <p class="info-about-tech">

                                    </p><br><br>
                                </div>
                            </div>
                            <div class="col-md-5 portfolio-item">
                                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                                    {!! HTML::image('img/authors/valchev 2.jpg') !!}
                                </a>
                                <br><br>
                                <div class="info-authors-backgcolor" id="backgcolo-info-authors">
                                    <p class="info-authors-text-under-pic">

                                    </p>
                                    <p class="info-about-tech">

                                    </p><br><br>
                                </div>
                            </div>
                        </div>
                    </div>

                   <!----->
                    
                    <!--Milan-->
                    <div id="author-3" class="author-details">
                        <h3 class="info-name">{{ trans('about.milan_krajek') }}</h3>
                        <ul class="info-about-person">
                            <li>{{ trans('about.Cz') }}</li>
                            <li>{{ trans('about.male') }}</li>
                            <li></li>
                        </ul>
                        <p class="info-autor-about text-justify">

                        </p>
                        <br>
                        <div class="authors-pic">
                            <div class="col-md-5 portfolio-item">
                                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                                    {!! HTML::image('img/images.png') !!}
                                </a>
                                <br><br>
                                <div class="info-authors-backgcolor" id="backgcolo-info-authors">
                                    <p class="info-authors-text-under-pic">

                                    </p>
                                    <p class="info-about-tech">

                                    </p><br><br>
                                </div>
                            </div>
                            <div class="col-md-5 portfolio-item">
                                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                                    {!! HTML::image('img/images.png') !!}
                                </a>
                                <br><br>
                                <div class="info-authors-backgcolor" id="backgcolo-info-authors">
                                    <p class="info-authors-text-under-pic">

                                    </p>
                                    <p class="info-about-tech">

                                    </p><br><br>
                                </div>
                            </div>
                       </div>
                    </div>
                    <!--Ondrei id=4-->
                    <div id="author-4" class="author-details">
                        <h3 class="info-name">{{ trans('about.ondrej_strnadel') }}</h3>
                        <ul class="info-about-person">
                            <li>{{ trans('about.Cz') }}</li>
                            <li>{{ trans('about.male') }}</li>
                            <li></li>
                        </ul>
                        <p class="info-autor-about text-justify">

                        </p>
                        <br>
                        <div class="authors-pic">
                            <div class="col-md-5 portfolio-item">
                                <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                                    {!! HTML::image('img/authors/ondrej1.jpg') !!}
                                </a>
                                <br><br>
                                <div class="info-authors-backgcolor" id="backgcolo-info-authors">
                                    <p class="info-authors-text-under-pic">

                                    </p>
                                    <p class="info-about-tech">

                                    </p><br><br>
                                </div>
                            </div>
                            <div class="col-md-5 portfolio-item">
                                <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                                    {!! HTML::image('img/authors/ondrej2.jpg') !!}
                                </a>
                                <br><br>
                                <div class="info-authors-backgcolor" id="backgcolo-info-authors">
                                    <p class="info-authors-text-under-pic">

                                    </p>
                                    <p class="info-about-tech">

                                    </p><br><br>
                                </div>
                            </div>


                        <!-- <div class="col-md-5">
                                {!! HTML::image('img/images.png') !!}
                                <br><br>
                                <div class="info-authors-backgcolor" id="backgcolo-info-authors">
                                    <p class="info-authors-text-under-pic">

                                    </p>
                                    <p class="info-about-tech">

                                    </p><br><br>
                                </div>
                            </div>
                        </div>-->

                        </div>
                    </div>
                    <!--->

                    <!--Sdenek-->
                    <div id="author-5" class="author-details">
                        <h3 class="info-name">{{ trans('about.zdenek_lhodski') }}</h3>
                        <ul class="info-about-person">
                            <li>{{ trans('about.Cz') }}</li>
                            <li>{{ trans('about.male') }}</li>
                            <li><a href="https://www.zdenek-lhotsky.com/en/" target="_blank">https://www.zdenek-lhotsky.com/en/</a></li>
                        </ul>
                        <p class="info-autor-about text-justify">

                        </p>
                        <br>
                        <div class="authors-pic">
                            <div class="col-md-5 portfolio-item">
                                <a href="#portfolioModal9" class="portfolio-link" data-toggle="modal">
                                    {!! HTML::image('img/authors/ihotsky1.jpg') !!}
                                </a>
                                <br><br>
                                <div class="info-authors-backgcolor" id="backgcolo-info-authors">
                                    <p class="info-authors-text-under-pic">

                                    </p>
                                    <p class="info-about-tech">

                                    </p><br><br>
                                </div>
                            </div>
                            <div class="col-md-5 portfolio-item">
                                <a href="#portfolioModal10" class="portfolio-link" data-toggle="modal">
                                    {!! HTML::image('img/authors/ihotsky2.jpg') !!}
                                </a>
                                <br><br>
                                <div class="info-authors-backgcolor" id="backgcolo-info-authors">
                                    <p class="info-authors-text-under-pic">

                                    </p>
                                    <p class="info-about-tech">

                                    </p><br><br>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
      <!--Dana-->
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
                      <div class="col-md-8 col-md-offset-2">
                          <div class="modal-body">
                              <h2></h2>
                              <hr class="star-primary">
                              {!! HTML::image('img/authors/dana zamecnikova1.jpg') !!}
                              <p>

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

          <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-content">
                  <div class="close-modal" data-dismiss="modal">
                      <div class="lr">
                          <div class="rl">
                          </div>
                      </div>
                  </div>
                  <div class="container">
                      <div class="row">
                          <div class="col-md-8 col-md-offset-2">
                              <div class="modal-body">
                                  <h2></h2>
                                  <hr class="star-primary">
                                  {!! HTML::image('img/authors/dana zamecnikova2.jpg') !!}
                                  <p>

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

    <!-- Konstantin-->

          <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-content">
                  <div class="close-modal" data-dismiss="modal">
                      <div class="lr">
                          <div class="rl">
                          </div>
                      </div>
                  </div>
                  <div class="container">
                      <div class="row">
                          <div class="col-md-8 col-md-offset-2">
                              <div class="modal-body">
                                  <h2></h2>
                                  <hr class="star-primary">
                                  {!! HTML::image('img/authors/valchev.jpg') !!}
                                  <p>

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

          <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-content">
                  <div class="close-modal" data-dismiss="modal">
                      <div class="lr">
                          <div class="rl">
                          </div>
                      </div>
                  </div>
                  <div class="container">
                      <div class="row">
                          <div class="col-md-8 col-md-offset-2">
                              <div class="modal-body">
                                  <h2></h2>
                                  <hr class="star-primary">
                                  {!! HTML::image('img/authors/valchev 2.jpg') !!}
                                  <p>

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
      </div>
    <!--Milan-->
      <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                      <div class="rl">
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                          <div class="modal-body">
                              <h2></h2>
                              <hr class="star-primary">
                              {!! HTML::image('img/images.png') !!}
                              <p>

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

      <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                      <div class="rl">
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                          <div class="modal-body">
                              <h2></h2>
                              <hr class="star-primary">
                              {!! HTML::image('img/images.png') !!}
                              <p>

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
      </div>
    <!-- Ondrei-->
      <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                      <div class="rl">
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                          <div class="modal-body">
                              <h2></h2>
                              <hr class="star-primary">
                              {!! HTML::image('img/authors/ondrej1.jpg') !!}
                              <p>

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

      <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                      <div class="rl">
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                          <div class="modal-body">
                              <h2></h2>
                              <hr class="star-primary">
                              {!! HTML::image('img/authors/ondrej2.jpg') !!}
                              <p>

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
      </div>
 <!--Sdenek-->
      <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                  <div class="rl">
                  </div>
              </div>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <div class="modal-body">
                          <h2></h2>
                          <hr class="star-primary">
                          {!! HTML::image('img/authors/ihotsky1.jpg') !!}
                          <p>

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

      <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                      <div class="rl">
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                          <div class="modal-body">
                              <h2></h2>
                              <hr class="star-primary">
                              {!! HTML::image('img/authors/ihotsky2.jpg') !!}
                              <p>

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
      </div>
@endsection

@section('foot')

<script type="text/javascript">
	$('.author-details').hide();
	$('.authors-list').click(function (e) {
		 let authorId = $(this).attr('data-toggle');
		 $('.author-details').hide();
		 $('#' + authorId).show();
	});
</script>

@endsection