@extends('layouts.master')
@section('title')
    Administration
@endsection

@section('content')

<h1>Stana</h1>
@if(Auth::user()->isAdmin())
admin sam
@else
ne sam
@endif
@endsection