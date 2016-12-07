<?php
/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 07/11/2016
 * Time: 21:03
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Events;

class EventsController extends Controller
{
    public function events(Request $request) {

        return view('events/events');
    }

    public function create(Request $request) {
    	return view('events/create');
    }

    public function add(Request $request) {
    	
    	$this->validate($request, $this->validateEvent());

    	$date = date('Y-m-d', strtotime($request->input('start')));

    	$event = new Events();
    	$event->start = $date;
    	//$event->end = $request->input('end');
    	$event->place = $request->input('place');
    	//$event->artist = $request->input('artist');
    	//$event->entrance = $request->input('entrance');
    	$event->title = $request->input('title');
    	$event->description = $request->input('description');
    	//$event->photo = $request->file('photo');
    	$event->save();

    	return redirect('/events');
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