<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Privileges extends Model
{
    //
    public function Employee(){
        return $this->hasMany('Employee');
    }
}
