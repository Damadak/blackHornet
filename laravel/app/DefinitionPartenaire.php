<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DefinitionPartenaire extends Model {

    public function caracteristique() {
        return $this->belongsTo('App\Caracteristique');
    }

    public function partenaire() {
        return $this->belongsTo('App\Partenaire');
    }

    public static function isValid($data = array()) {
// faire
    }

}
