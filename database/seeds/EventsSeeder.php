<?php

use Illuminate\Database\Seeder;
use App\Events;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Ymd', strtotime('20161112'));

        $event = new Events();
        $event->start = $date;
        //$event->end = $request->input('end');
        $event->place = 'Sofia';
        $event->artist = 'Gosho';
        //$event->entrance = $request->input('entrance');
        $event->title = 'Test event';
        $event->description = 'Qkoto opisanie';
        //$event->photo = $request->file('photo');
        $event->save();

        $event = new Events();
        $event->start = $date;
        //$event->end = $request->input('end');
        $event->place = 'Sofia';
        $event->artist = 'Gosho';
        //$event->entrance = $request->input('entrance');
        $event->title = 'Test event1';
        $event->description = 'Qkoto opisanie';
        //$event->photo = $request->file('photo');
        $event->save();

        $event = new Events();
        $event->start = $date;
        //$event->end = $request->input('end');
        $event->place = 'Sofia';
        $event->artist = 'Gosho';
        //$event->entrance = $request->input('entrance');
        $event->title = 'Test event2';
        $event->description = 'Qkoto opisanie';
        //$event->photo = $request->file('photo');
        $event->save();


    }
}
