<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habillement extends Model {

    public function habit() {
        return $this->belongsTo('App\Habits');
    }

    public function mannequin() {
        return $this->belongsTo('App\Mannequin');
    }

    public static function isValid($data = array()) {
// faire
    }

}
