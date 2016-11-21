<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Technique;

class ApplicationForm extends Model
{
    public function techniques() {
        return $this->belongsToMany('App\Technique');
    }
}
