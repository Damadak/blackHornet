<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representation extends Model {

    public function sessionVote() {
        return $this->belongsTo('App\SessionVote');
    }

    public function image() {
        return $this->belongsTo('App\Image');
    }

    public static function isValid($data = array()) {
//a faire
    }

}
