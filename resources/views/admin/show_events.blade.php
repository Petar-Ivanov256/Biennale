@extends('layouts.master')
@section('title')
    Admin events
@endsection

@section('content')
    <div class="container">
        <div  class="col-md-12 admin-css" id="admin-back">
            <a href="{{ URL::to('/admin/createEvent') }}"class="btn btn-primary">Създай събитие</a>
            @foreach($events as $event)
                <form class="form-horizontal"  action="{{ URL::to('/admin/editEvent/{id}') }}" method="GET">
                    <h3>{{$event->title}}</h3>
                    {{--Here we should resize the img. Should be discussed if we need to doit with CSS or frem the backend--}}
                    <img width="200px" src="{{$event->photo1}}">
                    <fieldset>
                        <input type="hidden" name="id" value="{{$event->id}}" />
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-success">Edit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>

                <form class="form-horizontal"  action="{{ URL::to('/admin/deleteEvent') }}" method="POST">
                    <fieldset>
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        <input type="hidden" name="id" value="{{$event->id}}" />
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </fieldset>
                </form>

            @endforeach


        </div>
    </div>
@endsection