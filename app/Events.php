<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon; 

use Illuminate\Database\Eloquent\SoftDeletes;

class Events extends Model {

//    /**
//    * The attributes that should be mutated to dates.
//    *
//    * @var array
//    */
//
//    protected $table    = 'events';
//
//    protected $fillable = [
//          'start',
//          'end',
//          'place',
//          'artist',
//          'entrance',
//          'title',
//          'description',
//          'photo'
//    ];
//
//
//    public static function boot()
//    {
//        parent::boot();
//
//        //Events::observe(new UserActionsObserver);
//    }
//
//    public function setStartAttribute($value)
//    {
//        $this->attributes['start'] = date('Y-m-d H:i:s', strtotime($value));
//    }
//
//    public function setEndAttribute($value)
//    {
//        $this->attributes['end'] = date('Y-m-d H:i:s', strtotime($value));
//    }
//
//    public function getStartAttribute()
//    {
//        return date('d.m.Y H:i', strtotime($this->attributes['start']));
//    }
//
//    public function getEndAttribute()
//    {
//        return date('d.m.Y H:i', strtotime($this->attributes['end']));
//    }
}