<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model {

    public function Mannequin() {
        return $this->hasOne('App\Mannequin');
    }

    public function SessionVote() {
        return $this->belongsTo('App\SessionVote');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
