@extends('layouts.master')
@section('title')
    Administration
@endsection

@section('content')
    <a href="{{ URL::to('/admin/showEvents')}}" class="btn btn-primary">Виж събития</a>
    <a href="{{ URL::to('/admin/authors')}}" class="btn btn-primary">Виж авторите</a>
    <a href="{{ URL::to('/admin/works')}}" class="btn btn-primary">Виж творбите</a>
@endsection