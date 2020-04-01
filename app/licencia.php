<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class licencia extends Model
{
    protected $table = 'licencia';

    public function personal(){
        return $this->belonsTo('App\empleado','run','run');
    }
}
