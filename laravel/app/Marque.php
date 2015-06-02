<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model {

    public function habits() {
        return $this->belongsToMany('App\Habits');
    }

    public function preferenceMarques() {
        return $this->hasMany('App\PreferenceMarque');
    }

    public static function isValid($data = array()) {
//a faire
    }

}
