<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habits extends Model {

    public function definitions() {
        return $this->hasMany('App\Definition');
    }

    public function rangements() {
        return $this->hasMany('App\Rangement');
    }

    public function habillements() {
        return $this->hasMany('App\Habillement');
    }

    public function marque() {
        return $this->belongsTo('App\Marque');
    }

    public static function isValid($data = array()) {
// faire
    }

}
