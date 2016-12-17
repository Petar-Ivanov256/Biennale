@extends('layouts.master')
@section('title')
    Administration
@endsection

@section('content')
    <h1>Exception zone</h1>
    <h3>{{$exc->getMessage()}}</h3>
    <h2>The file is corrupt or is not jpg</h2>
@endsection