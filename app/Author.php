<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function works()
    {
        return $this->belongsToMany('App\Work');
    }
}
