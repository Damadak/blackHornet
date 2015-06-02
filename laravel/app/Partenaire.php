<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model {

    public function definitionPartenaires() {
        return $this->hasMany('App\DefinitionPartenaire');
    }

    public function Prixs() {
        return $this->hasMany('App\Prix');
    }

    public static function isValid($data = array()) {
//a faire
    }

}
