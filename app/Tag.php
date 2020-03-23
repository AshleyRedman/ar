<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guareded = [];

    public function post()
    {
        $this->belongsToMany(Post::class);
    }
}
