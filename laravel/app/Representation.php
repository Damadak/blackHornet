<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representation extends Model {

    public function DefinitionPartenaire() {
        return $this->belongsTo('App\SessionVote');
    }

    public function Image() {
        return $this->hasOne('App\Image');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
