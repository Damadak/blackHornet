<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habillement extends Model {

    public function Habits() {
        return $this->hasMany('App\Habits');
    }

    public function Mannequin() {
        return $this->belongsTo('App\Mannequin');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
