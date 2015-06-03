<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model {

    public function utilisateur() {
        return $this->belongsTo('App\Utilisateur');
    }

    public function gardeRobes() {
        return $this->hasMany('App\GardeRobe');
    }
    
        public function votes() {
        return $this->hasMany('App\Vote');
    }

    public static function isValid($data = array()) {
//a faire
    }

}

