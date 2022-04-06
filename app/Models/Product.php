<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'product_code','product_name','category', 'supplier', 'quantity_per_unit', 'description', 'standard_cost',
        'list_price', 'reorder_level','target_level','default_reorder','discontinued'
    ];


    
}

