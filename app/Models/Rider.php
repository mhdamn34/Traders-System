<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    //
    protected $fillable = [
      
        'rider_name','phone_number','date_of_birth',
    ];

    public function ordergrab(){
        return $this->hasMany(OrderGrab::class);
    }
}
