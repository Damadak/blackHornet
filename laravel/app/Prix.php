<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prix extends Model {

    public function Partenaire() {
        return $this->belongsTo('App\Partenaire');
    }

    public function SessionVote() {
        return $this->belongsTo('App\SessionVote');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
