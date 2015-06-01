<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreferenceMarque extends Model {

    public function Marque() {
        return $this->hasOne('App\Marque');
    }

    public function Mannequin() {
        return $this->belongsTo('App\Mannequin');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
