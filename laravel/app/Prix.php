<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prix extends Model {

    public function partenaire() {
        return $this->belongsTo('App\Partenaire');
    }

    public function sessionVote() {
        return $this->belongsTo('App\SessionVote');
    }

    public static function isValid($data = array()) {
//� faire
    }

}
