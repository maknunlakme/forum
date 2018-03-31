<?php

namespace App;

class Problem extends Model
{
    public function tags()
    {
    	return $this->belongsToMany(Tag::class);
    }
}
