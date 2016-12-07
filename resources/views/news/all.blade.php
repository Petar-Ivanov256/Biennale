@extends('layouts.master')
@section('title')
Новини
@endsection

@section('content')
    @foreach($news as $article)
    <div>
        <div>
            <img src="{{ asset($article->photo) }}" />
        </div>
        <div>{{ $article->title }}</div>
    </div>
    @endforeach
@endsection