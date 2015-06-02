<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SessionVote extends Model {

    public function prixs() {
        return $this->hasMany('App\Prix');
    }

    public function votes() {
        return $this->hasMany('App\Vote');
    }

    public function partcipations() {
        return $this->hasMany('App\Participation');
    }

    public function mannequinGagne() {
        return $this->hasOne('App\Mannequin');
    }

    public function representations() {
        return $this->hasMany('App\Representation');
    }

    public static function isValid($data = array()) {
//a faire
    }

}
