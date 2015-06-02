<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model {

    public function mannequin() {
        return $this->belongsTo('App\Mannequin');
    }

    public function sessionVote() {
        return $this->belongsTo('App\SessionVote');
    }

    public static function isValid($data = array()) {
//a faire
    }

}
