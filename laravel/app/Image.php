<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

    public function Representation() {
        return $this->belongsTo('App\Representation');
    }

    public function Shooting() {
        return $this->belongsTo('App\Shooting');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
