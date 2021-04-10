<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body'];

    public function comments()
    {
        //cada post tem varios comentarios
        return $this->hasMany(Comment::class, 'user_id');
    }
    public function user()
    {
        //cada post pertence ao user -> belongsTo
        return $this->belongsTo(User::class);
    }
}
