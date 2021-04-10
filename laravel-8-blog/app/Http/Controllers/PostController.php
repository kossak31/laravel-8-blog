<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {

        return view('create');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $this->validate(
            $request,
            [
                'title' => 'required|max:1',
                'body' => 'required|max:255'
            ],
            [
                'title.required' => 'Indica um titulo',
                'body.required' => 'Indica um texto',
            ]
        );

        auth()->user()->posts()->create($request->all());
        return redirect()->action([PostController::class, 'index']);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('show', compact('post'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->action([PostController::class, 'index']);
    }
}
