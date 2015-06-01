<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model {

    public function Habits() {
        return $this->hasMany('App\Habits');
    }

    public function Mannequin() {
        return $this->belongsToMany('App\Mannequin');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
