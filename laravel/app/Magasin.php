<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magasin extends Model {

    public function Mannequin() {
        return $this->belongsToMany('App\Mannequin');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
