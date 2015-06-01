<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DefinitionPartenaire extends Model {

    public function Caracteristique() {
        return $this->hasMany('App\Caracteristique');
    }

    public function Partenaire() {
        return $this->belongsTo('App\Partenaire');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
