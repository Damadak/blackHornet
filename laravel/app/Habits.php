<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habits extends Model {

    public function Definition() {
        return $this->hasOne('App\Definition');
    }

    public function Rangement() {
        return $this->belongsToMany('App\Rangement');
    }

    public function Habillement() {
        return $this->belongsToMany('App\Habillement');
    }

    public function Marque() {
        return $this->belongsTo('App\Marque');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
