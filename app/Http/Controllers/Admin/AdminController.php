<?php

/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 11/12/2016
 * Time: 15:13
 */

namespace App\Http\Controllers\Admin;
use App\Events;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home_admin(Request $request){

        return view('admin.admin_home');
    }

    public function show_events(Request $request){
        $events = Events::all();
        return view('admin.show_events', ['events' => $events]);
    }

    public function create_event(Request $request){
        return view('admin.create_event');
    }

    public function add_event(Request $request) {

        $this->validate($request, $this->validateEvent());

        $event = new Events();
        $event->start = $request->input('start');
        $event->end = $request->input('end');
        $event->place = $request->input('place');
        //$event->artist = $request->input('artist');
        //$event->entrance = $request->input('entrance');
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        //$event->photo = $request->file('photo');
        $event->save();

        return redirect('/admin/showEvents');
    }

    public function edit_event(Request $request) {
        $id = $request->input('id');
        $event = Events::find($id);

        return view('admin.edit_event', ['event' => $event]);
    }

    public function edit_event_save(Request $request) {
        $id = $request->input('id');
        $title = $request->input('title');
        $place = $request->input('place');
        $description = $request->input('description');

        $event = Events::find($id);

        $event->start = $request->input('start');
        $event->end = $request->input('end');
        $event->place = $place;
        //$event->artist = $request->input('artist');
        //$event->entrance = $request->input('entrance');
        $event->title = $title;
        $event->description = $description;
        //$event->photo = $request->file('photo');
        $event->save();

        return redirect('/admin/showEvents');
    }

    public function delete_event(Request $request) {

        $id = $request->input('id');
        $event = Events::find($id);
        $event->delete();

        return redirect('/admin/showEvents');
    }

    private function validateEvent() {
        return [
            'start' => 'required',
            'place' => 'required',
            'title' => 'required',
            'description' => 'required'
        ];
    }
}