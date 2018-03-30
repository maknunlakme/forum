<?php

namespace App;



class Comment extends Model
{
    public  function post()
    {
    	return $this->belongsTO(Post::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
