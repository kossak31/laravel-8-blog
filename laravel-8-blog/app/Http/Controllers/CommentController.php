<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Post $post, Request $request)
    {
        $comment = $post->comments()->create([
            'user_id' => auth()->id(),
            'body' => $request->get('body')
        ]);


        return back();
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back();
    }
}
