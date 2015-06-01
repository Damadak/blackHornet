<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristique extends Model {

    public function DefinitionPartenaire() {
        return $this->hasMany('App\DefinitionPartenaire');
    }

    public function Definition() {
        return $this->hasMany('App\Definition');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
