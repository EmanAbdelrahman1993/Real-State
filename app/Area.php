<?php

namespace App;
use App\User;
use App\Property;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table ='areas';

    public function User()
    {
        return $this->hasOne('App\User','id','user_id');
    }

    public function Property()
    {
        return $this->hasMany('App\Property','areas_id','id');
    }

}
