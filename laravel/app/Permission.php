<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Permission extends Model {

    public function PossessionRole()
    {
        return $this->belongsTo('App\Role')->withTimestamps();
    }

}
