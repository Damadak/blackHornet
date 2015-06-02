<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristique extends Model {

    public function definitionPartenaires() {
        return $this->hasMany('App\DefinitionPartenaire');
    }

    public function definitions() {
        return $this->hasMany('App\Definition');
    }

    public static function isValid($data = array()) {
// faire
    }

}
