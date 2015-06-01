<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model {

    public function DefinitionPartenaire() {
        return $this->hasOne('App\DefinitionPartenaire');
    }

    public function Prix() {
        return $this->hasMany('App\Prix');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
