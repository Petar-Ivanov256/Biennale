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
    public function show_events(Request $request) {

        $events = Events::all()->sortBy('order_num');
    	return view('events.events', ['events' => $events]);
    }

    public function getById($id)
    {
        $event = Events::find($id);
        return response()->json(['event' => $event, 'category'=> $event->category]);
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