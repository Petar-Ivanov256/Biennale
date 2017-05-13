{{--@extends('layouts.master')--}}
@section('title')
    Administration
@endsection

@section('content')
    <div class="container">
        <div  class="col-md-6 admin-css" id="admin-back">
            <a href="{{ URL::to('/admin/showEvents')}}" class="btn btn-primary">Виж събития</a><br><br>
            <a href="{{ URL::to('/admin/authors')}}" class="btn btn-primary">Виж авторите</a><br><br>
            <a href="{{ URL::to('/admin/works')}}" class="btn btn-primary">Виж творбите</a><br><br>
            <a href="{{ URL::to('/admin/category')}}" class="btn btn-primary">Виж категориите</a><br><br>
        </div>
    </div>
@endsection