<?php
/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 10/01/2017
 * Time: 21:27
 */

namespace App\Http\Controllers\Admin;


use App\Events;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;
use Image;
use Intervention\Image\Exception\NotReadableException;
use App\Category;

class AdminEventsController extends Controller
{
    public function show_events(Request $request)
    {
        $events = Events::all();
        return view('admin.show_events', ['events' => $events]);
    }

    public function create_event(Request $request)
    {
        $categories = Category::all();
        return view('admin.create_event', ['categories' => $categories]);
    }

    public function add_event(Request $request)
    {
        $this->validate($request, $this->validateEvent());

        try {
            $img = Image::make($request -> file('pic')->getRealPath())->encode('data-url');
        } catch (NotReadableException $e) {
            return view('admin.admin_exception', ['exc'=> $e]);
        }

        $event = new Events();
        $event->start = $request->input('start');
        $event->end = $request->input('end');
        $event->place = $request->input('place');
        $event->artist = $request->input('artist');
        $event->entrance = $request->input('entrance');
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->photo = $img;
        $event->title_en = $request->input('title_en');
        $event->description_en = $request->input('description_en');
        
        $event->save();

        $chosenCategory = Category::find($request->input('category'));
        $chosenCategory->events()->save($event);

        return redirect('/admin/showEvents');
    }

    public function edit_event(Request $request)
    {
        $id = $request->input('id');
        $event = Events::find($id);
        $categories = Category::all();
        $currentCategory = $event->category;

        return view('admin.edit_event', ['event' => $event, 'categories' => $categories, 'currentCategory' => $currentCategory]);
    }

    public function edit_event_save(Request $request)
    {
        $id = $request->input('id');

        $event = Events::find($id);

        try {
            if($request -> file('pic') != null){
                $img = Image::make($request -> file('pic')->getRealPath())->encode('data-url');
                $event->photo = $img;
            }
        } catch (NotReadableException $e) {
            return view('admin.admin_exception', ['exc'=> $e]);
        }

        $event->start = $request->input('start');
        $event->end = $request->input('end');
        $event->place = $request->input('place');
        $event->artist = $request->input('artist');
        $event->entrance = $request->input('entrance');
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->title_en = $request->input('title_en');
        $event->description_en = $request->input('description_en');
        $chosenCategory = Category::find($request->input('category'));
        $event->category()->associate($chosenCategory);
        $event->save();

        return redirect('/admin/showEvents');
    }

    public function delete_event(Request $request)
    {
        $id = $request->input('id');
        $event = Events::find($id);
        $event->delete();

        return redirect('/admin/showEvents');
    }

    private function validateEvent()
    {
        return [
            'start' => 'required',
            'end' => 'required',
            'place' => 'required',
            'title' => 'required',
            'description' => 'required',
            //'pic' => 'required',
            'title_en' => 'required',
            'description_en' => 'required'
        ];
    }
}