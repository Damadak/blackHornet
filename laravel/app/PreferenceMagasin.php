<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreferenceMagasin extends Model {

    public function Magasin() {
        return $this->hasOne('App\Magasin');
    }

    public function Mannequin() {
        return $this->belongsTo('App\Mannequin');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
