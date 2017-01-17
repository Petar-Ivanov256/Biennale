<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function authors()
    {
        return $this->belongsToMany('App\Author');
    }

    public function techniques()
    {
    	return $this->belongsToMany('App\Technique');
    }
}
