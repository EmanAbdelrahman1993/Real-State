<?php

namespace App;
use App\Area;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';

    public function User()
    {
        return $this->hasOne('App\User','id','user_id');
    }

    public function Area()
    {
        return $this->belongsTo('App\Area');
    }
}
