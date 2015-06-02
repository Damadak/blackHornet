<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreferenceMagasin extends Model {

    public function magasin() {
        return $this->belongsTo('App\Magasin');
    }

    public function mannequin() {
        return $this->belongsTo('App\Mannequin');
    }

    public static function isValid($data = array()) {
//a faire
    }

}
