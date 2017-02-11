{{--@extends('layouts.master')--}}
@section('title')
    Administration
@endsection

@section('content')
    <div class="container">
        <div  class="col-md-12" style="margin-left: 250px">
            <a href="{{ URL::to('/admin/showEvents')}}" class="btn btn-primary">Виж събития</a>
            <a href="{{ URL::to('/admin/authors')}}" class="btn btn-primary">Виж авторите</a>
            <a href="{{ URL::to('/admin/works')}}" class="btn btn-primary">Виж творбите</a>
            <a href="{{ URL::to('/admin/category')}}" class="btn btn-primary">Виж категориите</a>
        </div>
    </div>
@endsection