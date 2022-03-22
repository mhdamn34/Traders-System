<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
      'company',
      'lastName',
      'firstName',
      'emailAddress',
      'jobTitle',
      'businessPhone',
      'homePhone' 
    ];
}