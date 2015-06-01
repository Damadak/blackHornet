<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PossessionRole extends Model {

    public function Permission() {
        return $this->belongsToMany('App\Permission');
    }

    public function Role() {
        return $this->belongsTo('App\Role');
    }

    public static function isValid($data = array()) {
//à faire
    }

}
