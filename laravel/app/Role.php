<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Role extends Model {

    public function PossessionUtilisateur()
    {
        return $this->belongsToMany('App\PossessionUtilisateur')->withTimestamps();
    }

    public function PossessionRole()
    {
        return $this->hasMany('App\PossessionRole')->withTimestamps();
    }


}
