<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [

        'id','title','message','updated_at','created_by','created_at'
    ];

    public function comments()
    {
        return $this->hasMany('Comment');
    }

    

    
}
