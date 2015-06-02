<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GardeRobe extends Model {

    public function rangements() {
        return $this->hasMany('App\Rangement');
    }

    public function personne() {
        return $this->belongsTo('App\Personne');
    }

    public static function isValid($data = array()) {
//faire
    }

}
