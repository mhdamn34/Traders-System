<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderGrab extends Model
{
    //
    protected $fillable = [

        'rider_id','order_description',
    ];

    public function Rider(){
        return $this -> BelongsTo('Rider');
    }
}
