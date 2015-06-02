<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Role extends Model {

    public function possessionUtilisateurs()
    {
        return $this->hasMany('App\PossessionUtilisateur')->withTimestamps();
    }

    public function possessionRoles()
    {
        return $this->hasMany('App\PossessionRole')->withTimestamps();
    }


}
