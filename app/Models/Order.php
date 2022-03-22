<?php

namespace App\Models;

use App\Models\OrderStatus;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'OrderID','EmployeeID','OrderDate','CustomerID','ShippedDate', 'ShipperID', 'ShipName','ShipAdddress','ShipCity','ShipState', 'ShipZIP','ShipCountry','ShippingFee','Taxes','PaymentType','PaidDate','Notes','TaxRate','TaxStatus','StatusID'
    ];

    public function orderstatus()
    {
        return $this->belongsTo(OrderStatus::class, 'StatusID', 'StatusID');
    }
}
