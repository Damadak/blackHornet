<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PossessionUtilisateur extends Model {

    public function Utilisateur() {
        return $this->belongsTo('App\Utilisateur');
    }

    public function Role() {
        return $this->hasOne('App\Role');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
