<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model {

    public function SessionVote() {
        return $this->hasOne('App\SessionVote');
    }

    public function Personne() {
        return $this->belongsTo('App\Personne');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
