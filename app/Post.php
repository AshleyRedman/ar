<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'url',
        'image',
        'tag_id'
    ];

    public function tag()
    {
        $this->hasOne(Tag::class);
    }
}
