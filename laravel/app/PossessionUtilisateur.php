<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PossessionUtilisateur extends Model {

    public function utilisateur() {
        return $this->belongsTo('App\Utilisateur');
    }

    public function role() {
        return $this->belongsTo('App\Role');
    }

    public static function isValid($data = array()) {
//a faire
    }

}
