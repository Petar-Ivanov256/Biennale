<?php

use Illuminate\Database\Seeder;
use App\Events;
use Intervention\Image\Facades\Image;


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
        $date1 = date('Ymd',strtotime('20161112' . "+1 days"));

        $event = new Events();
        $event->start = $date;
        $event->end = $date1;
        $event->place = 'Sofia';
        $event->artist = 'Gosho';
        $event->entrance = 'Bezplatno';
        $event->title = 'Test event 1';
        $event->description = 'Test event 1 description dsadasda dsdsd sdadas dsadasd dsadas';
        $img = Image::make("C:/xampp/htdocs/Biennale/public/img/eventsimg/pic1.jpg")->encode('data-url');
        $event->photo = $img;
        $event->save();

        $event = new Events();
        $event->start = date('Ymd',strtotime('20161112' . "+2 days"));
        $event->end = date('Ymd',strtotime('20161112' . "+3 days"));
        $event->place = 'Varna';
        $event->artist = 'Pesho';
        $event->entrance = 'Skaaaaapo';
        $event->title = 'Test event 2';
        $event->description = 'Test eadsadsa dsadasdas';
        $img = Image::make("C:/xampp/htdocs/Biennale/public/img/eventsimg/pic2.jpg")->encode('data-url');
        $event->photo = $img;
        $event->save();

        $event = new Events();
        $event->start = date('Ymd',strtotime('20161112' . "+4 days"));
        $event->end = date('Ymd',strtotime('20161112' . "+5 days"));
        $event->place = 'Burgas';
        $event->artist = 'Minka';
        $event->entrance = 'Kat za batka';
        $event->title = 'Test event 3';
        $event->description = 'Test event 3 dsadasda';
        $img = Image::make("C:/xampp/htdocs/Biennale/public/img/eventsimg/pic3.jpg")->encode('data-url');
        $event->photo = $img;
        $event->save();
//
//        $event = new Events();
//        $event->start = date('Ymd',strtotime('20161112' . "+6 days"));
//        $event->end = date('Ymd',strtotime('20161112' . "+7 days"));
//        $event->place = 'Plovdiv';
//        $event->artist = 'Mariika';
//        $event->entrance = 'Free';
//        $event->title = 'Test event 4';
//        $event->description = 'Test event 4 freee freee...';
//        $img = Image::make("C:/xampp/htdocs/Biennale/public/img/eventsimg/pic3.jpg")->encode('data-url');
//        $event->photo = $img;
//        $event->save();
//
//        $event = new Events();
//        $event->start = date('Ymd',strtotime('20161112' . "+8 days"));
//        $event->end = date('Ymd',strtotime('20161112' . "+9 days"));
//        $event->place = 'Sofia';
//        $event->artist = 'Stamat';
//        $event->entrance = '3.50 kamaka';
//        $event->title = 'Test event 5';
//        $event->description = 'Test event 5 Stamat t.....';
//        $img = Image::make("C:/xampp/htdocs/Biennale/public/img/eventsimg/pic3.jpg")->encode('data-url');
//        $event->photo = $img;
//        $event->save();
//
//        $event = new Events();
//        $event->start = date('Ymd',strtotime('20161112' . "+10 days"));
//        $event->end = date('Ymd',strtotime('20161112' . "+11 days"));
//        $event->place = 'Ruse';
//        $event->artist = 'Cvetelina';
//        $event->entrance = '3.50 vav valauta';
//        $event->title = 'Test event 6';
//        $event->description = 'Test event 5 bqachno zad mene varviiiiii tttatatatata';
//        $img = Image::make("C:/xampp/htdocs/Biennale/public/img/eventsimg/pic3.jpg")->encode('data-url');
//        $event->photo = $img;
//        $event->save();

    }
}
