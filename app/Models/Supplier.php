<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //

    protected $fillable = [
        'company','firstName', 'lastName', 'jobTitle', 'businessPhone'
    ];
    
}

