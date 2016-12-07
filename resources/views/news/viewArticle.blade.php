@extends('layouts.master')
@section('title')
Новини
@endsection

@section('content')
    <div>{{$article->title}}</div>
    <div>{{$article->photo}}</div>
    <div>{!! $article->content !!}</div>
@endsection