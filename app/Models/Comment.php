<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    // protected $fillable = [
    //     'id','message','post_id','created_by','created_at','updated_at'
    // ];

    // public function posts(){
    //     return $this->hasMany(Post::class);
    // }

    protected $table = 'comments';

    protected $fillable = [
        'message', 'post_id','created_by'
    ];
    
    public function Article(){
            return $this->belongsTo('Post');
    }
}
