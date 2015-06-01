<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GardeRobe extends Model {

    public function Rangement() {
        return $this->hasOne('App\Rangement');
    }

    public function Personne() {
        return $this->belongsTo('App\Personne');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
