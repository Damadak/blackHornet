<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shooting extends Model {

    public function Image() {
        return $this->hasMany('App\Image');
    }

    public function Mannequin() {
        return $this->belongsTo('App\Mannequin');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
