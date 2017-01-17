<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ApplicationForm;

class Technique extends Model
{
    public function Works() {
        return $this->belongsToMany('App\Work', 'work_technique');
    }
}
