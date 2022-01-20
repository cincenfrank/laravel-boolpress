<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'content', 'author', 'category_id', 'published', 'imageSrc'];

    public function user()
    {
        return $this->belongsTo('App\User', 'author_id');
    }
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
