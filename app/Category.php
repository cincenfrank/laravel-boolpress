<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name', 'description'];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function postsLimited()
    {
        return $this->hasMany(Post::class)->limit(12);
    }
}
