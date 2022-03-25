<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee_Privileges extends Model
{
    //
    protected $table = 'employee_privileges';

    public function Employee()
    {
        return $this->belongsTo('Employee');
    }

    public function Privileges(){
        return $this->belongsTo('Privileges');
    }
}
