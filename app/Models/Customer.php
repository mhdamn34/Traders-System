<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{

    protected $fillable = [
        'company','first_name','last_name','email_address','job_title', 'business_phone','mobile_phone',
        'home_phone', 'fax_number','address','city', 'state', 'postal_code', 'country', 'web_page',
        'notes' 
    ];

    use SoftDeletes;

    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
