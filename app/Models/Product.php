<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'productName','quantityPerUnit','unitPrice', 'unitStock', 'unitOrder', 'reorderLevel', 'discontinued'
    ];
}
