<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Definition extends Model {

    public function Caracteristique() {
        return $this->belongsToMany('App\Caracteristique');
    }

    public function Habits() {
        return $this->belongsTo('App\Habits');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
