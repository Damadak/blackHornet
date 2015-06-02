<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model {

    public function sessionVotes() {
        return $this->belongsTo('App\SessionVote');
    }

    public function personne() {
        return $this->belongsTo('App\Personne');
    }

    public static function isValid($data = array()) {
//a faire
    }

}
