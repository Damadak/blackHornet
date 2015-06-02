<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shooting extends Model {

    public function images() {
        return $this->hasMany('App\Image');
    }

    public function mannequin() {
        return $this->belongsTo('App\Mannequin');
    }

    public static function isValid($data = array()) {
//a faire
    }

}
