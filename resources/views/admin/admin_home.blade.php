@extends('layouts.master')
@section('title')
    Administration
@endsection

@section('content')
    <a  href="{{ URL::to('/admin/showEvents')}}" class="btn btn-primary">Виж събития</a>
    <a  href="{{ URL::to('/admin/authors/all')}}" class="btn btn-primary">Виж авторите</a>
{{--@if(Auth::user()->isAdmin())--}}
{{--admin sam--}}
{{--@else--}}
{{--ne sam--}}
{{--@endif--}}


@endsection