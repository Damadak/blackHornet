<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magasin extends Model {

    public function preferenceMagasins() {
        return $this->hasMany('App\PreferenceMagasin');
    }

    public static function isValid($data = array()) {
//a faire
    }

}
