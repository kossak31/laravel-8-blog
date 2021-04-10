<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'body'];

    public function post()
    {
        //cada comentario pertence a um post
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function user()
    {
        //cada user pertence a um post
        return $this->belongsTo(User::class);
    }
}
