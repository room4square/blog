<?php

namespace App;

//use App\Model;

class Post extends Model
{
    //untuk protect field bs implement fillable dibawah ini atau
    //protected $fillable = ['title','body'];

    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        Comment::create([
            'body' => $body,
            'post_id' => $this->id
        ]);
    }

    
}
