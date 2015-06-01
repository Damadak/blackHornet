<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SessionVote extends Model {

    public function Prix() {
        return $this->hasMany('App\Prix');
    }

    public function Image() {
        return $this->hasMany('App\Image');
    }

    public function Vote() {
        return $this->hasMany('App\Vote');
    }

    public function Partcipation() {
        return $this->hasMany('App\Participation');
    }

    public function Mannequin() {
        return $this->hasOne('App\Mannequin');
    }

    public function Representation() {
        return $this->hasMany('App\Representation');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
