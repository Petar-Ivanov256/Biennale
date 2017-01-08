@extends('layouts.master')
@section('title')
    Автори
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="col-md-5 col-lg-5 contestants">
                    <h2>Автори <span>2017</span></h2>
                    <hr>
                    <ul>
                        <li><a href="#1" data-toggle="collapse">Alex Smith<br><span>Великобритания</span></a></li>
                        <li><a>Ana Markowska<br><span>Полша</span></a></li>
                        <li><a>Anton Ivanov<br><span>България</span></a></li>
                    </ul>
                </div>
                <div class="col-md-5 col-lg-5">
                    <h2>Информация и творби</h2>
                    <hr>
                    <div id="1" class="collapse">
                        <h3>Alex Smith</h3>
                        <ul>
                            <li>Bulgaria</li>
                            <li>male</li>
                            <li>b. Varna</li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel nisi pulvinar, laoreet turpis quis,
                            venenatis turpis. Aenean egestas, nibh sed scelerisque iaculis, risus tortor lobortis arcu, non
                            consectetur mi nibh id ex. Quisque ultricies pellentesque aliquam. Sed pretium nunc at turpis feugiat
                            , sit amet finibus ipsum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                            per inceptos himenaeos. Fusce eu nisi lacinia, gravida nibh a, tristique magna. Cras sem est, lacinia
                            et laoreet sit amet, semper id erat. Sed dapibus lorem ut pellentesque laoreet. In quis erat nisl.
                            </p>
                        <div class="authors-pic">
                            <div class="col-md-6">
                                <div>
                                    {!! HTML::image('img/authors/pic1autr.jpg') !!}
                                    <br>
                                    <p>
                                        Duis aute irure dolor in reprehenderit<br> <span>in volup</span>
                                    </p>
                                </div>
                           </div>
                            <div class="col-md-6">
                                {!! HTML::image('img/authors/pic1autr.jpg') !!}
                                <br>
                                <p>
                                    Duis aute irure dolor in reprehenderit<br> <span>in volup</span>
                                </p>
                            </div>
                        </div>

                   </div>
              </div>
           </div>
        </div>
    </div>
@endsection