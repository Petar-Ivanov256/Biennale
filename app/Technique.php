<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
    public function applicationForms() {
        return $this->belongsToMany('ApplicationForm');
    }
}
