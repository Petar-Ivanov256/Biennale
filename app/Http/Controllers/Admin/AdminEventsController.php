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

        $img1 = null;
        $img2 = null;
        $img3 = null;
        $img4 = null;
        $img5 = null;
        $img6 = null;
        $img7 = null;
        $img8 = null;
        $img9 = null;
        $img10 = null;
        try {
            if ($request->hasFile('pic1')) {
                $img1 = Image::make($request -> file('pic1')->getRealPath())->encode('data-url');
            }
            if ($request->hasFile('pic2')) {
                $img2 = Image::make($request -> file('pic2')->getRealPath())->encode('data-url');
            }
            if ($request->hasFile('pic3')) {
                $img3 = Image::make($request -> file('pic3')->getRealPath())->encode('data-url');
            }
            if ($request->hasFile('pic4')) {
                $img4 = Image::make($request -> file('pic4')->getRealPath())->encode('data-url');
            }
            if ($request->hasFile('pic5')) {
                $img5 = Image::make($request -> file('pic5')->getRealPath())->encode('data-url');
            }
            if ($request->hasFile('pic6')) {
                $img6 = Image::make($request -> file('pic6')->getRealPath())->encode('data-url');
            }
            if ($request->hasFile('pic7')) {
                $img7 = Image::make($request -> file('pic7')->getRealPath())->encode('data-url');
            }
            if ($request->hasFile('pic8')) {
                $img8 = Image::make($request -> file('pic8')->getRealPath())->encode('data-url');
            }
            if ($request->hasFile('pic9')) {
                $img9 = Image::make($request -> file('pic9')->getRealPath())->encode('data-url');
            }
            if ($request->hasFile('pic10')) {
                $img10 = Image::make($request -> file('pic10')->getRealPath())->encode('data-url');
            }
        } catch (NotReadableException $e) {
            return view('admin.admin_exception', ['exc'=> $e]);
        }

        $event = new Events();
        $event->start = $request->input('start');
        $event->end = $request->input('end');
        $event->place = $request->input('place');
        $event->place_en = $request->input('place_en');
        $event->participants = $request->input('participants');
        $event->participants_en = $request->input('participants_en');
        $event->entrance = $request->input('entrance');
        $event->entrance_en = $request->input('entrance_en');
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->photo1 = $img1;
        $event->photo2 = $img2;
        $event->photo3 = $img3;
        $event->photo4 = $img4;
        $event->photo5 = $img5;
        $event->photo6 = $img6;
        $event->photo7 = $img7;
        $event->photo8 = $img8;
        $event->photo9 = $img9;
        $event->photo10 = $img10;
        $event->title_en = $request->input('title_en');
        $event->description_en = $request->input('description_en');
        $event->latitude = $request->input('lat');
        $event->longitude = $request->input('lng');
        $chosenCategory = Category::find($request->input('category'));
        $event->category()->associate($chosenCategory);
        $event->save();
//
//        $event->save();
//
//        $chosenCategory = Category::find($request->input('category'));
//        $chosenCategory->events()->save($event);

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
        $this->validate($request, $this->validateEvent());
        $id = $request->input('id');

        $event = Events::find($id);

        try {
            if($request -> file('pic1') != null){
                $img = Image::make($request -> file('pic1')->getRealPath())->encode('data-url');
                $event->photo1 = $img;
            }
            if($request -> file('pic2') != null){
                $img = Image::make($request -> file('pic2')->getRealPath())->encode('data-url');
                $event->photo2 = $img;
            }
            if($request -> file('pic3') != null){
                $img = Image::make($request -> file('pic3')->getRealPath())->encode('data-url');
                $event->photo3= $img;
            }
            if($request -> file('pic4') != null){
                $img = Image::make($request -> file('pic4')->getRealPath())->encode('data-url');
                $event->photo4 = $img;
            }
            if($request -> file('pic5') != null){
                $img = Image::make($request -> file('pic5')->getRealPath())->encode('data-url');
                $event->photo5 = $img;
            }
            if($request -> file('pic6') != null){
                $img = Image::make($request -> file('pic6')->getRealPath())->encode('data-url');
                $event->photo6 = $img;
            }
            if($request -> file('pic7') != null){
                $img = Image::make($request -> file('pic7')->getRealPath())->encode('data-url');
                $event->photo7 = $img;
            }
            if($request -> file('pic8') != null){
                $img = Image::make($request -> file('pic8')->getRealPath())->encode('data-url');
                $event->photo8 = $img;
            }
            if($request -> file('pic9') != null){
                $img = Image::make($request -> file('pic9')->getRealPath())->encode('data-url');
                $event->photo9 = $img;
            }
            if($request -> file('pic10') != null){
                $img = Image::make($request -> file('pic10')->getRealPath())->encode('data-url');
                $event->photo10 = $img;
            }
        } catch (NotReadableException $e) {
            return view('admin.admin_exception', ['exc'=> $e]);
        }

        $event->start = $request->input('start');
        $event->end = $request->input('end');
        $event->place = $request->input('place');
        $event->place_en = $request->input('place_en');
        $event->participants = $request->input('participants');
        $event->participants_en = $request->input('participants_en');
        $event->entrance = $request->input('entrance');
        $event->entrance_en = $request->input('entrance_en');
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->title_en = $request->input('title_en');
        $event->description_en = $request->input('description_en');
        $event->latitude = $request->input('lat');
        $event->longitude = $request->input('lng');
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
            'place' => 'required',
            'place_en' => 'required',
            'title' => 'required',
            'title_en' => 'required',
            'description' => 'required',
            'description_en' => 'required',
            'pic1' => 'required|image|max:2096',
            'pic2' => 'image|max:2096',
            'pic3' => 'image|max:2096',
            'pic4' => 'image|max:2096',
            'pic5' => 'image|max:2096',
            'pic6' => 'image|max:2096',
            'pic7' => 'image|max:2096',
            'pic8' => 'image|max:2096',
            'pic9' => 'image|max:2096',
            'pic10' => 'image|max:2096',
        ];
//        return [
//            'start' => 'required',
//
//            'place' => 'required|max:100',
//            'phoneNumber' => 'required|max:100',
//            'participants' => 'required|max:100',
//            'participants_en' => 'required|max:100',
//            'entrance' => 'required|max:100',
//            'entrance_en' => 'required|max:100',
//            'installationGuide' => 'required|max:300',
//            'year' => 'required|numeric|min:1900|max:2017',
//            'synopsis' => 'required|max:100',
//            'file-7' => 'required|image|max:4096',
//            'file-8' => 'required|image|max:4096',
//            'technique' => 'required',
//        ];

//        $event = new Events();
//        $event->start = $request->input('start');
//        $event->end = $request->input('end');
//        $event->place = $request->input('place');
//        $event->participants = $request->input('participants');
//        $event->participants_en = $request->input('participants_en');
//        $event->entrance = $request->input('entrance');
//        $event->title = $request->input('title');
//        $event->description = $request->input('description');
//        $event->photo1 = $img1;
//        $event->photo2 = $img2;
//        $event->photo3 = $img3;
//        $event->photo4 = $img4;
//        $event->photo5 = $img5;
//        $event->photo6 = $img6;
//        $event->photo7 = $img7;
//        $event->photo8 = $img8;
//        $event->photo9 = $img9;
//        $event->photo10 = $img10;
//        $event->title_en = $request->input('title_en');
//        $event->description_en = $request->input('description_en');
//        $event->latitude = $request->input('lat');
//        $event->longitude = $request->input('lng');

    }
}