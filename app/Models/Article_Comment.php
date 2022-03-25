<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article_Comment extends Model
{
    //
    protected $table = 'article_comments';

    protected $fillable = [
        'text', 'star'
    ];
    
    public function Article(){
            return $this->belongsTo('Article');
    }
}
