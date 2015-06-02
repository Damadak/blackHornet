<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Definition extends Model {
    //salut les geekds

    public function caracteristique() {
        return $this->belongsTo('App\Caracteristique');
    }

    public function habit() {
        return $this->belongsTo('App\Habits');
    }

    public static function isValid($data = array()) {
//faire
    }

}
