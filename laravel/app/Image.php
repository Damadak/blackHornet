<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

    public function representations() {
        return $this->hasMany('App\Representation');
    }

    public function shooting() {
        return $this->belongsTo('App\Shooting');
    }

    public static function isValid($data = array()) {
// faire
    }

}
