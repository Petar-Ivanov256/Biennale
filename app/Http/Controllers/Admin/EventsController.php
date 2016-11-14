<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Events;
use App\Http\Requests\CreateEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class EventsController extends Controller {

	/**
	 * Display a listing of events
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $events = Events::all();

		return view('admin.events.index', compact('events'));
	}

	/**
	 * Show the form for creating a new events
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.events.create');
	}

	/**
	 * Store a newly created events in storage.
	 *
     * @param CreateEventsRequest|Request $request
	 */
	public function store(CreateEventsRequest $request)
	{
	    $request = $this->saveFiles($request);
		Events::create($request->all());

		return redirect()->route(config('quickadmin.route').'.events.index');
	}

	/**
	 * Show the form for editing the specified events.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$events = Events::find($id);
	    
	    
		return view('admin.events.edit', compact('events'));
	}

	/**
	 * Update the specified events in storage.
     * @param UpdateEventsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateEventsRequest $request)
	{
		$events = Events::findOrFail($id);

        $request = $this->saveFiles($request);

		$events->update($request->all());

		return redirect()->route(config('quickadmin.route').'.events.index');
	}

	/**
	 * Remove the specified events from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Events::destroy($id);

		return redirect()->route(config('quickadmin.route').'.events.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Events::destroy($toDelete);
        } else {
            Events::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.events.index');
    }

}
