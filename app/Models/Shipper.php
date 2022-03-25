<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    //
    protected $fillable = [
        'company','first_name','last_name', 'email_address', 'job_title', 'business_phone', 'mobile_phone',
        'fax_number', 'address','city','state','postal_code','country', 'web_page','notes'
    ];

    public function Order() {
        return $this->has('Order');
    }
}
