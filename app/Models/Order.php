<?php

namespace App\Models;

use App\Models\OrderStatus;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [];

    public function orderstatus()
    {
        // return $this->belongsTo(OrderStatus::class, 'StatusID', 'StatusID');
        
    }
    //  public function dropdown(){
    //     return $this->belongsTo(Customers::class, 'id', 'id');
    //  }

    public function Employee(){

        return $this->belongsToMany('Employee');
    }

    public function Customer(){

        return $this->belongsTo('Customer');
    }

    public function Shipper(){

        return $this->belongsToMany('Shipper');
    }
    public function Order_Status(){

        return $this->belongsToMany('Order_Status');
    }
    
}
