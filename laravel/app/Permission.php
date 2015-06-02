<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Permission extends Model {

    public function possessionRole()
    {
        return $this->hasMany('App\PossessionRole')->withTimestamps();
    }

}
