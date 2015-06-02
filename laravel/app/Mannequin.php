<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mannequin extends Model {

    public function personne() {
        return $this->belongsTo('App\Personne');
    }

    public function shootings() {
        return $this->hasMany('App\Shooting');
    }

    public function participations() {
        return $this->hasMany('App\Participation');
    }

    public function preferenceMagasins() {
        return $this->hasMany('App\preferenceMagasin');
    }

    public function habillements() {
        return $this->hasMany('App\Habillements');
    }

    public function preferenceMarques() {
        return $this->hasMany('App\PreferenceMarque');
    }
    
        public function sessionVoteGagnes() {
        return $this->hasMany('App\SessionVoteGagne');
    }

    public static function isValid($data = array()) {
// a faire
    }

}
