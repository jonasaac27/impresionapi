<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $table = 'empleado';


    public function licencias(){
        return $this->hasMany('App\licencia','run','run');
    }
}
