<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderGrab extends Model
{
    //
    protected $fillable = [

        'rider_id','order_description','order_name'
    ];

    public function rider(){

        return $this -> belongsTo(Rider::class);
    }
}
