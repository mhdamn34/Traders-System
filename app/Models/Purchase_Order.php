<?php

namespace App\Models;

use App\Purchase_Order_Status;
use Illuminate\Database\Eloquent\Model;

class Purchase_Order extends Model
{
    //
    protected $table = 'purchase_orders';

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function purchase_order_status()
    {
        return $this->belongsTo(Purchase_Order_Status::class);
    }
}
