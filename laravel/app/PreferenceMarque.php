<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreferenceMarque extends Model {

    public function marque() {
        return $this->belongsTo('App\Marque');
    }

    public function mannequin() {
        return $this->belongsTo('App\Mannequin');
    }

    public static function isValid($data = array()) {
//a faire
    }

}
