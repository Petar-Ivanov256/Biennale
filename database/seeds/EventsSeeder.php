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
        $date = date('Ymd', strtotime('20170131'));
        $date1 = date('Ymd',strtotime('20161112' . "+1 days"));

        $event = new Events();
        $event->start = $date;
        $event->end = null;
        $event->title = 'СтъклЕКО';
        $event->title_en = 'StuklECO';
        $event->place = 'ЧУ "Цар Симеон Велики", София';
        $event->place_en = 'Tsar Simeon Veliki - school, Sofia';
        $event->participants = '"Грийнпийс България", "За Земята", Екипът на МБС';
        $event->participants_en = 'Greenpeace - Bulgaria, "Za zemyata", IBG team';
        $event->entrance = 'безплатен';
        $event->entrance_en = 'free';
        $event->description = 'REUSE - REDUCE - RECYCLE
        Международно биенале на стъклото ще засегне различни теми, обвързани със стъклото. За нас е важно да провокираме обществото да се замисли относно рециклирането. Поради тази причина по време на биеналето ще проведем серия от творчески работилници с деца, наречени "СтъклЕКО" със съдействието на Greenpeace Bulgaria и За Земята.';
        $event->description_en = 'REUSE - REDUCE - RECYCLE
        International Biennale of Glass will cover different aspects concerning glass. It is important for us to provoke the society to think over the theme of recycling glass. Thus, throughout the biennale a series of workshops among children called "StuklECO" will be done in cooperation with Greenpeace Bulgaria and Za Zemiata.';
        $event->category_id = 3;
        $event->latitude = '42.617119';
        $event->longitude = '23.335972';
        //42.617119, 23.335972
//        $img = Image::make("C:/xampp/htdocs/Biennale/public/img/eventsimg/pic1.jpg")->encode('data-url');
//        $event->photo = $img;
        $event->save();

    }
}
