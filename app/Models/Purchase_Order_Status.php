<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_Order_Status extends Model
{
    //

    public function purchase_order() {
        return $this->hasMany(Purchase_Order::class);
    }
}
