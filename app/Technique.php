<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ApplicationForm;

class Technique extends Model
{
    public function applicationForms() {
        return $this->belongsToMany('App\Work');
    }
}
